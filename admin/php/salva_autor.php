<?php

session_start();
if ((!isset($_SESSION['usuario']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

$id_usuario = $_SESSION['id'];

include '../conections/conexao.php';

//PEGANDO DADOS POR POST
$data = $_POST['data'];
$nome = $_POST['nome'];
$informacoes = $_POST['informacoes'];
$reflexao = $_POST['reflexao'];
$facebook = $_POST['facebook'];
$google = $_POST['google'];
$twitter = $_POST['twitter'];
$instagram = $_POST['instagram'];



$data_autor = explode('-', $data);
$nova_data = $data_autor[2] . "-" . $data_autor[1] . "-" . $data_autor[0];


//PEGANDO IMAGEM
$fileName = $_FILES["img"]["name"];
$pathAndName = "../imagens/autor/" . $fileName;
$fileTmpLoc = $_FILES["img"]["tmp_name"];
$moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);


$insert = "INSERT INTO autor (data_autor, nome, info, img, reflexao, facebook, google, twitter, instagram, usuario_id)"
        . "VALUES('$nova_data',  '$nome', '$informacoes', '$fileName', '$reflexao', '$facebook', '$google', '$twitter', '$instagram', $id_usuario)";

$executa_insert = mysql_query($insert)or die(mysql_error());

if ($executa_insert) {
    ?>

    <script>
        window.location.href = '../list_autores.php?resp=sucesso';
    </script>

    <?php

} else {
    ?>
    <script>
        window.location.href = '../list_autores.php?resp=erro';
    </script>
    <?php

}

