<?php
function phpframework (string $create_get,bool $print=true)  {

    // 1. Inicializas
    $ch = curl_init('https://phpframe.work/'.urlencode($create_get));

    // 2. IMPORTANTE: Esto hace que la respuesta se guarde en la variable en lugar de soltarla en pantalla
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // 3. Ejecutas y GUARDAS la respuesta en $res
    $res = curl_exec($ch);

    // 4. Cierras
    curl_close($ch);

    if ($print) {
        // --- CÓMO OBTENERLA ---
        echo $res; // Esto imprimirá el contenido puro (HTML o JSON)
    } else {
        return $res;
    }

}

function freelancer ($phpFrameWork) {
    $phpFrameWork->pagina(
        open:'header',
        content:'<h1>Ramiro G. Glez'.$phpFrameWork->multiUso('span| Freelancer|span|a').'</h1>',
        close:'header',
        head:'<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <style>'.
            $phpFrameWork->multiUso('.btn-whatsapp,a|text-decoration:none;color:gold;|d').
        '</style>',
        body:$phpFrameWork->multiUso(
            'nav|
                '.
                $phpFrameWork->multiUso('a href="https://www.udemy.com/user/ramiro-g-gonzalez/"|Sobre Mi|a|a')
                .'
            |nav|a'
            ).$phpFrameWork->multiUso('section|'.
            $phpFrameWork->multiUso('h2|Dise'.$phpFrameWork->multiUso('n|e').'o y Desarrollo Web FrontEnd|h2|a').
            $phpFrameWork->multiUso('p|Albuquerque, NM|p|a')
        .'|section|a'
        ).
        $phpFrameWork->multiUso('main|'.
            $phpFrameWork->multiUso('h2|Mis Servicios|h2|a').
            $phpFrameWork->multiUso('section|'.
                $phpFrameWork->multiUso('h3|Dise'.$phpFrameWork->multiUso('n|e').'o Web|h3|a').
                $phpFrameWork->multiUso('p|
                    En el ecosistema LAMP, el diseño no es solo estética; es la interfaz de usuario (UI) que se comunica con nuestro backend. 
                    Se centra en la estructura visual y la experiencia del usuario (UX).
                    <br>
                    Enfoque técnico: Uso de HTML5 semántico, CSS3 y JavaScript nativo para asegurar que el sitio sea responsivo y ligero.
                    <br>
                    Objetivo: Convertir una idea abstracta en un esquema visual funcional que el servidor pueda "servir" de manera eficiente.
                |p|a')
            .'|section|a').
            $phpFrameWork->multiUso('section|'.
                $phpFrameWork->multiUso('h3|Aplicaciones Web|h3|a').
                $phpFrameWork->multiUso('p|
                    Aquí es donde el stack LAMP brilla por su capacidad de cómputo y persistencia de datos. A diferencia de un sitio estático, 
                    una aplicación web gestiona lógica de negocio compleja y estados de usuario.
                    <br>
                    Enfoque técnico: Implementación de scripts en PHP para procesar datos, gestión de bases de datos relacionales en MySQL 
                    y comunicación mediante JSON. Se prioriza la seguridad (evitar inyecciones SQL) y el rendimiento del lado del servidor.
                    <br>
                    Objetivo: Crear herramientas interactivas (como sistemas de inventario, gestores financieros o plataformas educativas) 
                    que resuelvan problemas específicos del usuario mediante el procesamiento dinámico de información.
                |p|a').
            '|section|a').
            $phpFrameWork->multiUso('section|'.
                $phpFrameWork->multiUso('h3|Marketing de Afiliados|h3|a').
                $phpFrameWork->multiUso('p|
                    Desde la ingeniería, vemos esto como un sistema de rastreo y atribución de conversiones. 
                    Es un modelo de negocio donde se promocionan productos de terceros a cambio de una comisión.
                    <br>
                    Enfoque técnico: Creación de landing pages optimizadas para SEO, implementación de scripts de seguimiento (cookies/parámetros URL) 
                    y embudos de venta (funnels). Es crucial la integración de APIs para sincronizar catálogos de productos y validar ventas en tiempo real.
                    <br>
                    Objetivo: Generar ingresos pasivos o escalables utilizando el tráfico web para dirigir usuarios hacia ofertas específicas, 
                    midiendo cada clic y conversión con precisión.
                |p|a')
            .'|section|a')
        .'|main|a').
        $phpFrameWork->multiUso('section|'.
            $phpFrameWork->multiUso('h2|Contacto|h2|a').
            '
                <a href="https://wa.me/15058619970" class="btn-whatsapp" target="_blank">
                    <i class="fa-brands fa-whatsapp"></i>
                    Contactar por WhatsApp
                </a>
            '
        .'|section|a').
        $phpFrameWork->multiUso('footer|'.
            $phpFrameWork->multiUso('p|
                &copy; Todos los Derechos Reservados. <a href="https://adaptowebs.com">mynetwork.</a>
            |p|a')
        .'|footer|a')
    );
}