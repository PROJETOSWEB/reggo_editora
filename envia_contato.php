<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];


$to = 'thiago@maneschy.com';
$subject = 'Contato Reggo';
$email = $nome . "\r\n";
$email .= $email . "\r\n";
$email .= $assunto . "\r\n";
$email .= $mensagem . "\r\n";


$headers = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: Contato Reggo <contato@karol.com.br>";
//$headers[] = "Bcc: Setor Vendas <thiago@maneschy>";
//$headers[] = "Reply-To: Recipient Name <ti@fergel.com.br>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/" . phpversion();

$retval = mail($to, $subject, $email, implode("\r\n", $headers));

if ($retval == true) {
    ?>

    <script>
        window.location.href = '../contato.php'

    </script>

    <?php
} else {
    ?>

    <script>
        window.location.href = '../contato.php'

    </script>

    <?php
}
?>
