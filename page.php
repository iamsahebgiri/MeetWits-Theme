<?php get_header(); ?>
<div class="android-content mdl-layout__content">
      <a name="top"></a>
      <div class="mdl-grid max-width">
        <div class="mdl-cell mdl-cell--12-col">
               <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
          <div class="post-title">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="post-details">
            <!-- <hr> -->
          </div>
        </div>
        <div class="mdl-cell mdl-cell--8-col post-content">
          <div class="mdl-cell mdl-cell--12-col ">
                <?php the_content(); ?>
            <hr>
          </div>

          <?php endwhile; ?>
        <?php else: ?>
          <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>
          <!-- <hr> -->
        </div>

        <div class="mdl-cell mdl-cell--4-col mdl-cell--stretch">
          
        </div>
      </div>
<?php get_footer(); ?>