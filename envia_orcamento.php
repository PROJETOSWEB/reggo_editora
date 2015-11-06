<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$obs= $_POST['obs'];
$titulo= $_POST['titulo'];
$assunto= $_POST['assunto'];
$status = $_POST['status'];
$tipo = $_POST['tipo'];
$qtd = $_POST['qtd'];

if($status == 1){
    
    $status = "Pronto para Publicar";
}else if($status == 2){
    
    $status = "Escrevendo";
}else if($status == 3){
    
    $status = "Vou escrever";
}


if($tipo == 1){
    
    $tipo = "Impresso";
}else if($tipo == 2){
    
    $tipo = "e-Book";
}


$to = 'thiago@maneschy.com';
$subject = 'Orcamento Reggo';
$email = $nome . "\r\n";
$email .= $email . "\r\n";
$email .= $telefone . "\r\n";
$email .= $obs . "\r\n";
$email .= $titulo . "\r\n";
$email .= "\r\n\r\n";
$email .= 'Status:';
$email .= $status . "\r\n";
$email .= 'Tipo Publicação:';
$email .= $tipo . "\r\n";
$email .= 'Quantidade de Exemplares:';
$email .= $qtd . "\r\n";

$headers = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: Orcamento Reggo <contato@karol.com.br>";
//$headers[] = "Bcc: Setor Vendas <thiago@maneschy>";
//$headers[] = "Reply-To: Recipient Name <ti@fergel.com.br>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/" . phpversion();

$retval = mail($to, $subject, $email, implode("\r\n", $headers));

if ($retval == true) {
    ?>

    <script>
        window.location.href = '../orcamento.php'

    </script>

    <?php
} else {
    ?>

    <script>
        window.location.href = '../orcamento.php'

    </script>

    <?php
}
?>
