<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="../controller/cadastrarUsuarioController.php" method="post">
            <table>
                <tr>
                    <td>
                        Nome do Usuário:
                    </td>
                    <td>
                        <input type="text" maxlength="60" name="usuario" required="true">
                    </td>
                </tr>                                                            
                <tr>
                    <td>
                        Usuário:
                    </td>
                    <td>
                        <input type="text" maxlength="60" name="usuario" required="true">
                    </td>
                </tr>                                                            
                <tr>
                    <td>
                        Senha
                    </td>
                    <td>
                        <input type="password" name="senha" maxlength="6" required="true">
                    </td>
                </tr>                                                            
                <tr>
                    <td>
                        Perfil
                    </td>
                    <td>
                        Administrador<input type="radio" name="perfil" value="1">
                        Usuário<input type="radio" name="perfil" value="2">
                        Cliente<input type="radio" name="perfil" value="3">
                    </td>
                </tr>                                                            
                <tr>
                    <td>
                        <input type="reset" value="Limpar">
                    </td>
                    <td>
                        <input type="submit" value="Cadastrar">
                    </td>
                </tr>                                                            
            </table>
        </form>
    <center>
        <?php
        if (!empty($_GET["msg"])) {
            echo $_GET["msg"];
        }
        ?>
    </center>
</body>
</html>
