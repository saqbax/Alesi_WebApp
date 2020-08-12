<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>


    <!-- hojas de estilos -->
    <link href="css/neo-stiles.css" rel="stylesheet">

    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.com/libraries/Chart.js"></script>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <?php include('nav.php');?>
    </nav>
    <div class="container" style="margin-top: 90px;">
       <center>
      <h1 class="jumbotron-heading"> Dashboard</h1>
      </center>
    </div>
    <div class="container" style="margin-top: 80px;">
        <div class="content" center>
                <?php
                if ($login_emp == 'SURA' ){
                    echo '<div class="row">
                                    <section class="jumbotron text-center" style="width:100%;height:90%;">
                                    <div class="container">
                                        <h2 class="jumbotron-heading">CASOS de SURA</h2>

                                        <div class="row mt-6">
                                            <div class="col-md-12">

                                                <canvas id="dashSura"></canvas>

                                            </div>
                                        </div>

                                    </div>
                                </section>
                            </div>';
                }elseif ($login_emp == 'CARDIF' ) {
                    echo '<div class="row">
                                <section class="jumbotron text-center" style="width:100%;height:90%;">
                                    <div class="container">
                                        <h2 class="jumbotron-heading">CASOS de CARDIF</h2>

                                        <div class="row mt-6">
                                            <div class="col-md-12">

                                                <canvas id="dashCardif"></canvas>

                                            </div>
                                        </div>

                                    </div>
                                </section>
                          </div>';
                }elseif ($login_emp == 'ALESI' ) {
                    echo '<div class="row">
                                    <section class="jumbotron text-center" style="width:100%;height:90%;">
                                    <div class="container">
                                        <h2 class="jumbotron-heading">CASOS de SURA</h2>

                                        <div class="row mt-6">
                                            <div class="col-md-12">

                                                <canvas id="dashSura"></canvas>

                                            </div>
                                        </div>

                                    </div>
                                </section>
                            </div>';



                    echo '<div class="row">
                                <section class="jumbotron text-center" style="width:100%;height:90%;">
                                    <div class="container">
                                        <h2 class="jumbotron-heading">CASOS de CARDIF</h2>

                                        <div class="row mt-6">
                                            <div class="col-md-12">

                                                <canvas id="dashCardif"></canvas>

                                            </div>
                                        </div>

                                    </div>
                                </section>
                          </div>';
                }

                ?>            
        </div>
    </div>
                
<script crossorigin="anonymous"
    integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f"
    src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script crossorigin="anonymous"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script crossorigin="anonymous"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Chart JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"
    integrity="sha256-JG6hsuMjFnQ2spWq0UiaDRJBaarzhFbUxiUTxQDA9Lk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"
    integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"
    integrity="sha256-J2sc79NPV/osLcIpzL3K8uJyAD7T5gaEFKlLDM18oxY=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"
    integrity="sha256-CfcERD4Ov4+lKbWbYqXD6aFM9M51gN4GUEtDhkWABMo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/datos.js"></script>

</body>

</html>