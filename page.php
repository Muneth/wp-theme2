
<!-- Different pages on the site with sidebar -->

<?php get_header(); ?>
<div class="container">

  <?php while(have_posts()) : the_post() ?>
  <section class="title-section">
      <p class="welcome-text">Welcome To</p>
      <h1><?php the_title(); ?></h1>
      <p class="sub-text"><?php the_excerpt(); ?></p>
    </section>
  
    <div class="row">
  
    <!-- if there is a sidebar then we want 8 columns otherwise we want 12 columns -->
  
    <?php if(is_active_sidebar('sidebar')) : ?>
      <div class="large-8 columns">
    <?php else : ?>
        <div class="large-12 columns">
    <?php endif; ?>
  
      <article class="single-page">
       
            <?php the_content(); ?>
  
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
    
</div>

<?php get_footer(); ?>