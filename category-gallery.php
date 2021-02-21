<!-- Destination page by by choosing the categories -->

<?php get_header(); ?>
<div class="container">

  <section class="title-section">
      <p class="welcome-text">Welcome To</p>
      <h1>Destinations</h1>
      <p class="sub-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pretium efficitur justo ut malesuada. Donec efficitur commodo est, sed maximus nisi pulvinar Etiam sem tortor</p>
    </section>

    <!-- Looping through the post and just choosing categories and showing just images-->

    <section class="gallery">
    <?php $gallery_query = new WP_Query(array('category_name' => 'gallery')); ?>
    <?php while($gallery_query->have_posts()) : $gallery_query->the_post(); ?>


    <!-- Showing the GAllery image as a link -->

      
      <div class="large-4 small-12 columns">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('full', array('class' => 'hvr-grow')); ?>
            </a>
          </div>

    <?php endwhile; ?>
    </section>
</div>
  <?php get_footer(); ?>