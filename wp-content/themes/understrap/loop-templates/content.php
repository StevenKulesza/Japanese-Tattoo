<?php
/**
 * @package understrap
 */
?>
<!-- col-sm-4 // remove column for masonary replace grid-item if change-->
<div class="grid-item">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php echo get_permalink( get_the_ID() ) ?>">
		<div class="feature-image-container post-grid">
			<?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?> 
		</div>
	    <div class="article-text">
	    		<i class="fa fa-tags"></i> <?php
		        	the_category();
		        ?>
			<header class="entry-header">
				<?php the_title( sprintf( '<h5 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>'); ?>
				<?php if ( 'post' == get_post_type() ) : ?>

				<?php endif; ?>
		        
			</header><!-- .entry-header -->
			<div class="entry-content">

		            <?php
		                the_excerpt();
		            ?>

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
						'after'  => '</div>',
					) );
				?>
		        
			</div><!-- .entry-content -->
	  </div> <!-- article text -->
	 </a>
	</article><!-- #post-## -->
</div>