<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

      <header class="adventure-header">
				<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'full' ); ?>
				<?php endif; ?>
			</header><!-- .entry-header -->

      <div class="adventure-content">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          <h4>By <?php the_author(); ?></h4>
					<?php the_content(); ?>

      <div class="social-media-links">
        <button class="social-media-button"><i class="fab fa-facebook-f"></i> &nbsp;Like</button>
        <button class="social-media-button"><i class="fab fa-twitter"></i> &nbsp;Tweet</button>
        <button class="social-media-button"><i class="fab fa-pinterest"></i> &nbsp;Pin</button>
      </div>

      </div><!-- .adventure-content -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
