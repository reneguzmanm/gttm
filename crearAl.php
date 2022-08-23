<?php
NuevoAlumno ($_POST['nombreAl'],$_POST['apellidoAlP'],$_POST['apellioAlM'],$_POST['curso'],$_POST['letra'],$_POST['observaciones']);
function NuevoAlumno($nombreAl,$apellidoAlP,$apellidoAlM,$curso,$letra,$observaciones)
{
   include 'conexion.php';       

    $sql10=$mysqli -> query("SELECT * FROM apoderado ");    
    while ($row10 = mysqli_fetch_array($sql10)){                      
                       $idP=$row10["ID_APODERADO"];
                     }

    $sql11=$mysqli -> query("SELECT * FROM colegio ");    
    while ($row11 = mysqli_fetch_array($sql11)){                      
                       $idC=$row11["ID_COLEGIO"];
                     }

    $sql12=$mysqli -> query("SELECT * FROM alumno ");    
    while ($row12 = mysqli_fetch_array($sql12)){                      
                       $idA=$row12["ID_ALUMNO"];
                     }


    /*$sql0 = $mysqli->query("SELECT * FROM apoderado,alumno WHERE apoderado.ID_APODERADO = alumno.ID_APODERADO"); 
    $row = $sql0->mysqli_fetch_array($sql10);
    echo $sql10;*/
    $sql1="INSERT INTO alumno (ID_ALUMNO, NOMBRE_ALUMNO, APELLIDOP_ALUMNO, APELLIDOM_ALUMNO, ID_APODERADO) VALUES (NULL, '".$nombreAl."','".$apellidoAlP."', '".$apellidoAlM."','".$idP."')";
    $sql2=$mysqli -> query("INSERT INTO curso (ID_CURSO,ID_COLEGIO,ID_ALUMNO,NIVEL_CURSO,LETRA_CURSO) VALUES(NULL,'".$idC."','".$idA."','".$curso."','".$letra."')");    

        $result=$mysqli->query($sql1);
        var_dump($result);
      if(!$row10){
        echo '<script>';
        echo 'alert("alumno creado")';
        header('Location: adminIndex.php');
        echo '</script>';

    }else{
        echo '<script>';
        echo 'alert("alumno no creado")';
        echo '</script>';
    }
};
?>