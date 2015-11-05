<?php

include '../conections/conexao.php';
$id_autor = $_GET['id'];


$delete_usuario = "DELETE FROM autor WHERE autor_id = $id_autor";
$executa_delete = mysql_query($delete_usuario)or die(mysql_error());


if ($executa_delete) {
    ?>

    <script>
        window.location.href = '../list_autores.php?respt=sucesso';
    </script>
    <?php

} else {
    ?>

    <script>
        window.location.href = '../list_autores.php?respt=sucesso';
    </script>
    <?php

}

