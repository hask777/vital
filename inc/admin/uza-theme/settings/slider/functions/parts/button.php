<?php 

function uza_slide_button_text_size_callback(){
	$slide_button_text_size = esc_attr(get_option('slide_button_text_size'));
	?>
		<label for="slide_button_text_size">Размер текста кнопки</label>
		<input type="text" name="slide_button_text_size" value="<?php echo $slide_button_text_size; ?>" placeholder="Размер текста описания">
	<?
}

function uza_slide_button_text_style_callback(){
	$slide_button_text_style = esc_attr(get_option('slide_button_text_style'));
    ?>
        <label for="slide_button_text_style">Стиль текста кнопки</label>
        <select class="" name="slide_button_text_style">
         <option
            value="normal"
            <?php if($slide_button_text_style == 'normal') echo 'selected'; ?>
            >normal
         </option>
         <option
            value="italic"
            <?php if($slide_button_text_style == 'italic') echo 'selected'; ?>
            >italic
         </option>
         <option
            value="oblique "
            <?php if($slide_button_text_style == 'oblique') echo 'selected'; ?>
            >oblique
         </option>
      </select>
    <?
}


function uza_slide_button_text_weight_callback(){
	$slide_button_text_weight = esc_attr(get_option('slide_button_text_weight'));
    ?>
        <label for="slide_button_text_weight">Вес текста кнопки</label>
        <select class="" name="slide_button_text_weight">
            <option
                 value="bold"
                 <?php if($slide_button_text_weight == 'bold') echo 'selected'; ?>
                 >bold
            </option>
            <option
                 value="bolder"
                 <?php if($slide_button_text_weight == 'bolder') echo 'selected'; ?>
                 >bolder
            </option>
            <option
                 value="lighter"
                 <?php if($slide_button_text_weight == 'lighter') echo 'selected'; ?>
                 >lighter
            </option>
            <option
                 value="100"
                 <?php if($slide_button_text_weight == '100') echo 'selected'; ?>
                 >100
            </option>
            <option
                 value="200"
                 <?php if($slide_button_text_weight == '200') echo 'selected'; ?>
                 >200
            </option>
            <option
                 value="300"
                 <?php if($slide_button_text_weight == '300') echo 'selected'; ?>
                 >300
            </option>
            <option
                 value="400"
                 <?php if($slide_button_text_weight == '400') echo 'selected'; ?>
                 >400
            </option>a
            <option
                 value="500"
                 <?php if($slide_button_text_weight == '500') echo 'selected'; ?>
                 >500
            </option>
            <option
                 value="600"
                 <?php if($slide_button_text_weight == '600') echo 'selected'; ?>
                 >600
            </option>
            <option
                 value="700"
                 <?php if($slide_button_text_weight == '700') echo 'selected'; ?>
                 >700
            </option>
            <option
                 value="800"
                 <?php if($slide_button_text_weight == '800') echo 'selected'; ?>
                 >800
            </option>
            <option
                 value="900"
                 <?php if($slide_button_text_weight == '900') echo 'selected'; ?>
                 >900
            </option>
        </select>
    <?
}


// Mobile
function uza_slide_button_text_size_mobile_callback(){
    $slide_button_text_size_mobile = esc_attr(get_option('slide_button_text_size_mobile'));
    ?>
        <label for="slide_button_text_size_mobile">Размер текста кнопки</label>
        <input type="text" name="slide_button_text_size_mobile" value="<?php echo $slide_button_text_size_mobile; ?>" placeholder="Размер текста описания">
    <?
}

function uza_slide_button_text_style_mobile_callback(){
    $slide_button_text_style_mobile = esc_attr(get_option('slide_button_text_style_mobile'));
    ?>
        <label for="slide_button_text_style_mobile">Стиль текста кнопки</label>
        <select class="" name="slide_button_text_style_mobile">
         <option
            value="normal"
            <?php if($slide_button_text_style_mobile == 'normal') echo 'selected'; ?>
            >normal
         </option>
         <option
            value="italic"
            <?php if($slide_button_text_style_mobile == 'italic') echo 'selected'; ?>
            >italic
         </option>
         <option
            value="oblique "
            <?php if($slide_button_text_style_mobile == 'oblique') echo 'selected'; ?>
            >oblique
         </option>
      </select>
    <?
}


function uza_slide_button_text_weight_mobile_callback(){
    $slide_button_text_mobile_weight = esc_attr(get_option('slide_button_text_mobile_weight'));
    ?>
        <label for="slide_button_text_mobile_weight">Вес текста кнопки</label>
        <select class="" name="slide_button_text_mobile_weight">
            <option
                 value="bold"
                 <?php if($slide_button_text_mobile_weight == 'bold') echo 'selected'; ?>
                 >bold
            </option>
            <option
                 value="bolder"
                 <?php if($slide_button_text_mobile_weight == 'bolder') echo 'selected'; ?>
                 >bolder
            </option>
            <option
                 value="lighter"
                 <?php if($slide_button_text_mobile_weight == 'lighter') echo 'selected'; ?>
                 >lighter
            </option>
            <option
                 value="100"
                 <?php if($slide_button_text_mobile_weight == '100') echo 'selected'; ?>
                 >100
            </option>
            <option
                 value="200"
                 <?php if($slide_button_text_mobile_weight == '200') echo 'selected'; ?>
                 >200
            </option>
            <option
                 value="300"
                 <?php if($slide_button_text_mobile_weight == '300') echo 'selected'; ?>
                 >300
            </option>
            <option
                 value="400"
                 <?php if($slide_button_text_mobile_weight == '400') echo 'selected'; ?>
                 >400
            </option>a
            <option
                 value="500"
                 <?php if($slide_button_text_mobile_weight == '500') echo 'selected'; ?>
                 >500
            </option>
            <option
                 value="600"
                 <?php if($slide_button_text_mobile_weight == '600') echo 'selected'; ?>
                 >600
            </option>
            <option
                 value="700"
                 <?php if($slide_button_text_mobile_weight == '700') echo 'selected'; ?>
                 >700
            </option>
            <option
                 value="800"
                 <?php if($slide_button_text_mobile_weight == '800') echo 'selected'; ?>
                 >800
            </option>
            <option
                 value="900"
                 <?php if($slide_button_text_mobile_weight == '900') echo 'selected'; ?>
                 >900
            </option>
        </select>
    <?
}

