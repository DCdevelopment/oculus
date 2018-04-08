<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Oculus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleCustom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>


<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand" href="oculus/index.php">Oculus Beta</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                    <li><a href="single_base.php">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div id=redLine></div>

    <div id="main-div">
        <!-- ____________________________________________________SINISTRA___________________________________________________-->
        <!-- DIV SINISTRO -->
        <div id="div-sx">

            <!-- DIV TOP SINISTRO -->
            <div id="sx-top">
                <h2 class="sx-evidenzia">CERCA PAZIENTE / PERIZIA</h2>
                <div class="input-group">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-user"></span></button>
                        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span></button>
                    </div>
                    <input type="text" class="form-control" placeholder="...">
                </div>
            </div>
            <hr style="margin-bottom: 5px">

            <!-- DIV MEDIO SINISTRO -->
            <div id="sx-med">

                <h2 class="sx-evidenzia">AZIONI RAPIDE</h2>
                <button class="sx-btn" style="margin-left:20px" type="submit" onclick="window.location='addPaziente.php'"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span></button>
                <button class="sx-btn" type="submit" onclick="window.location='addPerizia.php'"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></button>
                <button class="sx-btn" type="submit" onclick="window.location='addAppuntamento.php'"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></button>
                <button class="sx-btn" type="submit" onclick="window.location='addRubrica.php'"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></button>
            </div>
            <hr>

            <h2 class="sx-evidenzia"> VAI A</h2>
            <div class="list-group2" style="text-align:center">
                <button type="button" class="list-group-item" onclick="window.location='index.php'">Home</button>
                <button type="button" class="list-group-item" onclick="window.location='listaPazienti.php'"></a>Lista pazienti</button>
                <button type="button" class="list-group-item" onclick="window.location='listaPerizie.php'">Lista perizie</button>
                <button type="button" class="list-group-item" onclick="window.location='listaAppuntamenti.php'">Calendario</button>
            </div>
            <hr>

            <!-- PROSSIMI APPUNTAMENTI -->
            <h2 class="sx-evidenzia"> PROSSIMI APPUNTAMENTI</h2>
            <div id="sx-bottom" style="overflow-y: scroll; height:210px;  width:275px">


                <table class="table table-striped" style="text-align:center">
                    <thead>
                        <tr>
                            <th style="text-align:center">ORA</th>
                            <th style="text-align:center">COGNOME</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10.00</td>
                            <td>Rossi</td>
                        </tr>
                        <tr>
                            <td>11.30</td>
                            <td>Bianchi</td>
                        </tr>
                        <tr>
                            <td>12.15</td>
                            <td>Neri</td>
                        </tr>
                        <tr>
                            <td>17.00</td>
                            <td>Remo</td>
                        </tr>
                        <tr>
                            <td>18.30</td>
                            <td>Tizio</td>
                        </tr>
                        <tr>
                            <td>19.15</td>
                            <td>Caio</td>
                        </tr>
                        <tr>
                            <td>19.30</td>
                            <td>Sempronio</td>
                        </tr>
                        <tr>
                            <td>20.30</td>
                            <td>Romolo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- ____________________________________________________DESTRA___________________________________________________-->
        <!-- DIV DESTRO -->
        <div id="div-dx">

            <!-- DIV dx banner -->
            <div class="dx-top-div-single"></div>

            <div style="margin-bottom: 5px;   height: 44px;">
                <div class="single-dx-title-div">
                    <h1 class="intestazione"><span class="glyphicon glyphicon-calendar"></span> RUBRICA</h1>
                </div>



                <div class="single_content_div" style="overflow-y: scroll; height:453px;">
                    <img src="res/wip.jpg">
                </div>
                <!-- ____________________________________________________FOOTER___________________________________________________-->
                <!-- DIV footer -->
                <div class="footer-single">
                    <br><br><br>
                    <h3 style="text-align:center; color:gray">Version: beta - apr 2018 - Developer: corrado de candia</h3>
                </div>

            </div>
        </div>





        <script>
            $(document).ready(function() {
                $("#inputPaz").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#paziente_table tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $("#inputPer").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#perizie_table tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>

</html>