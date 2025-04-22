<?php
if (!isset($_POST['m']) || !isset($_POST['n'])) {
    die("Error: No se recibieron las matrices correctamente.");
}

$result = [];

for ($i = 0; $i < 3; $i++) {
    $result[$i] = [];
    for ($j = 0; $j < 3; $j++) {
        $result[$i][$j] = 0;
        for ($k = 0; $k < 3; $k++) {
            $result[$i][$j] += $_POST['m'][$i][$k] * $_POST['n'][$k][$j];
        }
    }
}

echo '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Multiplicación</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Matriz resultado</h1>
        <table>';

for ($i = 0; $i < count($result); $i++) {
    echo '<tr>';
    for ($j = 0; $j < count($result[$i]); $j++) {
        echo '<td>', $result[$i][$j], '</td>';
    }
    echo '</tr>';
}

echo '
        </table>
    </div>
</body>
</html>';
?>