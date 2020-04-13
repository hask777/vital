<?php
// Title
function uza_blog_title_callback(){
   $blog_title = esc_attr(get_option('blog_title'));
   ?>
        <label for="color_blog_title">Текст заголовка</label>
        <input type="text" name="blog_title" value="<?php echo $blog_title; ?>" placeholder="<?php echo __('Текст заголовка', 'uza'); ?>">
   <?
}

function uza_blog_title_color_callback(){
   $blog_title_color = esc_attr(get_option('color_blog_title'));
   ?>
        <label for="color_blog_title">Цвет текста заголовка</label>
        <input type="text" name="color_blog_title" value="<?php echo $blog_title_color; ?>">
   <?
}

function uza_blog_title_size_callback(){
    $blog_title_size = esc_attr(get_option('blog_title_size'));
    ?>
       <label for="blog_title_size">Размер текста заголовка</label>
       <input type="text" name="blog_title_size" value="<?php echo $blog_title_size; ?>" placeholder="<?php echo __('Размер текста в PX', 'uza'); ?>">
    <?
}

function uza_blog_title_style_callback(){
   $blog_title_style = esc_attr(get_option('blog_title_style'));
   ?>
        <label for="blog_title_style">Стиль текста заголовка</label>
        <select class="" name="blog_title_style">
         <option
            value="normal"
            <?php if($blog_title_style == 'normal') echo 'selected'; ?>
            >normal
         </option>
         <option
            value="italic"
            <?php if($blog_title_style == 'italic') echo 'selected'; ?>
            >italic
         </option>
         <option
            value="oblique "
            <?php if($blog_title_style == 'oblique') echo 'selected'; ?>
            >oblique
         </option>
      </select>
   <?
}

function uza_blog_title_weight_callback(){
   $blog_title_weight = esc_attr(get_option('blog_title_weight'));
   ?>
        <label for="blog_title_weight">Вес текста заголовка</label>
        <select class="" name="blog_title_weight">
            <option
                 value="bold"
                 <?php if($blog_title_weight == 'bold') echo 'selected'; ?>
                 >bold
            </option>
            <option
                 value="bolder"
                 <?php if($blog_title_weight == 'bolder') echo 'selected'; ?>
                 >bolder
            </option>
            <option
                 value="lighter"
                 <?php if($blog_title_weight == 'lighter') echo 'selected'; ?>
                 >lighter
            </option>
            <option
                 value="100"
                 <?php if($blog_title_weight == '100') echo 'selected'; ?>
                 >100
            </option>
            <option
                 value="200"
                 <?php if($blog_title_weight == '200') echo 'selected'; ?>
                 >200
            </option>
            <option
                 value="300"
                 <?php if($blog_title_weight == '300') echo 'selected'; ?>
                 >300
            </option>
            <option
                 value="400"
                 <?php if($blog_title_weight == '400') echo 'selected'; ?>
                 >400
            </option>a
            <option
                 value="500"
                 <?php if($blog_title_weight == '500') echo 'selected'; ?>
                 >500
            </option>
            <option
                 value="600"
                 <?php if($blog_title_weight == '600') echo 'selected'; ?>
                 >600
            </option>
            <option
                 value="700"
                 <?php if($blog_title_weight == '700') echo 'selected'; ?>
                 >700
            </option>
            <option
                 value="800"
                 <?php if($blog_title_weight == '800') echo 'selected'; ?>
                 >800
            </option>
            <option
                 value="900"
                 <?php if($blog_title_weight == '900') echo 'selected'; ?>
                 >900
            </option>
        </select>
   <?
}
