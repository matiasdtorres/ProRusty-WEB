<?php
require_once 'vendor/autoload.php'; // Asegúrate de que la ruta al autoload de Composer es correcta.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario
    $steamId = $_POST['steamid'] ?? '';
    $email = $_POST['email'] ?? '';
    $asunto = $_POST['asunto'] ?? ''; // Captura el asunto enviado desde el formulario
    $message = $_POST['message'] ?? '';

    // Configura y envía el email
    $resend = Resend::client('re_5F3k6Yd7_KBe3zCnkMeZ64s4y85eMF3dv');

    $resend->emails->send([
      'from' => 'onboarding@resend.dev',
      'to' => 'prorustyservers@gmail.com',
      'subject' => $asunto, // Utiliza el asunto del formulario
      'html' => "<p>SteamID64: {$steamId}</p><p>Email: {$email}</p><p>Mensaje: {$message}</p>"
    ]);

    // Alerta y redirección con JavaScript
    echo "<script>alert('Mensaje enviado correctamente'); window.location.href='contacto.php';</script>";
    exit; // Asegúrate de no procesar nada más después de esta línea
}

