<?php get_header(); ?>

<section>
	<?php
	if ( have_posts() ) :

		if ( is_home() && ! is_front_page() ) : ?>
			<header>
				<h1 class="page-title"><?php single_post_title(); ?></h1>
			</header>
		<?php
		endif;

		while ( have_posts() ) : the_post();
			get_template_part( 'template/content', get_post_format() );
		endwhile;

		the_posts_navigation();

	else :
		get_template_part( 'template/content', 'none' );
	endif; ?>
</section>

<?php
get_footer();
