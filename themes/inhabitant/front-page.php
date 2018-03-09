<?php
/**
 * The main template file.
 *
 * @package Inhabitent
 */

get_header(); ?>

  <!--//deleted getposts php-->
  <div class='front-header'>
    <img src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-full.svg'; ?>" class="main-logo" alt="Inhabitent logo" />
  </div>

    <h1>Shop Stuff</h1>
    

   <?php
  $terms = get_terms ( array(
    'taxonomy' => 'product_type',
    'hide_empty' => 0,
  ));

  if ( !empty($terms) ) :
  ?>
  <div class="home-shop-grid">
    <?php foreach ( $terms as $term ) :
      ?>
      <div class = "home-shop-box">
        <img class="shop-logos" src = "<?php echo get_template_directory_uri() . '/images/' . $term->slug; ?>.svg" alt = "<?php echo $term->name; ?>"/>
        <p><?php echo $term->description; ?></p>
        <p>
          <a href = "<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a>
        </p>
      </div>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>

  <div class="home-journal">
    <h1>Inhabitent Journal</h1>
    <div class = "home-journal-grid">
      <?php
        $args = array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 3 );
        $product_posts = get_posts( $args ); // returns an array of posts
      ?>
      <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
        <div class="home-journal-part">
        <?php /* Content from your array of post results goes here */ ?>
          <?php the_post_thumbnail( 'medium' );  ?>
          <p><?php the_time('j F, Y'); ?> / <?php comments_number(); ?></p>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <a class="read-more-button" href="<?php the_permalink(); ?>">Read More</a>
        </div>
      <?php endforeach; wp_reset_postdata(); ?>
    </div>    
  </div><!-- .home-journal -->

  <!--  -->
  <div class="home-adventures">
    <h1>Latest Adventures</h1>
    <div class="adventures-grid">
    <?php
      $args = array( 'post_type' => 'adventures', 'order' => 'DESC', 'posts_per_page' => 4 );
      $adventure_posts = get_posts( $args ); // returns an array of posts
    ?>
    <?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>
    <div class="adventure-grid-part">
      <?php the_post_thumbnail( 'large' );  ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <a class="read-more-button" href="<?php the_permalink(); ?>">Read More</a>
    </div>
    <?php endforeach; wp_reset_postdata(); ?>
    <a href="<?php echo esc_url( home_url( '/adventures' ) ); ?>" class="adventure-button">More Adventures</a>
  </div><!-- .home-adventures -->

  </div>
<?php get_footer(); ?>
