<?php
require '../php/conexion.php';
require('../session.php');

?>

<!DOCTYPE html>

<html lang="es-ES">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Fotografias por caso</title>
    <html lang="es-ES">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,500,600,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="../css/neo-stiles.css" rel="stylesheet">
    
    <style>

        #galeria {
            margin: 1rem auto;
            width:100%;
            max-width:960px;
            padding:0 20px 20px;
            box-sizing: border-box;
            column-count: 3;

            /* Espacio entre columnas */
            -moz-column-gap: 20px;
            -webkit-column-gap: 20px;
            column-gap: 20px;
            
            /* Filete entre columnas */
            /*-moz-column-rule: 1px solid #bbb;
            -webkit-column-rule: 1px solid #bbb;
            column-rule: 1px solid #bbb;*/


        }
        
        #galeria header {
            -webkit-column-span:all;
            column-span:all;
        }

        article {
            background:#fff;
            border-radius:5px;
            border:1px solid #ccc;
            margin:0 0 20px 0;
            text-align: center;
            max-width: 100%;
            filter: opacity(70%);

            /*Evitamos que se corte al cambiar de columna*/
            break-inside: avoid;
            page-break-inside: avoid;         
       
        }
        
        article img {
            width:100%;
        }

        article:hover {
            transition: .5s ease;
            filter: opacity(100%);
        }

        figure {
            padding:1rem;
            box-sizing: border-box;
        }

 
        /* Móviles en horizontal o tablets en vertical */
        @media (max-width: 767px) { 
            #galeria {
                columns:2;
            }

        }
        
        /* Móviles en vertical */

        @media (max-width: 480px) {
            #galeria {
                columns: 1;
            }
        }


        /*Estilos del modal*/

        .modal {
            display: none;
        }

        .modal:target {
            
            display: block;
            position: fixed;
            background: rgba(0,0,0,0.8);
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .modal h3 {
            color: #fff;
            font-size: 30px;
            text-align: center;
            margin: 15px 0;
        }

        .imagen {
            width: 100%;
            height: 50%;
            
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .imagen a {
            color: #fff;
            font-size: 40px;
            text-decoration: none;
            margin: 0 10px;
        }

        .imagen a:nth-child(2) {
            margin: 0;
            height: 100%;
            flex-shrink: 2;
        }

        .imagen img {
            width: 500px;
            height: 100%;
            max-width: 100%;
            border: 7px solid #fff;
            box-sizing: border-box;
        }

        .cerrar {
            display: block;
            background: #fff;
            width: 25px;
            height: 25px;
            margin: 15px auto;
            text-align: center;
            text-decoration: none;
            font-size: 25px;
            color: #000;
            padding: 5px;
            border-radius: 50%;
            line-height: 25px;
        }                

    </style>
</head>

<body>
    <input type="file"  id="fileToUpload" onchange="upload_image();" style="visibility: hidden;">
    <main>
        <header id="main-header">
            <a id="logo-header">
			<span class="site-img"><img src="../img/alesi_logo1.png" width="27.5%" alt="Alesi" /> </span>
            </a> <!-- / #logo-header -->
            
            

		<nav>
			<ul>
				<li><a href="#"  onclick="click_load()">Cargar Imagen </a> </li>
                <li><a href="#"  onclick="regreso()">Regresar</a></li>
                
			</ul>
        </nav><!-- / nav -->         

        <div class="upload-msg"></div>
           
        </header>
        <section id="galeria">
        <header>

            <?php
                $nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
                //consultamos los datos para el cabezero

                $resultado = mysqli_query($con, "SELECT f_num_siniestro(".$nik.") AS NUM_SINIESTRO");
                $row = mysqli_fetch_assoc($resultado);
                $content = $row['NUM_SINIESTRO'];

                echo ("<h1> Caso: ".$nik."<br> Siniestro: ".$content."</h1>");
            ?>
            
        </header>
        <?php
        //se inicia logica para mostrar las fotos asociadas al caso

        $resultado = mysqli_query($con, "SELECT * from ALESI_IMAGENES where ID_CASO  = ".$nik);        

        if(mysqli_num_rows($resultado) == 0){
            echo ("No se ha cargado ninguna imagen");
        }else{
            $n =0;
            while($row = mysqli_fetch_assoc($resultado)){
                $n++;
                echo ('<article>
                        <a href="#img'.$n.'">
                            <figure>
                                <img src="imagenes/'.$row['NOMBRE_IMAGEN'].'" />
                                <figcaption>'.$row['NOMBRE_IMAGEN'].'</figcaption>
                            </figure>
                        </a>
                    </article>
                    
                    <div class="modal" id="img'.$n.'">
                    <h3>'.$row['NOMBRE_IMAGEN'].'</h3>
                    <div class="imagen">
                        <a href="#img'.($n-1).'">&#60;</a>
                        <a ><img src="imagenes/'.$row['NOMBRE_IMAGEN'].'"></a>
                        <a href="#img'.($n+1).'">></a>
                    </div>
                    <a class="cerrar" href="">X</a>
                    </div>
                ');
            }
        }


        ?>



        </section>
    </main>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>    

<script>
    function regreso(){
        window.location.href = "/mc_list.php";

    };
    function click_load() {
        document.getElementById("fileToUpload").click(); //click al elemento no visible
        
    }

	function upload_image(){//Funcion encargada de enviar el archivo via AJAX
				
                document.getElementById("fileToUpload").click(); //click al elemento no visible

                $(".upload-msg").text('Cargando...');


				var inputFileImage = document.getElementById("fileToUpload");
				var file = inputFileImage.files[0];
				var data = new FormData();				
                data.append('id_caso',<?php echo ($nik); ?>);
                data.append('imagen',file);

                console.log( data);
				
				/*jQuery.each($('#fileToUpload')[0].files, function(i, file) {
					data.append('file'+i, file);
				});*/
							
				$.ajax({
					url: "../services/guarda_img.php",        // Url to which the request is send
					type: "POST",             // Type of request to be send, called as method
					data: data, 			  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
					contentType: false,       // The content type used when sending data to the server.
					cache: false,             // To unable request pages to be cached
					processData:false,        // To send DOMDocument or non processed data file it is set to false
					success: function(data)   // A function to be called if request succeeds
					{
						$(".upload-msg").html(data);
						window.setTimeout(function() {
						$(".alert-dismissible").fadeTo(500, 0).slideUp(500, function(){
						$(this).remove();
                        location.reload(true);
						});	}, 3000);
					}
				});


				
			}
</script>    
</body>

</html>