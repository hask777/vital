<?php
function uza_portfolio_tabs_color_callback(){
    $portfolio_tabs_color =  esc_attr(get_option('color_portfolio_tabs'));
    // pr($portfolio_title);
    ?>
    <input type="text" name="color_portfolio_tabs" value="<?php echo $portfolio_tabs_color; ?>" placeholder="<?php echo __('Текст заголовка', 'uza'); ?>">
    <?
}

function uza_portfolio_tabs_active_color_callback(){
    $color_portfolio_tabs_active =  esc_attr(get_option('color_portfolio_tabs_active'));
    // pr($portfolio_title);
    ?>
    <input type="text" name="color_portfolio_tabs_active" value="<?php echo $color_portfolio_tabs_active; ?>" placeholder="<?php echo __('Текст заголовка', 'uza'); ?>">
    <?
}

function uza_portfolio_tabs_size_callback(){
    $portfolio_tabs_size = esc_attr(get_option('portfolio_tabs_size'));
    ?>
        <input type="text" name="portfolio_tabs_size" value="<?php echo $portfolio_tabs_size; ?>" placeholder="Размер текста">
    <?
}

function uza_portfolio_tabs_style_callback(){
    $portfolio_tabs_style = esc_attr(get_option('portfolio_tabs_style'));
    ?>
         <label for="portfolio_tabs_style">Стиль текста заголовка</label>
         <select class="" name="portfolio_tabs_style">
          <option
             value="normal"
             <?php if($portfolio_tabs_style == 'normal') echo 'selected'; ?>
             >normal
          </option>
          <option
             value="italic"
             <?php if($portfolio_tabs_style == 'italic') echo 'selected'; ?>
             >italic
          </option>
          <option
             value="oblique "
             <?php if($portfolio_tabs_style == 'oblique') echo 'selected'; ?>
             >oblique
          </option>
       </select>
    <?
}

function uza_portfolio_tabs_weight_callback(){
    $portfolio_tabs_weight = esc_attr(get_option('portfolio_tabs_weight'));
    ?>
         <label for="portfolio_tabs_weight">Вес текста заголовка</label>
         <select class="" name="portfolio_tabs_weight">
             <option
                  value="bold"
                  <?php if($portfolio_tabs_weight == 'bold') echo 'selected'; ?>
                  >bold
             </option>
             <option
                  value="bolder"
                  <?php if($portfolio_tabs_weight == 'bolder') echo 'selected'; ?>
                  >bolder
             </option>
             <option
                  value="lighter"
                  <?php if($portfolio_tabs_weight == 'lighter') echo 'selected'; ?>
                  >lighter
             </option>
             <option
                  value="100"
                  <?php if($portfolio_tabs_weight == '100') echo 'selected'; ?>
                  >100
             </option>
             <option
                  value="200"
                  <?php if($portfolio_tabs_weight == '200') echo 'selected'; ?>
                  >200
             </option>
             <option
                  value="300"
                  <?php if($portfolio_tabs_weight == '300') echo 'selected'; ?>
                  >300
             </option>
             <option
                  value="400"
                  <?php if($portfolio_tabs_weight == '400') echo 'selected'; ?>
                  >400
             </option>a
             <option
                  value="500"
                  <?php if($portfolio_tabs_weight == '500') echo 'selected'; ?>
                  >500
             </option>
             <option
                  value="600"
                  <?php if($portfolio_tabs_weight == '600') echo 'selected'; ?>
                  >600
             </option>
             <option
                  value="700"
                  <?php if($portfolio_tabs_weight == '700') echo 'selected'; ?>
                  >700
             </option>
             <option
                  value="800"
                  <?php if($portfolio_tabs_weight == '800') echo 'selected'; ?>
                  >800
             </option>
             <option
                  value="900"
                  <?php if($portfolio_tabs_weight == '900') echo 'selected'; ?>
                  >900
             </option>
         </select>
    <?
}
