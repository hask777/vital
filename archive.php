<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package uza
 */

get_header('uza');

	$category = get_queried_object();
	$id = $category->term_id;

	$image_id = get_term_meta( $id, '_thumbnail_id', 1 );
	$image_url = wp_get_attachment_image_url( $image_id, 'full' );
	//pr($image_url);

?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">


		<?php if ( have_posts() ) :	?>


			<header class="page-header" style="background-image: url(<?php echo  $image_url ?>);">
				<div class="page_header_bgc"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-12 flex">
						<?php
							echo '<h1 class="page-title">' . single_cat_title( '', false ) . '</h1>';
							the_archive_description( '<div class="archive-description">', '</div>' );
						?>
							<ul class="breadcrumbs_list">
								<li class=""><a href="<?php echo esc_url( home_url( '/' ) );?>"><i class="fa fa-home"></i> <?php echo get_the_title( get_option('page_on_front') ); ?></a></li>
							   <li class="breadcrumb_list_item active" aria-current="page"><?php the_title(); ?></li>
							</ul>

						</div>
					</div>
				</div>

			</header><!-- .page-header -->
			<div class="container">
				<div class="row">
					<div class="col-md-12 flex archive_content_container">
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;

						the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
					</div>
				</div>
			</div>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_sidebar();
get_footer();
