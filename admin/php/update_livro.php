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
$tipo = $_POST['sample-radio'];
$titulo = $_POST['titulo'];
$assunto = $_POST['assunto'];
$autor = $_POST['autor'];
$sinopse = $_POST['sinopse'];
$preco = $_POST['preco'];
$link = $_POST['link'];
$formato = $_POST['formato'];
$npag = $_POST['npag'];
$isbn = $_POST['isbn'];

$id_livro = $_POST['id'];

//CONVERSAO DA DATA
$data_livro = explode('-', $data);
$nova_data = $data_livro[2] . "-" . $data_livro[1] . "-" . $data_livro[0];


$fileName = $_FILES["img"]["name"];

if ($fileName == "") {

    $nova_imagem = $_POST['imagem'];
    
} else {

    $nova_imagem = $fileName;
    $pathAndName = "../imagens/livro/" . $fileName;
    $fileTmpLoc = $_FILES["img"]["tmp_name"];
    $moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);
}

$update = "UPDATE livro SET data_livro = '$nova_data', tipo = '$tipo', titulo = '$titulo', sinopse = '$sinopse', preco = '$preco', "
        . "link = '$link', formato = '$formato', num_pag = $npag, isbn = '$isbn', assunto_id = $assunto, "
        . "autor_id = $autor, img = '$nova_imagem' WHERE livro_id = $id_livro";

$executa_update = mysql_query($update)or die(mysql_error());

if ($executa_update) {
    ?>

    <script>
        window.location.href = '../list_livros.php?respe=sucesso';
    </script>

    <?php

} else {
    ?>
    <script>
        window.location.href = '../list_livros.php?respe=erro';
    </script>
    <?php

}