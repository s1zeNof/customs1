<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header" id="header">
        <div class="header_content">
            <div class="logo">
                <?php the_custom_logo(); ?>
            </div>
            
            <?php 
                wp_nav_menu( array(
                    'theme_location' => 'head-menu',
                    'depth' => 1,
                    'container' => 'div',
                    'container_id' => 'menu',
                    'menu_class' => 'menu'
                ) );
            ?>

            <?php 
                wp_nav_menu( array(
                    'theme_location' => 'head-menu',
                    'depth' => 1,
                    'container' => 'div',
                    'container_id' => 'menu_mobile',
                    'menu_class' => 'menu_mobile'
                ) );
            ?>

            <div class="menu_left">
                <button class="btn">Jetzt einführen</button>
                <!-- <a href="#" class="burger dropdown-toggle"></a> -->
                <button class="burger" > <img src="<?php echo get_template_directory_uri() ?> ./src/img/burger.png"> </button>
            </div>
        </div>
    </header>