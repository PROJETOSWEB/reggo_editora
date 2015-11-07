<?php

$emailsender = "karolfurletti@gmail.com";
$emaildestinatario = "thiago@maneschy.com";


/* Verifica qual é o sistema operacional do servidor para ajustar o cabeçalho de forma correta. Não alterar */
if (PHP_OS == "Linux")
    $quebra_linha = "\n"; //Se for Linux
elseif (PHP_OS == "WINNT")
    $quebra_linha = "\r\n"; // Se for Windows
else
    die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");

// Passando os dados obtidos pelo formulário para as variáveis abaixo
//$nomeremetente     = $_POST['nomeremetente'];
//$emailremetente    = trim($_POST['emailremetente']);
//$emaildestinatario = trim($_POST['emaildestinatario']);
//$comcopia          = trim($_POST['comcopia']);
//$comcopiaoculta    = trim($_POST['comcopiaoculta']);
//$assunto           = $_POST['assunto'];
//$mensagem          = $_POST['mensagem'];

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];


//$nome = "KAROLINE OLIVEIRA";
//$email = "karol@karol.com";
//$assunto = "INFORMACOES DE VALORES";
//$mensagem = "Gostaria de informacoes sobre os valores dos livros";


/* Montando a mensagem a ser enviada no corpo do e-mail. */
//$mensagemHTML = '<P>Esse email &eacute; um teste enviado no formato HTML via PHP mail();!</P>
//<P>Aqui est&aacute; a mensagem postada por voc&ecirc; formatada em HTML:</P>
//<p><b><i>'.$mensagem.'</i></b></p>
//<hr>';

$mensagemHTML = "<p>Dados do Formulario de Contato</p>";
$mensagemHTML .= "<hr>";
$mensagemHTML .= "<p><b>Nome:</b> $nome </p>";
$mensagemHTML .= "<p><b>Email:</b> $email </p>";
//$mensagemHTML .= "<p>Assunto: $assunto </p>";
$mensagemHTML .= "<p><b>Mensagem:</b> $mensagem </p>";
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

if ($resposta) {
    ?>

    <script>
        window.location.href = 'contato.php?r=certo'

    </script>

    <?php

} else {
    ?>

    <script>
        window.location.href = 'contato.php?r=erro'

    </script>

    <?php

}
?>

    