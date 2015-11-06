<?php

include '../conections/conexao.php';
$id_livro = $_GET['id'];


$delete_usuario = "DELETE FROM livro WHERE livro_id = $id_livro";
$executa_delete = mysql_query($delete_usuario)or die(mysql_error());


if ($executa_delete) {
    ?>

    <script>
        window.location.href = '../list_livros.php?respt=sucesso';
    </script>
    <?php

} else {
    ?>

    <script>
        window.location.href = '../list_livros.php?respt=sucesso';
    </script>
    <?php

}

