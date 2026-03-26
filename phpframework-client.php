<?php
function phpframework (string $create_get)  {

    // 1. Inicializas
    $ch = curl_init('https://phpframe.work/'.urlencode($create_get));

    // 2. IMPORTANTE: Esto hace que la respuesta se guarde en la variable en lugar de soltarla en pantalla
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // 3. Ejecutas y GUARDAS la respuesta en $res
    $res = curl_exec($ch);

    // 4. Cierras
    curl_close($ch);

    // --- CÓMO OBTENERLA ---
    echo $res; // Esto imprimirá el contenido puro (HTML o JSON)

}