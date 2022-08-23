<?php
NuevoApoderado ($_POST['nombreAp'],$_POST['apellidoApP'],$_POST['apellioApM'],$_POST['comuna'],$_POST['direccionAp'],$_POST['numeroCalle'],$_POST['numeroDepto'],$_POST['telefonoAp'],$_POST['venciPago'],$_POST['coutaAp']);
function NuevoApoderado($nombreAp,$apellidoApP,$apellidoApM,$comuna,$direccionAp,$numeroCalle,$numeroDepto,$telefonoAp,$venciPago,$coutaAp)
{
    include 'conexion.php';
       
                  $sql = "SELECT ID_APODERADO FROM APODERADO WHERE NOMBRE_APODERADO = '".$nombreAp.'""'; 
                  $result = $mysqli->query($sql);
                  $id = (int)$result;
                  var_dump($id);
                  $id=mysqli_real_escape_string($mysqli,$_POST['id']);


            

    $sql0="INSERT INTO direccion (ID_DIRECCION, ID_COMUNA, CALLE_DIRECCION, NUMERO_DIRECCION, NUMERO_DEPTO) VALUES (NULL, '".$comuna."','".$direccionAp."', '".$numeroCalle."', '".$numeroDepto."')";
    $sql1="INSERT INTO apoderado (ID_APODERADO,ID_DIRECCION,NOMBRE_APODERADO, APELLIDOP_APODERADO, APELLIDOM_APODERADO) VALUES(NULL,'".$comuna."','".$nombreAp."','".$apellidoApP."','".$apellidoApM."')";
    $sql2="INSERT INTO telefono (ID_APODERADO,ID_TELEFONO) VALUES(NULL,'".$telefonoAp."')";

     $sql4=$mysqli -> query("SELECT * FROM apoderado ");    
    while ($row4 = mysqli_fetch_array($sql4)){                      
                       $id=$row4["ID_APODERADO"];
                     }

    $sql3="INSERT INTO comprobante (ID_COMPROBANTE,ID_APODERADO,VENCIMIENTO_PAGO, VALOR_PAGO) VALUES(NULL,'".$id."','".$venciPago."','".$coutaAp."')";

        $result0=$mysqli->query($sql0);
        $result1=$mysqli->query($sql1);
        $result2=$mysqli->query($sql2);
        $result3=$mysqli->query($sql3);
        $rows0 = (object)$result0;
        $rows1 = (object)$result1;
        $rows2 = (object)$result2;
        $rows3 = (object)$result3;
        
        if ($rows0 != false || $rows1 != false || $row2 != false || $row3 != false) {
        echo '<script>';
        echo 'alert("apoderado creado")';
        header('Location: agregarAl.php');
        echo '</script>';

    }else{
        echo '<script>';
        echo 'alert("apoderado no creado")';
        echo '</script>';
    }
    
};


?>