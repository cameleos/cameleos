<?php get_header(); ?>

<section>
	<?php
	if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'cameleos' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</header>

		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template/content', 'search' );
		endwhile;

		the_posts_navigation();

	else :
		get_template_part( 'template/content', 'none' );
	endif; ?>
</section>

<?php
get_footer();
