<?php

/**
 * This template for displaying the header
 */

?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();  ?>
</head>

<body <?php body_class(); ?>>
    <div id="header_area">
        <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href=""><img src="<?php echo get_theme_mod('codesolution_logo'); ?>" alt=""></a>
            </div>
            <div class="col-md-9">
                <!-- nev bar menu -->
                <ul id="nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Media</a></li>
                    <li><a href="#">Download</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Services</a>
                        <ul>
                            <li><a href=""> Dropdown menu </a></li>
                            <li><a href=""> Dropdown menu </a></li>
                            <li><a href=""> Dropdown menu </a></li>
                            <li><a href=""> Dropdown menu </a></li>
                            <li><a href=""> Dropdown menu </a>
                                <ul>
                                    <li><a href=""> Dropdown menu </a></li>
                                    <li><a href=""> Dropdown menu </a></li>
                                    <li><a href=""> Dropdown menu </a></li>
                                    <li><a href=""> Dropdown menu </a></li>
                                    <li><a href=""> Dropdown menu </a></li>
                                    <li><a href=""> Dropdown menu </a></li>
                                    <li><a href=""> Dropdown menu </a></li>
                                    <li><a href=""> Dropdown menu </a></li>
                                    <li><a href=""> Dropdown menu </a></li>
                                </ul>
                            </li>
                            <li><a href=""> Dropdown menu </a></li>
                            <li><a href=""> Dropdown menu </a></li>
                            <li><a href=""> Dropdown menu </a></li>
                            <li><a href=""> Dropdown menu </a></li>
                        </ul>
                    </li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
        </div>
    </div>


    <?php wp_footer(); ?>
</body>

</html>