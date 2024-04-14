<?php
// Desactivar la visualización de advertencias
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);

ob_start();

require 'steamlogin/vendor/autoload.php'; // Incluir el autoload de Composer

$openid = new LightOpenID($_SERVER['HTTP_HOST']);

if(!$openid->mode)
{
    if(isset($_GET['login']))
    {
        $openid->identity = 'https://steamcommunity.com/openid';
        header('Location: ' . $openid->authUrl());
        exit; // Importante: asegúrate de salir del script después de redirigir
    }
?>

<script>
    window.onload = function() {
        document.getElementById('steamLoginForm').submit();
    };
</script>

<form id="steamLoginForm" action="?login" method="post"></form>

<?php
}
elseif($openid->mode == 'cancel')
{
    echo '¡El usuario ha cancelado la autenticación!';
}
else
{
    if($openid->validate())
    {
        $id = $openid->identity;
        // Extraer el ID de usuario de la URL proporcionada por Steam
        $steamid = str_replace('https://steamcommunity.com/openid/id/', '', $id);
        
        // Aquí puedes hacer lo que quieras con el $steamid, como comprobar si el usuario está en tu base de datos o crear un nuevo registro, etc.
        
        // Después de validar el inicio de sesión con Steam y obtener el Steam ID
        session_start();
        $_SESSION['steamid'] = $steamid;
        header('Location: steamlogin/profile.php');
        exit;

    }
    else
    {
        echo 'Error al autenticar al usuario!';
    }
}
?>
