<div class="container">
<h3 class="text-center">Projects</h3>
<hr>
    <div class="row">
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="col-sm-3">
        <div class="item">
            <a href="<?php the_permalink(); ?>" rel="bookmark">
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="entry-page-image article-grid">
                    <?php the_post_thumbnail('medium'); ?>
                </div><!-- .entry-page-image -->
            <?php endif; ?>
            <h5><?php // the_title(); ?></h5>
            </a>
        </div>
    </div>
    <?php endwhile; // end of the loop. ?>
    </div>
</div>
