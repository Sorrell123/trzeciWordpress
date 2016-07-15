<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php while(have_posts()) : the_post(); ?>

	<div id="content">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span class="post-span">- by <?php the_author_posts_link(); ?> from <?php the_time("F jS, Y"); ?></span></h2>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("full"); ?></a>
		<p><?php the_content("Read More"); ?></p>
	</div>

<?php endwhile; ?>

<?php comments_template(); ?>

<?php get_footer(); ?>