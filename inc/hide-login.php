<?php

// Add a custom menu in the WordPress dashboard
function add_hide_login_menu() {
    add_menu_page(
        'Hide Login Settings',         // Page title
        'Hide Login',                 // Menu title
        'manage_options',             // Capability
        'hide-login-settings',        // Menu slug
        'hide_login_settings_page',   // Callback function
        'dashicons-shield',           // Icon
        90                            // Position
    );
}
add_action('admin_menu', 'add_hide_login_menu');

// The settings page content
function hide_login_settings_page() {
    ?>
    <div class="wrap">
        <h1>Hide Login Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('hide_login_options');
            do_settings_sections('hide-login-settings');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}
