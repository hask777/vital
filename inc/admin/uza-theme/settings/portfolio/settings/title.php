<?php

register_setting('uza-portfolio-settings-group', 'portfolio_title');
register_setting('uza-portfolio-settings-group', 'color_portfolio_title');
register_setting('uza-portfolio-settings-group', 'portfolio_title_size');
register_setting('uza-portfolio-settings-group', 'portfolio_title_style');
register_setting('uza-portfolio-settings-group', 'portfolio_title_weight');

    add_settings_field('portfolio-title-field', __('Настройка заголовка', 'uza'), 'uza_portfolio_title_callback', 'uza_portfolio_page', 'uza-portfolio-section');

    add_settings_field('portfolio-title-color-field', __('', 'uza'), 'uza_portfolio_color_title_callback', 'uza_portfolio_page', 'uza-portfolio-section');

    add_settings_field('portfolio-title-size-field', __('', 'uza'), 'uza_portfolio_size_title_callback', 'uza_portfolio_page', 'uza-portfolio-section');

    add_settings_field('portfolio-title-style-field', __('', 'uza'), 'uza_portfolio_style_title_callback', 'uza_portfolio_page', 'uza-portfolio-section');

    add_settings_field('portfolio-title-weight-field', __('', 'uza'), 'uza_portfolio_weight_title_callback', 'uza_portfolio_page', 'uza-portfolio-section');
