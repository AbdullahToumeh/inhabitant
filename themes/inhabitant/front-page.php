<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <!--//deleted getposts php-->
  <div class='front-header'>
    <img src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-full.svg'; ?>" class="main-logo" alt="Inhabitent logo" />
  </div>

  <div class="shop-stuff">
    <h1>Shop Stuff</h1>
    <div class="home-shop-grid">
      <div class="home-shop-box">
        <img src="<?php echo get_template_directory_uri() . '/images/do.svg'; ?>" class="shop-logos" alt="do stuff logo" />
        <p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
        <a href = "do.php">Do Stuff</a>
      </div>
      <div class="home-shop-box">
        <img src="<?php echo get_template_directory_uri() . '/images/eat.svg'; ?>" class="shop-logos" alt="eat stuff logo" />
        <p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
        <a href = "eat.php">Eat Stuff</a>
      </div>
      <div class="home-shop-box">
        <img src="<?php echo get_template_directory_uri() . '/images/sleep.svg'; ?>" class="shop-logos" alt="sleep stuff logo" />
        <p>Get a good night's rest in the wild in a home away from home that travels well.</p>
        <a href = "sleep.php">Sleep Stuff</a>
      </div>
      <div class="home-shop-box">
        <img src="<?php echo get_template_directory_uri() . '/images/wear.svg'; ?>" class="shop-logos" alt="wear stuff logo" />
        <p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
        <a href = "wear.php">Wear Stuff</a>
      </div>
    </div>
  </div>

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
  </div>

  <div class="home-adventures">
    <h1>Latest Adventures</h1>
    <div class="adventures-grid">
      <div class="canoe-adventure">
        <h2>Getting Back to Nature in a Canoe</h2>
        <a href="canoe.php">Read More</a>
      </div>
      <div class="beach-adventure">
        <h2 class="medium-merriweather">A Night with Friends at the Beach</h2>
        <a href="beach.php">Read More</a>
      </div>
      <div class="mountain-adventure">
        <h2 class="small-merriweather">Taking in the View at Big Mountain</h2>
        <a href="mountain.php">Read More</a>
      </div>
      <div class="night-adventure">
        <h2 class="small-merriweather">Star-gazing at the Night Sky</h2>
        <a href="night.php">Read More</a>
      </div>
      <a href="more-adventures.php" class="adventure-button">More Adventures</a>
    </div>


  </div>
<?php get_footer(); ?>
