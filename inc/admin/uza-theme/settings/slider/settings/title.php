<?php

register_setting( 'uza-sluder-group', 'slide_title_size' );
register_setting( 'uza-sluder-group', 'slide_title_style' );
register_setting( 'uza-sluder-group', 'slide_title_weight' );

register_setting( 'uza-sluder-group', 'slide_title_size_mobile' );
register_setting( 'uza-sluder-group', 'slide_title_style_mobile' );
register_setting( 'uza-sluder-group', 'slide_title_mobile_weight' );

	add_settings_section( 'uza-slider-section', 'Slider Options', 'uza_slider_section_callback', 'uza_slider_page' );

	add_settings_field( 'slide-title-size-field', 'Заголовок','uza_slide_title_size_callback', 'uza_slider_page','uza-slider-section' );

	add_settings_field( 'slide-title-style-field', '','uza_slide_title_style_callback', 'uza_slider_page','uza-slider-section' );

	add_settings_field( 'slide-title-weight-field', '','uza_slide_title_weight_callback', 'uza_slider_page','uza-slider-section' );


	add_settings_field( 'slide-title-size-mobile-field', 'Мобильный заголовок','uza_slide_title_size_mobile_callback', 'uza_slider_page','uza-slider-section' );

	add_settings_field( 'slide-title-style-mobile-field', '','uza_slide_title_style_mobile_callback', 'uza_slider_page','uza-slider-section' );

	add_settings_field( 'slide-title-weight-mobile-field', '','uza_slide_title_weight_mobile_callback', 'uza_slider_page','uza-slider-section' );