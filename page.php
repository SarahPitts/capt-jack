<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

			<img src="<?php bloginfo('template_directory'); ?>/images/slider.jpg" />

			<div class="content">

			<h1><?php the_title(); ?></h1>
			<br>

			<div class="entry">

				<p><?php the_content(); ?></p>

				<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link(__('Edit this entry','html5reset'), '<p>', '</p>'); ?>

		</div>

		</article>

		<?php endwhile; endif; ?>


<?php get_footer(); ?>
