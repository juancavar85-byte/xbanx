<?php
// Estas funciones leen las variables que configuraste en el panel de Render
$servername = getenv('DB_HOST');
$database   = getenv('DB_NAME');
$username   = getenv('DB_USER');
$password   = getenv('DB_PASS');
$port       = getenv('DB_PORT');

// Esta URL también deberías cambiarla por la de Render si la usas para redirecciones
$destino = "https://xbanx-1.onrender.com/checking.php"; 
$inicio = "";

function conectar(){
    // Añadimos el puerto ($GLOBALS["port"]) para que conecte a Aiven correctamente
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