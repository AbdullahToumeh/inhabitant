<?php
/**
 * The template for displaying archive products.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1><?php single_term_title(); ?></h1>
				<?php
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

				<div class = "shop-page-grid">

	<!-- grabs all the post type of product, with only the custom taxonomy of the term title -->
	<?php
		$current_term = single_term_title( "", false );
	?>


	<?php
        $args = array( 
					'post_type' => 'product', 
					'order' => 'DESC', 
					'posts_per_page' => 16,
					'tax_query' => array(
						array(
							'taxonomy' => 'product_type',
							'field' => 'name',
							'terms' => $current_term,
						)
					)
				);
        $product_posts = get_posts( $args ); // returns an array of posts
      ?>
			<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
			<div class="shop-page-item">
        <?php /* Content from your array of post results goes here */ ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' );  ?></a>
					<div class="product-price-info">
						<p class="product-title"><?php the_title(); ?></p>
						<p class="product-dots">......................................</p>
						<p> <?php echo CFS()->get( 'price' ); ?>
					</div>	

					</p>
			</div>
			<?php endforeach; wp_reset_postdata(); ?>
	</div>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
