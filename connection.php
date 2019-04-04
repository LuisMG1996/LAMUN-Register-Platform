<?php
function stablishConn(){
    $host = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "lamun";

        $conn = new mysqli ($host,$dbuser,$dbpass,$dbname);
        if(mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_errno() .')'.mysqli_connect_error());
        }else{
            return $conn;
        }
}

function existRegister($country,$dele, $connection){
    
    $sql = "SELECT * FROM participantes WHERE pais='$country' AND delegacion='$dele'";
    $result = $connection->query($sql);

    if($result->num_rows > 0){
        return true;
    }else return false;

}

function getIds($connection){
    $sql = "SELECT idUsuario FROM participantes";
    $result = $connection->query($sql);
    $maxId = 1;

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            $maxId = $maxId + 1;
        }
    }
    return $maxId;
}

   $nombre= filter_input(INPUT_POST, 'nombre'); 
   $apellido=filter_input(INPUT_POST, 'apellidos');
   $age = filter_input(INPUT_POST, 'Age');
   $sex = filter_input(INPUT_POST, 'Sex');
   $sangre = filter_input(INPUT_POST, 'sangre');
   $correo = filter_input(INPUT_POST, 'correo');
   $escuela = filter_input(INPUT_POST, 'escuela');
   $alergias = filter_input(INPUT_POST, 'delegacion');
   $pais = filter_input(INPUT_POST, 'pais');
   $delegacion = filter_input(INPUT_POST, 'delegacion');
   if($sex =="M"){
       $sex = 1;
   }else $sex = 2;

   if(!empty($nombre) and !empty($apellido) and!empty($age) and!empty($sex) and!empty($sangre) and!empty($correo)
   and!empty($escuela) and!empty($alergias) and!empty($pais) and!empty($delegacion)){
        
        $connec = stablishConn();
        $idUser = getIds($connec);

        if (!existRegister($pais,$delegacion,$connec)){
            $sql = "INSERT INTO participantes (idUsuario, nombre, apellidos, edad, sexo, tipoSangre, correo, escuela, alergias, pais, delegacion) 
            VALUES ('$idUser','$nombre','$apellido','$age','$sex','$sangre','$correo','$escuela','$alergias', '$pais','$delegacion')";
            if ($connec->query($sql)){
                echo "New record inserted succesfully";
            }
            else {
                echo "Error: ". $sql ."<br>". $conn->error;
            }
            $connec->close();
        }
        else{
            echo "Usuario ya existente";
        }
    }
   else{
    echo("Ningún valor debe estar vacio");
    die();
   }
?>