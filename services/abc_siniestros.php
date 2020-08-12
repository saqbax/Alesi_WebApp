<?php

require '../php/conexion.php';
//require '../session.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $p_empresa = $_POST["p_empresa"];
    $p_num_siniestro = $_POST["p_num_siniestro"];
    $p_usuario = $_POST["p_usuario"];

    $sql = "INSERT INTO ALESI_TCASO (ID_EMPRESA,TIPO_CASO,NUM_SINIESTRO,F_ALTA,F_ESTATUS,F_CIERRE,STATUS,ID_USUARIO_ALTA,ID_USUARIO_ASIGNADO,ID_USUARIO_ULTIMA_ACT) 
        VALUES ('$p_empresa','SINIESTRO','$p_num_siniestro',SYSDATE(),SYSDATE(),DATE_ADD(date_format(SYSDATE(),'%Y-%m-%d'),INTERVAL 10 DAY),'EN_CURSO','$p_usuario','$p_usuario','$p_usuario')";
    
    $insert = mysqli_query($con, $sql) or die(mysqli_error());

    if($insert){
        $postId =mysqli_insert_id($con);            
        if($postId){
            $input['success'] = true;
            $input['id'] = $postId;
            $input['message'] = '';
            header("HTTP/1.1 200 OK");
            echo json_encode($input);
            exit();

        }else{
            header("HTTP/1.1 500  fallo");
            echo 'fallo insert ->'. mysqli_error($con) ;
            exit();
        }

    }
}                

header("HTTP/1.1 400 Bad Request");
exit;

?>