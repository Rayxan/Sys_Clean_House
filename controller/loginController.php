<?php

session_start();
require_once '../dao/loginDAO.php';

$usuario = $_POST["usuario"];
$senha = md5($_POST["senha"]);

switch ($perfil = $_POST["perfil"]) {
    case "1":
        $loginDAO = new LoginDAO();
        $usuario = $loginDAO->login($usuario, $senha);
                if (!empty($usuario)) {
            $_SESSION["idAdministrador"] = $usuario["idAdministrador"];
            $_SESSION["usuario"] = $usuario["usuario"];
            $_SESSION["perfil"] = $usuario["perfil"];
            $_SESSION["nomeAdmin"] = $usuario["nomeAdmin"];
            $_SESSION["emailAdmin"] = $usuario["emailAdmin"];
            $_SESSION["cpfAdmin"] = $usuario["cpfAdmin"];
            $_SESSION["telefoneAdmin"] = $usuario["telefoneAdmin"];
            echo "<script>";
            echo "window.location.href = '../view/principal.php';";
            echo "</script> ";
        } else {
            $msg = "Usuário e/ou senha invalido";
            echo "<script>";
            echo "window.location.href = '../view/PaginaLogin.php'?msg={$msg}';";
            echo "</script> ";
        }
        break;
    case "2":
        $loginDAOCliente = new LoginDAO();
        $usuario = $loginDAOCliente->loginCliente($usuario, $senha);
        if (!empty($usuario)) {
             $_SESSION["idCliente"] = $usuario["idCliente"];
            $_SESSION["usuario"] = $usuario["usuario"];
            $_SESSION["perfil"] = $usuario["perfil"];
            $_SESSION["nomeCliente"] = $usuario["nomeCliente"];
            $_SESSION["emailCliente"] = $usuario["emailCliente"];
            $_SESSION["celularCliente"] = $usuario["celularCliente"];
            $_SESSION["cpfCliente"] = $usuario["cpfCliente"];
            $_SESSION["cepCliente"] = $usuario["cepCliente"];
            $_SESSION["enderecoCliente"] = $usuario["enderecoCliente"];
            $_SESSION["complementCliente"] = $usuario["complementCliente"];
            $_SESSION["numeroCliente"] = $usuario["numeroCliente"];
            $_SESSION["bairroCliente"] = $usuario["bairroCliente"];
            $_SESSION["cidadeCliente"] = $usuario["cidadeCliente"];
            $_SESSION["estadoCliente"] = $usuario["estadoCliente"];
            echo "<script>";
            echo "window.location.href = '../view/principal.php';";
            echo "</script> ";
        } else {
            $msg = "Usuário e/ou senha invalido";
            echo "<script>";
            echo "window.location.href = '../view/PaginaLogin.php'?msg={$msg}';";
            echo "</script> ";
        }
        break;
    case "3":
        $loginDAOProfissional = new LoginDAO();
        $usuario = $loginDAOProfissional->loginProfissional($usuario, $senha);
        if (!empty($usuario)) {
            $_SESSION["idProfissional"] = $usuario["idProfissional"];
            $_SESSION["usuario"] = $usuario["usuario"];
            $_SESSION["perfil"] = $usuario["perfil"];
            $_SESSION["nomeProfissional"] = $usuario["nomeProfissional"];
            $_SESSION["emailProfissional"] = $usuario["emailProfissional"];
            $_SESSION["celularProfissional"] = $usuario["celularProfissional"];
            $_SESSION["cpfProfissional"] = $usuario["cpfProfissional"];
            $_SESSION["cepProfissional"] = $usuario["cepProfissional"];
            $_SESSION["enderecoProfissional"] = $usuario["enderecoProfissional"];
            $_SESSION["complementProfissional"] = $usuario["complementProfissional"];
            $_SESSION["numeroProfissional"] = $usuario["numeroProfissional"];
            $_SESSION["bairroProfissional"] = $usuario["bairroProfissional"];
            $_SESSION["cidadeProfissional"] = $usuario["cidadeProfissional"];
            $_SESSION["estadoProfissional"] = $usuario["estadoProfissional"];
            echo "<script>";
            echo "window.location.href = '../view/principal.php';";
            echo "</script> ";
        } else {
            $msg = "Usuário e/ou senha invalido";
            echo "<script>";
            echo "window.location.href = '../view/PaginaLogin.php'?msg={$msg}';";
            echo "</script> ";
        }
        break;
}
?>
