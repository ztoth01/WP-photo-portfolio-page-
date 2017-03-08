<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package single_page
 * Template name: Gallery extra
 *
 */

get_header(); ?>

	<main id="con">

		<div class="container is--visible" id="swipegallery">


			<?php if( have_rows('gallery') ):
			$i = 1;
			?>
			<ul id="slides">
			<?php while ( have_rows('gallery') ) : the_row(); ?>

			<li class="slide <?php if($i == 1){echo "showing";}?>">
				<img class="" src="<?php the_sub_field('image'); ?>" alt="<?php echo $i;?>" />
				<span><?php the_sub_field('description'); ?></span>
			 </li>

			<?php
				$i ++;
				endwhile;
			?>
		</ul>

		</div>
				<?php endif;?>


		<div class="container container-thumbnails" id="container-thumbnails">
			<?php if( have_rows('gallery') ):
			$y = 1;
			?>

			<ul class="thumbnails">


				<?php while ( have_rows('gallery') ) : the_row(); ?>

			<li class="thumbnail">
				<img class="images" src="<?php the_sub_field('thumbnail'); ?>" alt="<?php echo $y;?>" />
			 </li>

			<?php
				$y ++;
				endwhile;
			?>


			</ul>
		</div>
	<?php endif;?>





		<button class="controls" id="previous">Previous</button>
		<button class="controls" id="next">Next</button>
		<span class="tigger" id="thumbnailsIcon"></span>
		<span class="tigger" id="closeThumbNails"></span>
	</main><!-- #main -->

<?php

get_footer();
