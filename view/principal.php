<!DOCTYPE html>
<html>
    <head>
        <title>Clean House | Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <?php
        session_start();
        include 'validaLogin.php';
        ?> 
        <table border='3' width="100%">
            <tr>
                <td width="100%">
                    <?php
                    switch ($_SESSION["perfil"]) {
                        case "Administrador":
                            include './menuAdministrador.php';
                            break;
                        case "Profissional":
                            include './menuProfissional.php';
                            break;
                        case "Cliente":
                            include './menuCliente.php';
                            break;
                    }
                    ?>
                    <br>
                </td>
            </tr>
             
        </table>
        <br><br><br><br>
        
    
        <table id="tablehome">
            <tr>         
                <td>
                    <iframe name="centro" src="" width="100%" height="100%" frameborder="0"></iframe>
                </td>
            </tr>                
        </table>
       
    </body>
</html>
