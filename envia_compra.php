<?php
include './admin/conections/conexao.php';
$emailsender = $email;
$emaildestinatario = "karolfurletti@gmail.com";

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
$tipo_envio = $_POST['tipo_envio'];
$cep = $_POST['cep'];
$livro_id = $_GET['id'];

//$nome = "JOAO SILVA";
//$email = "joao.silva@gmail.com";
//$telefone = "(92)3664-5299";
//$obs = "";
//$titulo = "A CABANA";
//$assunto = "Publicao de livro";
//$status = 2;
//$tipo = 1;
//$qtd = 400;


$sql_livro = "SELECT * FROM livro WHERE livro_id = $livro_id";
$executa_livro = mysql_query($sql_livro)or die(mysql_error());
$dados_livro = mysql_fetch_array($executa_livro);

$codigo_livro = $dados_livro['livro_id'];
$nome_livro = $dados_livro['titulo'];



$mensagemHTML = "<p>Compra Reggo</p>";
$mensagemHTML .= "<hr>";
$mensagemHTML .= "DADOS LIVRO";
$mensagemHTML .= "<p><b>COD:</b> $codigo_livro </p>";
$mensagemHTML .= "<p><b>Titulo:</b> $nome_livro </p>";
$mensagemHTML .= "<hr>";
$mensagemHTML .= "<p><b>Nome:</b> $nome </p>";
$mensagemHTML .= "<p><b>Email:</b> $email </p>";
$mensagemHTML .= "<p><b>Telefone:</b> $telefone </p>";
$mensagemHTML .= "<p><b>CEP:</b> $cep </p>";
$mensagemHTML .= "<p><b>Tipo de Envio: </b> $tipo_envio</p>";
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
$sql_insert = "INSERT INTO compra (nome, email, telefone, livro_id) VALUES ('$nome', '$email', '$telefone', $livro_id)";
$executa_sql_insert = mysql_query($sql_insert)or die(mysql_error());


if ($resposta) {
    ?>

    <script>
        window.location.href = 'comprar.php?r=certo&id=<?php echo $livro_id; ?>'

    </script>

    <?php
} else {
    ?>

    <script>
        window.location.href = 'comprar.php?r=erro&id=<?php echo $livro_id; ?>'

    </script>

    <?php
}

