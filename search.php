<?php get_header(); ?>

<div class="android-content mdl-layout__content">
    <a name="top"></a>

    <div class="mdl-grid max-width">
        <div class="mdl-cell mdl-cell--12-col">
            <h4>Search Results</h4>
          </div>
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
        <div class="demo-card-wide mdl-cell mdl-card custom-shadow mdl-cell--4-col">
            <div class="mdl-card__title" style="background: url('<?php (has_post_thumbnail())? the_post_thumbnail_url('large') : 'default.jpg'; ?>') center / cover;">
                
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
        <?php endwhile; ?>
        <?php else: ?>
          <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>

        
            <!-- <div class="mdl-card__menu">
                <span class="mdl-chip custom-chip">
                  <span class="mdl-chip__text">Summary</span>
              </span>
              </div> -->
        </div>
        <div class="mdl-cell--12-col center">
            <div class="pagination">
                <?php $args = array(
                    'prev_text'          => __('Previous'),
                    'next_text'          => __('Next'),
                );
                echo paginate_links($args); 
                ?>
            </div>
        </div>

<?php get_footer(); ?>