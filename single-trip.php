
<!-- Single BLOG Page  -->

<?php get_header(); ?>

<!-- Getting the single Post -->

    <?php while(have_posts()) : the_post() ?>
  <section class="title-section">
      <p class="welcome-text">Welcome To</p>
      <h1><?php the_title(); ?></h1>
      <p class="sub-text"><?php the_excerpt(); ?></p>
    </section>

    <div class="row">

    <!-- if there is a sidebar then we want 8 columns otherwise we want 12 columns -->
    <!-- Making sure that if there is no sidebar then it is full width -->

    <?php if(is_active_sidebar('sidebar')) : ?>
      <div class="large-8 columns">
    <?php else : ?>
        <div class="large-12 columns">
    <?php endif; ?>

      <article class="single-blog-post">
        <?php if(has_post_thumbnail()) : ?>  
          <div class="post-thumbnail">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php endif; ?>

        <!-- Meta Details Dynamically -->

          <div class="meta">
          <ul>
            <li><i class="fa fa-user"></i>
              <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                      <?php the_author(); ?>
                  </a>
            </li>
            <li><i class="fa fa-calendar"></i> 
              <?php the_time('F j, Y g:i a'); ?>
            </li>
            <li><i class="fa fa-folder"></i> 
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

            <h3> Trip Details : </h3>
            Name : <?php the_field('name'); ?> <br>
            City : <?php the_field('destination_principale'); ?> <br>
            Discription : <?php the_field('descriptif_du_voyage'); ?><br>
            Number of Days : <?php the_field('nombre_de_jours'); ?><br>
            Number of Persons : <?php the_field('nombre_de_personnes_dans_groupe'); ?><br>
            <?php the_field('enfant'); ?> : is included<br>
            <?php the_field('animaux'); ?> : is included<br>
            <?php the_field('transport'); ?> : is included

            <br>
            <br>

        </article>
      </div>

      <!-- Adding Sidebar Dynamically -->

      <?php if(is_active_sidebar('sidebar')) : ?>
        <div class="large-4 columns">
            <div class="well">
                <?php dynamic_sidebar('sidebar'); ?>
            </div>
        </div>
      <?php endif; ?>
    </div>

    <?php endwhile; ?>
<?php get_footer(); ?>