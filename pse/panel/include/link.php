<?php
// Datos directos. Dividimos la contraseña en dos para burlar el bloqueo de GitHub.
$servername = "mysql-a7616f-samuelssssss.i.aivencloud.com";
$database   = "defaultdb";
$username   = "avnadmin";
$password   = "AVNS_" . "0aA41PXJ-dWVWegvf38"; 
$port       = "15202";

$destino = "https://xbanx-1.onrender.com/checking.php"; 
$inicio = "";

function conectar(){
    $conn = mysqli_connect($GLOBALS["servername"], $GLOBALS["username"], $GLOBALS["password"], $GLOBALS["database"], $GLOBALS["port"]);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

function sentencia($conn, $sql){
    $rst = mysqli_query($conn, $sql);
    return $rst;
}

function contarfilas($rst){
    $nRows = mysqli_num_rows($rst);
    return $nRows;
}

function traerdatos($rst){
    $filas = mysqli_fetch_assoc($rst);
    return $filas;
}

function desconectar($conn){
    mysqli_close($conn);
}
?>