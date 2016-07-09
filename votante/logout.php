<?php
session_start();
session_destroy();
echo 'Ha terminado la session';
?>

<script>
location.href = "/votacion2/votante/voto.php";
</script>