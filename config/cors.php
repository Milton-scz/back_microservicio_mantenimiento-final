<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Aquí puedes configurar tus ajustes para compartir recursos de origen cruzado
    | o "CORS". Esto determina qué operaciones de origen cruzado pueden ejecutarse
    | en navegadores web. Eres libre de ajustar estos parámetros según tus necesidades.
    |
    | Para aprender más: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    // Rutas que estarán sujetas a las políticas CORS.
    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    // Métodos HTTP permitidos (GET, POST, PUT, DELETE, etc.).
    'allowed_methods' => ['*'],

    // Orígenes permitidos para hacer solicitudes.
    'allowed_origins' => ['http://localhost:3000'],

    // Patrón de orígenes permitidos usando expresiones regulares.
    'allowed_origins_patterns' => [],

    // Encabezados permitidos en la solicitud.
    'allowed_headers' => ['*'],

    // Encabezados expuestos al navegador.
    'exposed_headers' => [],

    // Tiempo máximo en segundos que los resultados de una solicitud preflight pueden ser almacenados en caché.
    'max_age' => 0,

    // Indica si las solicitudes pueden incluir credenciales (como cookies).
    'supports_credentials' => false,

];
