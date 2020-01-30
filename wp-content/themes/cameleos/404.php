<?php get_header(); ?>

<section class="error-404 not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nie znaleziono strony...', 'cameleos' ); ?></h1>
	</header>

	<div class="page-content">
		<p>Brak strony</p>
		<?php get_search_form(); ?>
	</div>
</section>

<?php
get_footer();
