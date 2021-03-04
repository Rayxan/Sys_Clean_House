<!DOCTYPE html>
<html>
    <head>
        <title>Clean House | Limpeza Residencial</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="../js/Somatorio1.js" ></script>
        <script language="JavaScript" type="text/javascript" src="../js/funcaoempresa.js" ></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <?php
        session_start();
        ?>
        <div class="container">
            <form method="POST" action="../controller/cadSolicEmpController.php">
            <div class="row"><br><br>
                <div role="main" class="col-md-8" style="text-align: center">
                    <input type="hidden" name="idCliente" value="<?php echo $_SESSION["idCliente"]?>">
                    <h3>Escolha um serviço:</h3>
                    <div class="btn-block" data-toggle="buttons">
                        <input type="button" name="tipoServicoEmp" class="btn btn-primary btn-lg btn-block" onclick="onCkbtn1();funcao1('Escritório');" value="Escritório">
                        <input type="button" name="tipoServicoEmp" class="btn btn-primary btn-lg btn-block" onclick="onCkbtn2();funcao1('Loja');" value="Loja">
                        <input type="button" name="tipoServicoEmp" class="btn btn-primary btn-lg btn-block" onclick="onCkbtn3();funcao1('Restaurante');" value="Restaurante">
                        <input type="button" name="tipoServicoEmp" class="btn btn-primary btn-lg btn-block" onclick="onCkbtn4();funcao1('Clínica');" value="Clínica">
                        <input type="hidden" name="locserv" value="" >
                    </div>       
                    <div class="row">
                        <h3>Quantos banheiros:</h3>
                        <div class="btn-block" data-toggle="buttons">
                        <input type="button" name="quantBanheirosEmp" class="btn btn-primary btn-lg " onclick="onCkbtn5();funcao2('1');" value="1">
                        <input type="button" name="quantBanheirosEmp" class="btn btn-primary btn-lg " onclick="onCkbtn6();funcao2('2');" value="2">
                        <input type="button" name="quantBanheirosEmp" class="btn btn-primary btn-lg " onclick="onCkbtn7();funcao2('3');" value="3">
                        <input type="button" name="quantBanheirosEmp" class="btn btn-primary btn-lg " onclick="onCkbtn8();funcao2('4');" value="4">
                        <input type="button" name="quantBanheirosEmp" class="btn btn-primary btn-lg " onclick="onCkbtn9();funcao2('5');" value="5">
                        <input type="button" name="quantBanheirosEmp" class="btn btn-primary btn-lg " onclick="onCkbtn10();funcao2('6');"value="6">
                        <input type="button" name="quantBanheirosEmp" class="btn btn-primary btn-lg " onclick="onCkbtn11();funcao2('7');"value="7">
                        <input type="hidden" name="banheiros" value="" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="btn-block" data-toggle="buttons">
                        <h3>Área total:</h3>
                        <input type="button" name="area" class="btn btn-primary btn-lg " onclick="onCkbtn12();funcao3('Menos de 30m²');"value="Menos de 30m²">
                        <input type="button" name="area" class="btn btn-primary btn-lg " onclick="onCkbtn13();funcao3('30m² e 60m²');"value="30m² e 60m²">
                        <input type="button" name="area" class="btn btn-primary btn-lg " onclick="onCkbtn14();funcao3('60m² e 90m²');"value="60m² e 90m²">
                        <input type="button" name="area" class="btn btn-primary btn-lg " onclick="onCkbtn15();funcao3('90m² e 120m²');"value="90m² e 120m²">
                        <input type="button" name="area" class="btn btn-primary btn-lg " onclick="onCkbtn16();funcao3('120m² e 150m²');"value="120m² e 150m²">
                        <input type="button" name="area" class="btn btn-primary btn-lg " onclick="onCkbtn17();funcao3('150m² e 180m²');"value="150m² e 180m²">
                        <input type="button" name="area" class="btn btn-primary btn-lg " onclick="onCkbtn18();funcao3('180m² e 210m²');"value="180m² e 210m²">
                        <input type="hidden" name="areatotal" value="" >
                        </div>
                    </div>
                    <div class="row">
                    <h3>Agendamento:</h3>
                    <div class="btn-block" data-toggle="buttons">
                        <input type="button" name="periodoServ" class="btn btn-primary btn-lg btn-block" onclick="funcao4('Quinzenal');" value="Quinzenal">
                            <input type="button" name="periodoServ" class="btn btn-primary btn-lg btn-block" onclick="funcao4('Semanal');"value="Semanal">
                            <input type="button" name="periodoServ" class="btn btn-primary btn-lg btn-block" onclick="funcao4('Diária');"value="Diária">
                            <input type="hidden" name="agendamento" value="" >
                    </div>
                    </div>
                    <div class="row">
                    <fieldset class="form-group col-md-3">
                            <h3>Dia:</h3>
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
                            <h3>Mês:</h3>
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
                            <h3>Ano:</h3>
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
                    </div>
                </div>
                <center>
                <aside role="complementary" class="col-md-4" >
                    <h2 class="sidebar-title" style="text-align: center">Limpeza Empresarial</h2>
                    <hr>
                        <div id="box">
                        <ul class="square">
                            <li style="text-align: left"> Agende um profissional; </li>
                            <li style="text-align: left"> Escolha o horário;</li>
                            <li style="text-align: left"> Contratação rápida, prática e segura;</li>
                            <li style="text-align: left"> Solução de limpeza para residência e escritório;</li>
                            <li style="text-align: left"> Atendimento imediato;</li>
                            <li style="text-align: left"> Profissionais credenciados;</li>
                            <li style="text-align: left"> Satisfação garantida;</li>
                            <li style="text-align: left"> Parabéns! Agora você usa o melhor do mercado
                                em tecnologia em limpeza.</li>
                        </ul>
                    </div><br>
                    <div class="btn-block" data-toggle="buttons">
                        <input style="height:120px; width: 250px; font-size: 70px;" name="campo4" readonly="readonly" id="campo4"><br><br>
                        <input onclick="document.getElementById('pagamento').style.display='block';" type="button" 
                                  class="btn btn-primary btn-lg" value="Efetuar pagamento"/>
                        </div>
                        <div id="pagamento">
                            <a href="#" onclick="document.getElementById('pagamento').style.display='none';">[Fechar]</a><br><br>
                            <h3><p>Método de pagamento</p></h3><br>
                            <table>
                                <tr>
                                    <td>Número do cartão: </td>
                                    <td><input type="text" name="numerocartao" size="35"/></td>
                                </tr>
                                <tr>
                                    <td>Nome no cartão: </td>
                                    <td><input type="text" name="nomecartao" size="35"/></td>
                                </tr>                
                                <tr>
                                    <td>Pagamento:</td>
                                    <td>
                                        <img src="../imagens/cartao.png" alt="Logo"/><br>&nbsp; &nbsp;
                                        <input type="radio" name="cartao" value="master"/>&nbsp; &nbsp; &nbsp; &nbsp;
                                        <input type="radio" name="cartao" value="visa"/>&nbsp; &nbsp; &nbsp; &nbsp;
                                        <input type="radio" name="cartao" value="america"/>&nbsp; &nbsp; &nbsp;
                                        <input type="radio" name="cartao" value="elo"/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        <input type="radio" name="cartao" value="hiper"/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        <input type="radio" name="cartao" value="diners"/>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>Data de vencimento: </td>
                                    <td>mm &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        aa<br>
                                        <input type="text" name="mm" size="10"/>
                                        / <input type="text" name="aa" size="10"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Código de segurança: </td>
                                    <td><input type="text" name="codigo" size="10"/></td>
                                </tr>
                            </table>
                            <br>
                            <input type="submit" value="Confirmar" class="btn btn-success"/>
                            <input type="submit" value="Cancelar" class="btn btn-danger"/>
                        </div>
                </aside>
                </center>
            </div>
        </form>
        </div>
    </body>
</html>