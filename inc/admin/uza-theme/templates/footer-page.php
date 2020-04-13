<h1>Footer</h1>
<?php settings_errors(); ?>
<form class="" action="options.php" method="post">
    <?php settings_fields('uza-footer-settings-group'); ?>
    <?php do_settings_sections('uza_footer_page'); ?>
    <?php submit_button(); ?>
</form>
