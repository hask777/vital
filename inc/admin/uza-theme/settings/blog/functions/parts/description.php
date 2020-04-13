<?php

function uza_blog_description_callback(){
    $blog_description = esc_attr(get_option('blog_description'));
    ?>
        <label for="blog_description"><?php echo __('Описание секции','uza'); ?></label>
        <textarea name="blog_description" rows="8" cols="80">
            <?php echo $blog_description; ?>
        </textarea>
    <?
}

function uza_blog_description_color_callback(){
   $blog_description_color = esc_attr(get_option('color_blog_description'));
   ?>
        <label for="color_blog_description">Цвет текста описания </label>
        <input type="text" name="color_blog_description" value="<?php echo $blog_description_color; ?>">
   <?
}

function uza_blog_description_size_callback(){
    $blog_description_size = esc_attr(get_option('blog_description_size'));
    ?>
       <label for="blog_title_size">Размер описание заголовка</label>
       <input type="text" name="blog_description_size" value="<?php echo $blog_description_size; ?>" placeholder="<?php echo __('Размер текста в PX', 'uza'); ?>">
    <?
}

function uza_blog_description_style_callback(){
   $blog_description_style = esc_attr(get_option('blog_description_style'));
   ?>
        <label for="blog_description_style">Стиль текста описания</label>
        <select class="" name="blog_text_style">
         <option
            value="normal"
            <?php if($blog_description_style == 'normal') echo 'selected'; ?>
            >normal
         </option>
         <option
            value="italic"
            <?php if($blog_description_style == 'italic') echo 'selected'; ?>
            >italic
         </option>
         <option
            value="oblique "
            <?php if($blog_description_style == 'oblique') echo 'selected'; ?>
            >oblique
         </option>
      </select>
   <?
}

function uza_blog_description_weight_callback(){
   $blog_description_weight = esc_attr(get_option('blog_description_weight'));
   ?>
        <label for="blog_description_weight">Вес текста описания</label>
        <select class="" name="blog_description_weight">
            <option
                 value="bold"
                 <?php if($blog_description_weight == 'bold') echo 'selected'; ?>
                 >bold
            </option>
            <option
                 value="bolder"
                 <?php if($blog_description_weight == 'bolder') echo 'selected'; ?>
                 >bolder
            </option>
            <option
                 value="lighter"
                 <?php if($blog_description_weight == 'lighter') echo 'selected'; ?>
                 >lighter
            </option>
            <option
                 value="100"
                 <?php if($blog_description_weight == '100') echo 'selected'; ?>
                 >100
            </option>
            <option
                 value="200"
                 <?php if($blog_description_weight == '200') echo 'selected'; ?>
                 >200
            </option>
            <option
                 value="300"
                 <?php if($blog_description_weight == '300') echo 'selected'; ?>
                 >300
            </option>
            <option
                 value="400"
                 <?php if($blog_description_weight == '400') echo 'selected'; ?>
                 >400
            </option>a
            <option
                 value="500"
                 <?php if($blog_description_weight == '500') echo 'selected'; ?>
                 >500
            </option>
            <option
                 value="600"
                 <?php if($blog_description_weight == '600') echo 'selected'; ?>
                 >600
            </option>
            <option
                 value="700"
                 <?php if($blog_description_weight == '700') echo 'selected'; ?>
                 >700
            </option>
            <option
                 value="800"
                 <?php if($blog_description_weight == '800') echo 'selected'; ?>
                 >800
            </option>
            <option
                 value="900"
                 <?php if($blog_description_weight == '900') echo 'selected'; ?>
                 >900
            </option>
        </select>
   <?
}
