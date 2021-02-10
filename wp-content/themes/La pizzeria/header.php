<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
</head>
<body>
<header class="site-header contenedor">
    <div class="logo">
    <a href="<?php echo esc_url( home_url('/') ); ?>">
        <img src="<?php echo get_template_directory_uri()?>/img/logo.svg">
    </a>
    </div>

    <div class="informacion-header">
        <div class="redes-sociales">
            <!-- Todo: Agregar menu-->
        </div> <!-- redes-sociales-->

        <div class="direccion">
            <p> 8179 Bay Avenue Mountain View, CA 94043</P>
            <P>Teléfono: 995888491</P>
        </div>
    </div> <!-- informacion-header-->
</header>
    
