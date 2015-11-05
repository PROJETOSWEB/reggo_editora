<?php

session_start();
if ((!isset($_SESSION['usuario']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('location:index.php');
}


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
$id_autor = $_POST['id'];

$data_autor = explode('-', $data);
$nova_data = $data_autor[2] . "-" . $data_autor[1] . "-" . $data_autor[0];

$fileName = $_FILES["img"]["name"];

if ($fileName == "") {

    $nova_imagem = $_POST['imagem'];
} else {

    $nova_imagem = $fileName;
    $pathAndName = "../imagens/autor/" . $fileName;
    $fileTmpLoc = $_FILES["img"]["tmp_name"];
    $moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);
}

$update = "UPDATE autor SET data_autor = '$nova_data', nome = '$nome', info = '$informacoes', img = '$nova_imagem',"
        . " reflexao = '$reflexao', facebook = '$facebook', google = '$google', twitter = '$twitter', instagram = '$instagram' WHERE autor_id = $id_autor ";

$executa_update = mysql_query($update)or die(mysql_error());

if ($executa_update) {
    ?>

    <script>
        window.location.href = '../list_autores.php?respe=sucesso';
    </script>

    <?php

} else {
    ?>
    <script>
        window.location.href = '../list_autores.php?respe=erro';
    </script>
    <?php

}
