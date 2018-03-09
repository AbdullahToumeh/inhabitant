<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
        <h1>Latest Adventures</h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div class="archive-adventures">
        <div class="archive-adventures-grid">
        <?php
          $args = array( 'post_type' => 'adventures', 'order' => 'DESC', 'posts_per_page' => 4 );
          $adventure_posts = get_posts( $args ); // returns an array of posts
        ?>
        <?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>
        <div class="archive-adventure-grid-part">
          <?php the_post_thumbnail( 'large' );  ?>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <a class="read-more-button" href="<?php the_permalink(); ?>">Read More</a>
        </div>
        <?php endforeach; wp_reset_postdata(); ?>
      </div><!-- .home-adventures -->

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
