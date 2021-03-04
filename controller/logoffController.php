<?php
session_start();
session_destroy();

echo "<script>";
echo "window.location.href = '../view/PaginaInicial.php';";
echo "</script> ";
?>
