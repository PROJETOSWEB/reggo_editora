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



$data_livro = explode('-', $data);
$nova_data = $data_livro[2] . "-" . $data_livro[1] . "-" . $data_livro[0];


//PEGANDO IMAGEM
$fileName = $_FILES["img"]["name"];
$pathAndName = "../imagens/livro/" . $fileName;
$fileTmpLoc = $_FILES["img"]["tmp_name"];
$moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);



  $insert = "INSERT INTO livro (data_livro, tipo, titulo, sinopse, preco, link, formato, num_pag, isbn, assunto_id, autor_id, usuario_id, img)"
        . "VALUES('$nova_data', $tipo, '$titulo', '$sinopse', '$preco', '$link', '$formato', $npag, '$isbn', $assunto, $autor, $id_usuario, '$fileName')";

$executa_insert = mysql_query($insert)or die(mysql_error());

if ($executa_insert) {
    ?>

    <script>
        window.location.href = '../list_livros.php?resp=sucesso';
    </script>

    <?php

} else {
    ?>
    <script>
        window.location.href = '../list_livros.php?resp=erro';
    </script>
    <?php

}
?>