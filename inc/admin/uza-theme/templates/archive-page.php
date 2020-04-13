<h1>Archive</h1>
<?php settings_errors(); ?>
<form class="" action="options.php" method="post">
    <?php settings_fields('uza-archive-settings-group'); ?>
    <?php do_settings_sections('uza_archive_page'); ?>
    <?php submit_button(); ?>
</form>
