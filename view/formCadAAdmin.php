<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="../js/ValidarCEP.js" ></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <title></title>
    </head>
    <body>
        <form action="../controller/cadAAdmController.php" method="POST">
            <input type="hidden" value="1" name="perfil">
            <div class="row"><br><br><br><br>
                <div role="main" class="col-md-6 col-md-push-3" style="text-align: center">
                    <table border="1" class="table table-striped" style="text-align: left">
                        <thead>
                            <tr>
                                <th colspan="2" style="text-align: center"><h3>CADASTRO DE ADMINISTRADOR<br>FORMULÁRIO</h3></th>                   
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>NOME</td>
                                <td><input class="input_txt" type="text" name="nomeAdmin" placeholder="    Seu Nome" value="" size="54"></td>
                            </tr>
                            <tr>
                                <td>CPF</td>
                                <td><input class="input_txt" type="text" name="cpfAdmin" placeholder="    Seu CPF" value="" size="54"></td>
                            </tr>
                            <tr>
                                <td>EMAIL</td>
                                <td><input class="input_txt" type="email" name="emailAdmin" placeholder="    cleanhouse@exemplo.com" value="" size="54"/></td>
                            </tr>
                            <tr>
                                <td>TELEFONE</td>
                                <td><input class="input_txt" type="tel" name="telefoneAdmin" placeholder="    (61) 90000-1111" value="" size="54" /></td>
                            </tr>
                            <tr>
                                <td>NOME DE USUÁRIO</td>
                                <td><input class="input_txt" type="text" name="usuarioA" placeholder="    Nome para login" value="" size="54" /></td>
                            </tr>
                            <tr>
                                <td>SENHA</td>
                                <td><input class="input_txt" type="password" name="senhaA" placeholder="    Senha para login" value="" size="54" /></td>
                            </tr>
                            <tr>
                                <th colspan="2" style="text-align: center">
                                    <input type="submit" value="Confirmar" class="btn btn-success"/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    <input type="submit" value="Cancelar" class="btn btn-danger"/>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <aside role="complementary" class="col-md-3 col-md-push-3"></aside>
                <nav class="col-md-3 col-md-pull-9"></nav>
            </div>
        </form>
    </body>
</html>
