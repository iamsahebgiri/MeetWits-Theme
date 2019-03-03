<?php get_header(); ?>
<div class="android-content mdl-layout__content">
      <a name="top"></a>
      <div class="mdl-grid max-width">
        <div class="mdl-cell mdl-cell--12-col">
            <ul class="breadcrumb">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                
                <!-- <li><a href="#">Summer 15</a></li> -->
                <li><?php the_title(); ?></li>
              </ul>
               <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
          <div class="post-title">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="post-details">
           <?php the_time('F j, Y'); ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                    <?php the_author(); ?>
                    </a>
            <!-- <hr> -->
          </div>
        </div>
        <div class="mdl-cell mdl-cell--8-col post-content">
          <div class="mdl-cell mdl-cell--12-col ">
              <?php if(has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url(); ?>"
              class="post-image" alt="<?php the_title_attribute(); ?>">
              <?php endif; ?><br>
                <?php the_content(); ?>
            <hr>
          </div>
          <div class="mdl-cell mdl-cell--12-col">
            <div class="author-info">
              <header class="author-header">
                <div class="author-avatar">
                  <img alt="<?php the_author(); ?>" src=" <?php echo get_avatar_url( get_the_author_meta( 'ID' ), 64 ); ?> "
                    class="avatar avatar-64 photo" height="64" width="64"> </div><!-- .author-avatar -->

                <h2 class="author-title">
                  <?php the_author(); ?>
                </h2>

              </header>

              <div class="author-description">
                <p class="author-bio">
                  <?php the_author_meta('description'); ?> 
                </p><!-- .author-bio -->
              </div><!-- .author-description -->
            </div>
          </div>
          <?php endwhile; ?>
        <?php else: ?>
          <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>
          <hr>
          <div class="mdl-cell mdl-cell--12-col">
            <?php comments_template(); ?> 
          </div>
          <!-- <hr> -->
          <div class="mdl-cell mdl-cell--12-col">
            <h4>Popular Post</h4>
            <div class="mdl-grid">
         <?php query_posts('posts_per_page=4'); ?>

                  <?php while (have_posts()) : the_post(); ?>
                   <div class="demo-card-wide mdl-cell mdl-card custom-shadow mdl-cell--6-col">
                <div class="mdl-card__title" style="background: url('<?php
             if(has_post_thumbnail())
             { the_post_thumbnail_url('large');}
             else{ $img = bloginfo('template_url');
             	echo $img.'/images/dt.jpg';} ?>') center / cover;">
                </div>
                <div class="mdl-card__subtitle-text custom-padding">
                  <h3 class="mdl-typography--body-2 custom-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>  
                  </h3>
                </div>
                <div class="mdl-card__actions">
                  <a href="<?php the_permalink(); ?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                    Read More
                </a>
                  <span class="custom-right">
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                    <?php the_author(); ?>
                    </a>
                  </span>
                </div>
              </div>
                  <?php endwhile;?>
                  </div>
          </div>
        </div>

        <div class="mdl-cell mdl-cell--4-col mdl-cell--stretch">
          
        </div>
      </div>
<?php get_footer(); ?>