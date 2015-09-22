<?php

include '../conections/conexao.php';
$id_fotos = $_GET['id'];


$delete_usuario = "DELETE FROM fotos WHERE fotos_id = $id_fotos";
$executa_delete = mysql_query($delete_usuario)or die(mysql_error());


if ($executa_delete) {
    ?>

    <script>
        window.location.href = '../vfotos.php?respt=sucesso';
    </script>
    <?php

} else {
    ?>

    <script>
        window.location.href = '../vfotos.php?respt=erro';
    </script>
    <?php

}

