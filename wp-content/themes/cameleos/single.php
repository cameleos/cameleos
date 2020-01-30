<?php get_header(); ?>

<section>
	<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template/content', get_post_format() );
		endwhile;
	?>
</section>

<?php
get_footer();
