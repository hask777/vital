<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uza
 */

 $footer_image = esc_attr(get_option('footer_image'));
?>

<!-- ***** Footer Area Start ***** -->
<footer class="footer-area">
	<div class="section_bgc_image">
       <img src="<?php echo $footer_image; ?>" alt="" >
    </div>
    <div class="section_bgc">

    </div>
	<div class="container newsletter_wrapper">
		<div class="row justify-content-between">

			<!-- Single Footer Widget -->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="single-footer-widget mb-80">
					<?php
						if( is_active_sidebar('footer-1') ){
							dynamic_sidebar('footer-1');
						}
					?>
				</div>
			</div>

			<!-- Single Footer Widget -->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="single-footer-widget">
					<?php
						if( is_active_sidebar('footer-2') ){
							dynamic_sidebar('footer-2');
						}
					?>
				</div>
			</div>

			<!-- Single Footer Widget -->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="single-footer-widget">
					<?php
						if( is_active_sidebar('footer-3') ){
							dynamic_sidebar('footer-3');
						}
					?>
				</div>
			</div>

			<!-- Single Footer Widget -->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="single-footer-widget">
					<!-- Widget Title -->
					<?php
						if( is_active_sidebar('footer-4') ){
							dynamic_sidebar('footer-4');
						}
					?>
				</div>
			</div>

		</div>

<div class="row" style="margin-bottom: 30px;">

		</div>

	</div>
</footer>
<!-- ***** Footer Area End ***** -->

</body>
<?php wp_footer(); ?>
</html>
