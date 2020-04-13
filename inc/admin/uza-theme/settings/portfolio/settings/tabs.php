<?php

register_setting('uza-portfolio-settings-group', 'color_portfolio_tabs');
register_setting('uza-portfolio-settings-group', 'portfolio_tabs_size');
register_setting('uza-portfolio-settings-group', 'portfolio_tabs_style');
register_setting('uza-portfolio-settings-group', 'portfolio_tabs_weight');
register_setting('uza-portfolio-settings-group', 'color_portfolio_tabs_active');

    add_settings_field('portfolio-tabs-color-field', __('Настройка табов', 'uza'), 'uza_portfolio_tabs_color_callback', 'uza_portfolio_page', 'uza-portfolio-section');

    add_settings_field('portfolio-tabs-color-active-field', __('', 'uza'), 'uza_portfolio_tabs_active_color_callback', 'uza_portfolio_page', 'uza-portfolio-section');

    add_settings_field('portfolio-tabs-size-field', __('', 'uza'), 'uza_portfolio_tabs_size_callback', 'uza_portfolio_page', 'uza-portfolio-section');

    add_settings_field('portfolio-tabs-style-field', __('', 'uza'), 'uza_portfolio_tabs_style_callback', 'uza_portfolio_page', 'uza-portfolio-section');

    add_settings_field('portfolio-tabs-weight-field', __('', 'uza'), 'uza_portfolio_tabs_weight_callback', 'uza_portfolio_page', 'uza-portfolio-section');
