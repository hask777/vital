<?php

register_setting('uza-portfolio-settings-group', 'portfolio_description');

register_setting('uza-portfolio-settings-group', 'color_portfolio_description');

register_setting('uza-portfolio-settings-group', 'portfolio_description_size');

register_setting('uza-portfolio-settings-group', 'portfolio_description_style');

register_setting('uza-portfolio-settings-group', 'portfolio_description_weight');


    add_settings_field('portfolio-description-field', __('Настройка описания', 'uza'), 'uza_portfolio_description_callback', 'uza_portfolio_page', 'uza-portfolio-section');

    add_settings_field('portfolio-description-color-field', __('', 'uza'), 'uza_portfolio_color_description_callback', 'uza_portfolio_page', 'uza-portfolio-section');

    add_settings_field('portfolio-description-size-field', __('', 'uza'), 'uza_portfolio_size_description_callback', 'uza_portfolio_page', 'uza-portfolio-section');

    add_settings_field('portfolio-description-style-field', __('', 'uza'), 'uza_portfolio_style_description_callback', 'uza_portfolio_page', 'uza-portfolio-section');

    add_settings_field('portfolio-description-weight-field', __('', 'uza'), 'uza_portfolio_weight_description_callback', 'uza_portfolio_page', 'uza-portfolio-section');
