<?php
if (!isset($_SESSION["usuario"])) {
    echo "<script>";
    echo "window.location.href = 'PaginaInicial.php';";
    echo "</script> ";
}
?>
