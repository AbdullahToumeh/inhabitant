<?php
/**
 * The template for displaying archive products.
 *
 * @package Inhabitent
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<h1 class="page-title">Shop Stuff</h1>


			<?php
					$terms = get_terms ( array(
						'taxonomy' => 'product_type',
						'hide_empty' => 0,
					));

					if ( !empty($terms) ) :
			?>
			<ul class="shop-links">
			<?php foreach ( $terms as $term ) :		?>
			<li><a href = "<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a></li>
			<?php endforeach; ?>
			</ul>
			<?php endif; ?>
	
	<div class = "shop-page-grid">
	<?php
        $args = array( 'post_type' => 'product', 'order' => 'DESC', 'posts_per_page' => 16);
        $product_posts = get_posts( $args ); // returns an array of posts
      ?>
			<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
			<div class="shop-page-item">
        <?php /* Content from your array of post results goes here */ ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' );  ?></a>
					<div class="product-price-info">
						<p class="product-title"><?php the_title(); ?></p>
						<p class="product-dots">......................................</p>
						<p> <?php echo CFS()->get( 'price' ); ?></p>
					</div>
			</div>
			<?php endforeach; wp_reset_postdata(); ?>
	</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
