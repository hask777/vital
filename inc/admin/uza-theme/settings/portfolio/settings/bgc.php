<?php

// Bgc
register_setting('uza-portfolio-settings-group', 'color_portfolio_bgc');
register_setting('uza-portfolio-settings-group', 'portdolio_bgc_opacity');
register_setting('uza-portfolio-settings-group', 'portfolio_image');

    // Background color
    add_settings_field('portfolio-bgc-field', __('Цвет фона', 'uza'), 'uza_portfolio_bgc_callback', 'uza_portfolio_page', 'uza-portfolio-section');
    // Background opacity
    add_settings_field('portfolio-opacity-bgc-field', __('Прозрачность фона', 'uza'), 'uza_portfolio_opacity_bgc_callback', 'uza_portfolio_page', 'uza-portfolio-section');
    // Background image
    add_settings_field('portfolio-image-field', __('Изображение фона', 'uza'), 'uza_portfolio_image_callback', 'uza_portfolio_page', 'uza-portfolio-section');
