<html lang="en">
    <head>
        <title>Clean House | Limpeza Residencial</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="../js/Somatorio.js" ></script>
        <script language="JavaScript" type="text/javascript" src="../js/funcaoempresa.js" ></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <?php
        require_once '../dao/solicEmpresaDAO.php';

        $codSolicitacaoEmp = $_GET["codSolicitacaoEmp"];
        $solicEmpresaDAO = new SolicEmpresaDAO();
        $solicEmpresa = $solicEmpresaDAO->getSolicEmpresaById($codSolicitacaoEmp);
        ?>
        <div class="container">
            <form method="POST" action="../controller/alterarSolicEmpresaClienteController.php">
                <div class="row">
                    <br>
                    <h3 align="center">SOLICITAÇÃO DE SERVIÇO EMPRESARIAL<br>FORMULÁRIO DE ATUALIZAÇÃO</h3>
                    
                    <input type="hidden" name="codSolicitacaoEmp" value="<?php echo $solicEmpresa["codSolicitacaoEmp"] ?>"/>
                    <h3 align="center">Agendamento:</h3>
                    <div class="btn-block" data-toggle="buttons">
                        <input type="button" name="periodoServ" class="btn btn-primary btn-lg btn-block" onclick="funcao4('Quinzenal');" value="Quinzenal">
                        <input type="button" name="periodoServ" class="btn btn-primary btn-lg btn-block" onclick="funcao4('Semanal');"value="Semanal">
                        <input type="button" name="periodoServ" class="btn btn-primary btn-lg btn-block" onclick="funcao4('Diária');"value="Diária">
                        <input type="hidden" name="agendamento" value="" >
                    </div>
                </div>
                <div class="row">
                    <fieldset class="form-group col-md-3">
                        <h3 align="center">Dia:</h3>
                        <select name="diaEmp" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                    </fieldset>
                    <fieldset class="form-group col-md-3">
                        <h3 align="center">Mês:</h3>
                        <select name="mesEmp" class="form-control">
                            <option value="Janeiro">Janeiro</option>
                            <option value="Fevereiro">Fevereiro</option>
                            <option value="Março">Março</option>
                            <option value="Abril">Abril</option>
                            <option value="Maio">Maio</option>
                            <option value="Junho">Junho</option>
                            <option value="Julho">Julho</option>
                            <option value="Agosto">Agosto</option>
                            <option value="Setembro">Setembro</option>
                            <option value="Outubro">Outubro</option>
                            <option value="Novembro">Novembro</option>
                            <option value="Dezembro">Dezembro</option>
                        </select>
                    </fieldset>
                    <fieldset class="form-group col-md-3">
                        <h3 align="center">Ano:</h3>
                        <select name="anoEmp" class="form-control">
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                    </fieldset>    
                    <fieldset class="form-group col-md-3">
                        <h3>Hora:</h3>
                        <select name="horaEmp" class="form-control">
                            <option value="8:00 12:00">8:00 12:00</option>
                            <option value="13:00 17:00">13:00 17:00</option>
                        </select>
                    </fieldset>
                    <br>
                    <center>
                    <input type="submit" value="Atualizar" class="btn btn-success"/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="submit" value="Cancelar" class="btn btn-danger"/>
                    </center>
                </div>
            </form> 
        </div>