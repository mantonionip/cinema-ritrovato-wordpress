<?php get_header(); ?>

	<div id="primary" class="content-area wrapper">

		<div id="main" class="site-main search-page" role="main">
			
			<div class="heading-container">
				<h1>
					<?php esc_html_e( 'Searching For:', 'Starter Theme'); ?> 
					"<?php echo get_search_query(); ?>"
				</h1>
			</div>

			<div class="grid-blog">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
					<?php get_template_part( 'template-parts/content', 'search' ); ?>
	
				<?php endwhile; else : ?>
	
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
	
				<?php endif; ?>
			</div>
			<div class="archive-dropdown">
				<?php get_sidebar(); ?>
			</div>

		</div> <!-- /.content -->

	</div>

<?php get_footer(); ?>
