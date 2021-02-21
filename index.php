
<!-- Main BLOG Page -->

<?php get_header(); ?>
<div class="container">
  <section class="title-section">
      <p class="welcome-text">Welcome To</p>
      <h1>Blog</h1>
      <p class="sub-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pretium efficitur justo ut malesuada. Donec efficitur commodo est, sed maximus nisi pulvinar Etiam sem tortor</p>
    </section>

    <!-- Getting all the posts except Featured Posts  -->

    <?php $no_featured_query = new WP_Query(array(

      'cat' => '-5',
      'posts_per_page' => '5', 
			'paged' => get_query_var( 'paged' ) 
    )); ?>

    <?php while($no_featured_query->have_posts()) : $no_featured_query->the_post(); ?>
      <article class="blog-post">
        <div class="row">

        <!-- Grabbing the Title and the content -->

        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt(); ?>

      <!-- Checking if it has thumbnails -->

        <?php if(has_post_thumbnail()) : ?>
          <div class="post-thumbnail">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php endif; ?>

        <!--  -->
        <div class="meta">
          <ul>
            <li><i class="fa fa-user"></i>

            <!-- Grabbing the posts by AUTHOR and taking to the Archive page -->

              <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                      <?php the_author(); ?>
                  </a>
            </li>
            <li><i class="fa fa-calendar"></i> 

            <!-- Date and time format -->

              <?php the_time('F j, Y g:i a'); ?>
            </li>
            <li><i class="fa fa-folder"></i> 

            <!-- Different category lists under the post  -->
            <!-- Looping through the array of categories and outputting different category name under the post -->
              <?php
                    $categories = get_the_category();
                    $separator = ", ";
                    $output = '';

                    if($categories){
                      foreach($categories as $category){
                        $output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name .'</a>'. $separator;
                        //$output .= $category->cat_name . $separator;

                      }
                    }
                    echo trim($output, $separator);
                  ?>
            </li>
          </ul>
        </div>
      </div>
    </article>
    <?php endwhile; ?>
    <div class="pagination">

      <?php next_posts_link(); ?>
      <?php previous_posts_link(); ?>
      <?php wp_reset_query(); ?>
   
    </div>
    
</div>
  <?php get_footer(); ?>