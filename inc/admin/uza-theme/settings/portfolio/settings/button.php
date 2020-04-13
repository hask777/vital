<?php

register_setting('uza-portfolio-settings-group', 'portfolio_buton_title');

    add_settings_field('portfolio-button-text-field', __('Кнопка', 'uza'), 'uza_portfolio_button_text_callback', 'uza_portfolio_page', 'uza-portfolio-section');
