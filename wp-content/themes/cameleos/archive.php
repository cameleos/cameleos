<?php get_header(); ?>

<section>
	<?php
	if ( have_posts() ) : ?>

		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		</header>

		<?php
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
