<?php
session_start();

if (isset($_SESSION['steamid']))
{
    $steamid = $_SESSION['steamid'];
    // Continuar con el código para obtener información del jugador utilizando $steamid
}
else
{
    echo 'Error: Steam ID not found in session.';
    exit; // Salir del script si no se encuentra el Steam ID en la sesión
}

// Hacer una solicitud a la API de Steam para obtener información del usuario
$api_url = 'https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=279A6A5D7214EB1A17CD993428B1E01D&steamids=' . $steamid;
$response = file_get_contents($api_url);

if ($response !== false)
{
    $data = json_decode($response, true);
    if (isset($data['response']['players'][0]))
    {
        $player_info = $data['response']['players'][0];
        $steam_name = $player_info['personaname']; // Nombre de Steam del usuario
        ?>
        <h1>Bienvenido, <?php echo $steam_name; ?>!</h1>
        <!-- Botón de logout -->
        <form action="logout.php" method="post">
            <button type="submit">Cerrar sesión</button>
        </form>
        <?php
    }
    else
    {
        echo 'Error: No se puede recuperar la información del jugador.';
    }
}
else
{
    echo 'Error: No se puede conectar a la API de Steam.';
}
?>
