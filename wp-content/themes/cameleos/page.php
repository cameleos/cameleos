<?php get_header(); ?>

<section >
	<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template/content', 'page' );
		endwhile;
	?>
</section>

<?php
get_footer();
