<?php 

register_setting( 'uza-sluder-group', 'slide_description_size' );
register_setting( 'uza-sluder-group', 'slide_description_style' );
register_setting( 'uza-sluder-group', 'slide_description_weight' );
// Mobile
register_setting( 'uza-sluder-group', 'slide_description_size_mobile' );
register_setting( 'uza-sluder-group', 'slide_description_style_mobile' );
register_setting( 'uza-sluder-group', 'slide_description_mobile_weight' );


	add_settings_field( 'slide-description-size-field', 'Описание','uza_slide_description_size_callback', 'uza_slider_page','uza-slider-section' );

	add_settings_field( 'slide-description-style-field', '','uza_slide_description_style_callback', 'uza_slider_page','uza-slider-section' );

	add_settings_field( 'slide-description-weight-field', '','uza_slide_description_weight_callback', 'uza_slider_page','uza-slider-section' );


	add_settings_field( 'slide-description-size-mobile-field', 'Мобильное описание','uza_slide_description_size_mobile_callback', 'uza_slider_page','uza-slider-section' );

	add_settings_field( 'slide-description-style-mobile-field', '','uza_slide_description_style_mobile_callback', 'uza_slider_page','uza-slider-section' );

	add_settings_field( 'slide-description-weight-mobile-field', '','uza_slide_description_weight_mobile_callback', 'uza_slider_page','uza-slider-section' );