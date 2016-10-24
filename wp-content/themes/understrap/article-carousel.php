<div class="article-carousel owl-carousel">
     <?php while ( have_posts() ) : the_post(); ?>
            <div class="item">
        <a href="<?php the_permalink(); ?>" rel="bookmark">
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="entry-page-image">
                <?php the_post_thumbnail('medium'); ?>
            </div><!-- .entry-page-image -->
        <?php endif; ?>
        <h5><?php the_title(); ?></h5>
        </a>
        </div>
    <?php endwhile; // end of the loop. ?>
 </div>
