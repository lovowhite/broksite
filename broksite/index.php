<?php get_header(); ?>

<div class="container">

	<?php if (have_posts()) : while (have_posts()) : the_post();  ?>

	<article>

		<?php the_content(); ?>

	</article>

<?php endwhile; else: ?>

<h1>This post has no content.</h1>

<?php endif; ?>

</div>

<?php get_footer(); ?>