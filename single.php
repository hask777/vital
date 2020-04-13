<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

 			<header class="page-header" style="background-image: url(<?php echo  $image_url ?>);">
 				<div class="page_header_bgc"></div>
 				<div class="container">
 					<div class="row">
 						<div class="col-md-12 flex">
 						<?php
 							echo '<h1 class="page-title">' . get_the_title( '', false ) . '</h1>';
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
					<div class="col-md-12 archive_content_container">

					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

						the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

				</div>
			</div>
		</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
