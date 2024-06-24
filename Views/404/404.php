<!-- error404.html -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url;?>Assets/css/erika.css" rel="stylesheet" />
    <title>Error 404 - Página no encontrada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
        }
        .error-container {
            margin-top: 100px;
        }
        .error-image {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>Error 404 - Página no encontrada</h1>
        <p>La página que estás buscando no pudo ser encontrada.</p>
        <img class="error-image" src="<?php echo base_url;?>Assets/images/404/404.png" alt="Error 404">
        <div style="display:grid;place-content:center">
        <a href="<?php echo base_url ?>Dashboard"">
            <button class="button">
            <svg class="svgIcon" viewBox="0 0 384 512">
            <path
                d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"
                ></path>
                </svg>
            </button>
        </a>
        </div>
    </div>
</body>
</html>
