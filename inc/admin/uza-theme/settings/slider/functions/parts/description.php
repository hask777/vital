<?php 

function uza_slide_description_size_callback(){
	$slide_description_size = esc_attr(get_option('slide_description_size'));
	?>
		<label for="slide_description_size">Размер текста описания</label>
		<input type="text" name="slide_description_size" value="<?php echo $slide_description_size; ?>" placeholder="Размер текста описания">
	<?
}

function uza_slide_description_style_callback(){
	$slide_description_style = esc_attr(get_option('slide_description_style'));
    ?>
        <label for="slide_description_style">Стиль текста описания</label>
        <select class="" name="slide_title_style">
         <option
            value="normal"
            <?php if($slide_description_style == 'normal') echo 'selected'; ?>
            >normal
         </option>
         <option
            value="italic"
            <?php if($slide_description_style == 'italic') echo 'selected'; ?>
            >italic
         </option>
         <option
            value="oblique "
            <?php if($slide_description_style == 'oblique') echo 'selected'; ?>
            >oblique
         </option>
      </select>
    <?
}


function uza_slide_description_weight_callback(){
	$slide_description_weight = esc_attr(get_option('slide_description_weight'));
    ?>
        <label for="slide_description_weight">Вес текста описания</label>
        <select class="" name="slide_description_weight">
            <option
                 value="bold"
                 <?php if($slide_description_weight == 'bold') echo 'selected'; ?>
                 >bold
            </option>
            <option
                 value="bolder"
                 <?php if($slide_description_weight == 'bolder') echo 'selected'; ?>
                 >bolder
            </option>
            <option
                 value="lighter"
                 <?php if($slide_description_weight == 'lighter') echo 'selected'; ?>
                 >lighter
            </option>
            <option
                 value="100"
                 <?php if($slide_description_weight == '100') echo 'selected'; ?>
                 >100
            </option>
            <option
                 value="200"
                 <?php if($slide_description_weight == '200') echo 'selected'; ?>
                 >200
            </option>
            <option
                 value="300"
                 <?php if($slide_description_weight == '300') echo 'selected'; ?>
                 >300
            </option>
            <option
                 value="400"
                 <?php if($slide_description_weight == '400') echo 'selected'; ?>
                 >400
            </option>a
            <option
                 value="500"
                 <?php if($slide_description_weight == '500') echo 'selected'; ?>
                 >500
            </option>
            <option
                 value="600"
                 <?php if($slide_description_weight == '600') echo 'selected'; ?>
                 >600
            </option>
            <option
                 value="700"
                 <?php if($slide_description_weight == '700') echo 'selected'; ?>
                 >700
            </option>
            <option
                 value="800"
                 <?php if($slide_description_weight == '800') echo 'selected'; ?>
                 >800
            </option>
            <option
                 value="900"
                 <?php if($slide_description_weight == '900') echo 'selected'; ?>
                 >900
            </option>
        </select>
    <?
}


// Mobile
function uza_slide_description_size_mobile_callback(){
    $slide_description_size_mobile = esc_attr(get_option('slide_description_size_mobile'));
    ?>
        <label for="slide_description_size_mobile">Размер текста описания</label>
        <input type="text" name="slide_description_size_mobile" value="<?php echo $slide_description_size_mobile; ?>" placeholder="Размер текста описания">
    <?
}

function uza_slide_description_style_mobile_callback(){
    $slide_description_style_mobile = esc_attr(get_option('slide_description_style_mobile'));
    ?>
        <label for="slide_description_style_mobile">Стиль текста описания</label>
        <select class="" name="slide_description_style_mobile">
         <option
            value="normal"
            <?php if($slide_description_style_mobile == 'normal') echo 'selected'; ?>
            >normal
         </option>
         <option
            value="italic"
            <?php if($slide_description_style_mobile == 'italic') echo 'selected'; ?>
            >italic
         </option>
         <option
            value="oblique "
            <?php if($slide_description_style_mobile == 'oblique') echo 'selected'; ?>
            >oblique
         </option>
      </select>
    <?
}


function uza_slide_description_weight_mobile_callback(){
    $slide_description_mobile_weight = esc_attr(get_option('slide_description_mobile_weight'));
    ?>
        <label for="slide_description_mobile_weight">Вес текста описания</label>
        <select class="" name="slide_description_mobile_weight">
            <option
                 value="bold"
                 <?php if($slide_description_mobile_weight == 'bold') echo 'selected'; ?>
                 >bold
            </option>
            <option
                 value="bolder"
                 <?php if($slide_description_mobile_weight == 'bolder') echo 'selected'; ?>
                 >bolder
            </option>
            <option
                 value="lighter"
                 <?php if($slide_description_mobile_weight == 'lighter') echo 'selected'; ?>
                 >lighter
            </option>
            <option
                 value="100"
                 <?php if($slide_description_mobile_weight == '100') echo 'selected'; ?>
                 >100
            </option>
            <option
                 value="200"
                 <?php if($slide_description_mobile_weight == '200') echo 'selected'; ?>
                 >200
            </option>
            <option
                 value="300"
                 <?php if($slide_description_mobile_weight == '300') echo 'selected'; ?>
                 >300
            </option>
            <option
                 value="400"
                 <?php if($slide_description_mobile_weight == '400') echo 'selected'; ?>
                 >400
            </option>a
            <option
                 value="500"
                 <?php if($slide_description_mobile_weight == '500') echo 'selected'; ?>
                 >500
            </option>
            <option
                 value="600"
                 <?php if($slide_description_mobile_weight == '600') echo 'selected'; ?>
                 >600
            </option>
            <option
                 value="700"
                 <?php if($slide_description_mobile_weight == '700') echo 'selected'; ?>
                 >700
            </option>
            <option
                 value="800"
                 <?php if($slide_description_mobile_weight == '800') echo 'selected'; ?>
                 >800
            </option>
            <option
                 value="900"
                 <?php if($slide_description_mobile_weight == '900') echo 'selected'; ?>
                 >900
            </option>
        </select>
    <?
}
