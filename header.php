<?php

/*
    * This template for displaying the header
    */

?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head();  ?>
</head>

<body <?php body_class(); ?>>
    <header id="header_area" class="<?php echo get_theme_mod('codesolution_menu_position'); ?>">
        <!-- <div id="notice">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Some Notifications</h2>
                    </div>
                </div>
            </div>
           </div> -->
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_mod('codesolution_logo'); ?>" alt=""></a>
                </div>
                <div class="col-md-9">
                    <!-- nev bar menu -->
                    <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'nav')); ?>
                </div>
            </div>
        </div>
    </header>
</body>

</html>