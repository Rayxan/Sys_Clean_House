<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="../js/ValidarCEPProf.js" ></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <title></title>
    </head>
    <body>
        <form action="../controller/cadPAdmController.php" method="POST">
            <input type="hidden" value="3" name="perfil">
            <div class="row"><br><br><br><br>
                <div role="main" class="col-md-6 col-md-push-3" style="text-align: center">
                    <table border="1" class="table table-striped" style="text-align: left">
                        <thead>
                            <tr>
                                <th colspan="2" style="text-align: center"><h3>FORMULÁRIO<br>CADASTRO DE PROFISSIONAL</h3></th>                   
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>NOME</td>
                                <td><input class="input_txt" type="text" name="nomeP" placeholder="    Seu Nome" value="" size="54"></td>
                            </tr>
                            <tr>
                                <td>E-MAIL</td>
                                <td><input class="input_txt" type="email" name="emailP" placeholder="    cleanhouse@exemplo.com" value="" size="54"></td>
                            </tr>
                            <tr>
                                <td>CELULAR</td>
                                <td><input class="input_txt" type="tel" name="celularP" placeholder="    (61) 900001111" value="" size="20"/></td>
                            </tr>
                            <tr>
                                <td>CPF</td>
                                <td><input class="input_txt" type="text" name="cpfP" placeholder="    000.000.000-00" value="" size="20" /></td>
                            </tr>
                            <tr>
                                <td>CEP</td>
                                <td><input class="input_txt" type="text" name="cepP" id="cepP" placeholder="    Seu CEP" value="" size="20" /></td>
                            </tr>
                            <tr>
                                <td>ENDEREÇO</td>
                                <td><input class="input_txt" type="text" name="enderecoP" id="ruaP" placeholder="    Quadra" value="" size="54" /></td>
                            </tr>
                            <tr>
                                <td>COMPLEMENTO</td>
                                <td><input class="input_txt" type="text" name="complementoP" placeholder="    Casa, Apartamento" value="" size="20" /></td>
                            </tr>
                            <tr>
                                <td>NÚMERO</td>
                                <td><input class="input_txt" type="text" name="numeroP" placeholder="    000" value="" size="20" /></td>
                            </tr>
                            <tr>
                                <td>BAIRRO</td>
                                <td><input class="input_txt" type="text" name="bairroP" id="bairroP" placeholder="    Seu bairro" value="" size="54" /></td>
                            </tr>
                            <tr>
                                <td>CIDADE</td>
                                <td><input class="input_txt" type="text" name="cidadeP" id="cidadeP" placeholder="    Sua cidade" value="" size="54" /></td>
                            </tr>
                            <tr>
                                <td>ESTADO</td>
                                <td><input class="input_txt" type="text" name="estadoP" id="ufP" placeholder="    Seu estado" value="" size="54" /></td>
                            </tr>
                            <tr>
                                <td>NOME DE USUÁRIO</td>
                                <td><input class="input_txt" type="text" name="usuarioP" placeholder="    Nome para login" value="" size="54" /></td>
                            </tr>
                            <tr>
                                <td>SENHA</td>
                                <td><input class="input_txt" type="password" name="senhaP" placeholder="    Senha para login" value="" size="20" /></td>
                            </tr>
                            <tr>
                                <th colspan="2" style="text-align: center">
                                    <input type="submit" value="Confirmar" class="btn btn-success"/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    <input type="reset" value="Cancelar" class="btn btn-danger"/>
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
