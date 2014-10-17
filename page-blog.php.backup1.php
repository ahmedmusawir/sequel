<?php 
/**
*
* Template Name: My Blog Page Backup 1
*
**/

?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( !is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php
		/*==========================================================
		=            This is my Shit from wp codex site            =
		==========================================================*/
		
		$args = array(
			'posts_per_page'   => 15,
			'offset'           => 0,
			'category'         => '',
			'category_name'    => '',
			'orderby'          => 'post_date',
			'order'            => 'DESC',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => '',
			'meta_value'       => '',
			'post_type'        => 'post',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'post_status'      => 'publish',
			'suppress_filters' => true );

		 // $posts_array = get_posts( $args );
		
		/*-----  End of This is my Shit from wp codex site  ------*/
		?>

		<ul>
			<?php


			// $args = array( 'posts_per_page' => 5, 'offset'=> 1, 'category' => 1 );

			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<li>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<figure><?php the_post_thumbnail(); ?></figure>
					<p><?php the_excerpt(); ?></p>

				</li>
			<?php endforeach; 
			wp_reset_postdata();?>

			</ul>

					</div><!-- #content -->
				</div><!-- #primary -->
				<?php get_sidebar( 'content' ); ?>
			</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
