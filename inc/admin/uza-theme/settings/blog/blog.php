<?php
// Title
register_setting('uza-blog-settings-group', 'blog_title');
register_setting('uza-blog-settings-group', 'color_blog_title');
register_setting('uza-blog-settings-group', 'blog_title_size');
register_setting('uza-blog-settings-group', 'blog_title_style');
register_setting('uza-blog-settings-group', 'blog_title_weight');

//  Description
register_setting('uza-blog-settings-group', 'blog_description');
register_setting('uza-blog-settings-group', 'color_description_title');
register_setting('uza-blog-settings-group', 'blog_description_size');
register_setting('uza-blog-settings-group', 'blog_description_weight');
register_setting('uza-blog-settings-group', 'blog_description_weight');

// Bgc
register_setting('uza-blog-settings-group', 'color_blog_bgc');
register_setting('uza-blog-settings-group', 'blog_image');

add_settings_section('uza-blog-section', __('Секция Блога', 'uza'), 'uza_blog_section_callback',
'uza_blog_page');

   // Title
   add_settings_field('blog-title-field', __('Заголовок', 'uza'), 'uza_blog_title_callback', 'uza_blog_page', 'uza-blog-section');
   add_settings_field('blog-color-title-field', __('', 'uza'), 'uza_blog_title_color_callback', 'uza_blog_page', 'uza-blog-section');
   add_settings_field('blog-title-size-field', __('', 'uza'), 'uza_blog_title_size_callback', 'uza_blog_page', 'uza-blog-section');
   add_settings_field('blog-title-style-field', __('', 'uza'), 'uza_blog_title_style_callback', 'uza_blog_page', 'uza-blog-section');
   add_settings_field('blog-title-weight-field', __('', 'uza'), 'uza_blog_title_weight_callback', 'uza_blog_page', 'uza-blog-section');

   // Description
   add_settings_field('blog-description-field', __('Описание', 'uza'), 'uza_blog_description_callback', 'uza_blog_page', 'uza-blog-section');
   add_settings_field('blog-color-description-field', __('', 'uza'), 'uza_blog_description_color_callback', 'uza_blog_page', 'uza-blog-section');
   add_settings_field('blog-description-size-field', __('', 'uza'), 'uza_blog_description_size_callback', 'uza_blog_page', 'uza-blog-section');
   add_settings_field('blog-description-style-field', __('', 'uza'), 'uza_blog_description_style_callback', 'uza_blog_page', 'uza-blog-section');
   add_settings_field('blog-description-weight-field', __('', 'uza'), 'uza_blog_description_weight_callback', 'uza_blog_page', 'uza-blog-section');



   // Background color
   add_settings_field('blog-bgc-field', __('Цвет фона', 'uza'), 'uza_blog_bgc_callback', 'uza_blog_page', 'uza-blog-section');
   // Background image
   add_settings_field('blog-image-field', __('Изображение фона', 'uza'), 'uza_blog_image_callback', 'uza_blog_page', 'uza-blog-section');
