<?php
include './admin/conections/conexao.php';
$emailsender = $email;
$emaildestinatario = "editora@reggo.com.br";

/* Verifica qual é o sistema operacional do servidor para ajustar o cabeçalho de forma correta. Não alterar */
if (PHP_OS == "Linux")
    $quebra_linha = "\n"; //Se for Linux
elseif (PHP_OS == "WINNT")
    $quebra_linha = "\r\n"; // Se for Windows
else
    die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");


$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$obs = $_POST['obs'];
$titulo = $_POST['titulo'];
$assunto = $_POST['assunto'];
$status = $_POST['status'];
$paginas = $_POST['paginas'];
$tipo = $_POST['tipo'];
$qtd = $_POST['qtd'];



//$nome = "JOAO SILVA";
//$email = "joao.silva@gmail.com";
//$telefone = "(92)3664-5299";
//$obs = "";
//$titulo = "A CABANA";
//$assunto = "Publicao de livro";
//$status = 2;
//$tipo = 1;
//$qtd = 400;


if ($status == 1) {

    $status = "Pronto para Publicar";
} else if ($status == 2) {

    $status = "Escrevendo";
} else if ($status == 3) {

    $status = "Vou escrever";
}


if ($tipo == 1) {

    $tipo = "Impresso";
} else if ($tipo == 2) {

    $tipo = "e-Book";
}


$mensagemHTML = "<p>Orçamento Reggo</p>";
$mensagemHTML .= "<hr>";
$mensagemHTML .= "<p><b>Nome:</b> $nome </p>";
$mensagemHTML .= "<p><b>Email:</b> $email </p>";
$mensagemHTML .= "<p><b>Telefone:</b> $telefone </p>";
$mensagemHTML .= "<p><b>Paginas:</b> $paginas </p>";

if ($obs <> "") {
    $mensagemHTML .= "<p><b>OBS:</b> $obs </p>";
}

$mensagemHTML .= "<p><b>Titulo:</b> $titulo </p>";
$mensagemHTML .= "<p><b>Mensagem:</b> $mensagem </p>";
$mensagemHTML .= "<p><b>Status:</b> $status</p>";
$mensagemHTML .= "<p><b>Tipo:</b> $tipo</p>";
$mensagemHTML .= "<p><b>Quantidade de Pag:</b> $qtd</p>";
$mensagemHTML .= "<hr>";


/* Montando o cabeçalho da mensagem */
$headers = "MIME-Version: 1.1" . $quebra_linha;
$headers .= "Content-type: text/html; charset=iso-8859-1" . $quebra_linha;
// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
$headers .= "From: " . $emailsender . $quebra_linha;
$headers .= "Return-Path: " . $emailsender . $quebra_linha;
// Esses dois "if's" abaixo são porque o Postfix obriga que se um cabeçalho for especificado, deverá haver um valor.
// Se não houver um valor, o item não deverá ser especificado.
if (strlen($comcopia) > 0)
    $headers .= "Cc: " . $comcopia . $quebra_linha;
if (strlen($comcopiaoculta) > 0)
    $headers .= "Bcc: " . $comcopiaoculta . $quebra_linha;
$headers .= "Reply-To: " . $emailremetente . $quebra_linha;
// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)

/* Enviando a mensagem */
$resposta = mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r" . $emailsender);

/* Mostrando na tela as informações enviadas por e-mail */


//INSERINDO NO BANCO DE DADOS
$sql_insert = "INSERT INTO orcamento (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
$executa_sql_insert = mysql_query($sql_insert)or die(mysql_error());


if ($resposta) {
    ?>

    <script>
        window.location.href = 'orcamento.php?r=certo'

    </script>

    <?php
} else {
    ?>

    <script>
        window.location.href = 'orcamento.php?r=erro'

    </script>

    <?php
}

