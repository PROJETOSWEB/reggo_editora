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


echo $genero1 = $_POST['genero1'];
echo $genero2 = $_POST['genero2'];
echo $genero3 = $_POST['genero3'];


exit;
if($genero1 <> ""){
    $genero1 = $genero1.",";
}


if($genero2<> ""){
    $genero2 = $genero2.",";
}

if($genero3<> ""){
    $genero3 = $genero3.",";
}

$generos = $genero1.$genero2.$genero3;


//PEGANDO IMAGEM
$fileName = $_FILES["img"]["name"];
$pathAndName = "../imagens/autor/" . $fileName;
$fileTmpLoc = $_FILES["img"]["tmp_name"];
$moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);


$insert = "INSERT INTO autor (data_autor, generos, nome, info, img, reflexao, facebook, google, twitter, instagram, usuario_id)"
        . "VALUES('$data', '$generos', '$nome', '$informacoes', '$fileName', '$reflexao', '$facebook', '$google', '$twitter', '$instagram', $id_usuario)";

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

