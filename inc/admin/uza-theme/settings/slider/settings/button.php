<?php 

register_setting( 'uza-sluder-group', 'slide_button_text_size' );
register_setting( 'uza-sluder-group', 'slide_button_text_style' );
register_setting( 'uza-sluder-group', 'slide_button_text_weight' );
// Mobile
register_setting( 'uza-sluder-group', 'slide_button_text_size_mobile' );
register_setting( 'uza-sluder-group', 'slide_button_text_style_mobile' );
register_setting( 'uza-sluder-group', 'slide_button_text_mobile_weight' );


	add_settings_field( 'slide-button-text-size-field', 'Кнопка','uza_slide_button_text_size_callback', 'uza_slider_page','uza-slider-section' );

	add_settings_field( 'slide-button-text-style-field', '','uza_slide_button_text_style_callback', 'uza_slider_page','uza-slider-section' );

	add_settings_field( 'slide-button-text-weight-field', '','uza_slide_button_text_weight_callback', 'uza_slider_page','uza-slider-section' );


	add_settings_field( 'slide-button-text-size-mobile-field', 'Мобильная кнопка','uza_slide_button_text_size_mobile_callback', 'uza_slider_page','uza-slider-section' );

	add_settings_field( 'slide-button_text-style-mobile-field', '','uza_slide_button_text_style_mobile_callback', 'uza_slider_page','uza-slider-section' );

	add_settings_field( 'slide-button-text-weight-mobile-field', '','uza_slide_button_text_weight_mobile_callback', 'uza_slider_page','uza-slider-section' );