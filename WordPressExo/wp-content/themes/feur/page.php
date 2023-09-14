<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Thème_Perso
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php 
			$posts = get_posts(
				['numberposts' => -1,
				'orderby' => 'date',
				'order'=> 'ASC',
				'post_type' => 'post']
			);

			foreach($posts as $article){?>
			<h2><?= $article->post_title?></h2>
			<p><?= $article->post_content?></p>
			<?php the_post_thumbnail()?>
			<?php }
		?>
	
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
