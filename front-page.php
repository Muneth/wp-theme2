
<!-- Main Front Page of the site  -->

<?php get_header(); ?>

<div class="container">

  <!-- SLIDER -->

    <?php echo do_shortcode('[metaslider id="101"]'); ?>
    

    <!-- Getting the posts of just entertainment category -->
    
    <?php $featured_query = new WP_Query(array(
        'category_name' => 'entertainment'
    )); ?>
    
    <?php while($featured_query->have_posts()) : $featured_query->the_post(); ?>
    
    
    <article class="posttt">
      <div class="large-3 medium-3 samll-12 columns center">
        <?php the_post_thumbnail('home-thumb'); ?>
        <h3><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>
        <h3><a href="<?php the_permalink(); ?>" class="read-btn read-more-btn hvr-bounce-out">Read More</a></h3>
      </div>
    </article>
    
    <?php endwhile; ?>

    <!-- Showing every second post inverse -->
    
    <?php
        $i = 0; // Counter
    ?>
    <?php $featured_query = new WP_Query(array('category_name'	=> 'featured')); ?>
    
    <?php while($featured_query->have_posts()) : $featured_query->the_post(); ?>
        <?php
            $i++;
            if($i % 2 != 0){
                $float = 'no-float';
            } else {
                $float = 'float-right';
            }
        ?>
        <article class="post">
          <div class="post-desc <?php echo $float; ?>">
            <span><?php the_time('F j, Y g:i a'); ?></span>
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
            <h3><a href="<?php the_permalink(); ?>" class="read-btn read-more-btn hvr-bounce-out">Read More</a></h3>
          </div>
          <div class="post-img">
              <?php the_post_thumbnail('homepage-thumb'); ?>
          </div>
        </article>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
