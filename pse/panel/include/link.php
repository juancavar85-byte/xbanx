<?php
// Usamos getenv() para que lea los datos desde Render de forma segura
$servername = getenv('DB_HOST');
$database   = getenv('DB_NAME');
$username   = getenv('DB_USER');
$password   = getenv('DB_PASS');
$port       = getenv('DB_PORT');

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