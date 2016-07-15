<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php while(have_posts()) : the_post(); ?>

	<div id="content">
		<h2><?php the_title(); ?></h2>
		<p><?php the_content("Read More"); ?></p>
	</div>

<?php endwhile; ?>

<?php get_footer(); ?>