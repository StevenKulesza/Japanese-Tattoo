<div class="home-nav hidden-sm-down <?php if ( !is_front_page() ) : ?>fixed top border-top-line<?php endif ?> <?php if ( is_front_page() ) : ?>bottom border-bottom-line<?php endif ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-2 text-center">
				<a class="link" href="<?php bloginfo('url'); ?>/<?php echo get_theme_mod( 'themeslug_menu_item_1_link' ); ?>">
				<h5><?php echo get_theme_mod( 'themeslug_menu_item_1' ); ?></h5>
				</a>
			</div>
			<div class="col-sm-2 text-center">
				<a class="link" href="<?php bloginfo('url'); ?>/<?php echo get_theme_mod( 'themeslug_menu_item_2_link' ); ?>">
				<h5><?php echo get_theme_mod( 'themeslug_menu_item_2' ); ?></h5>
				</a>
			</div>
			<div class="col-sm-4 text-center">
			<!-- Your site title as branding in the menu -->
            <?php if (!has_custom_logo()) { ?>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                	<?php bloginfo( 'name' ); ?>
                </a>
            <?php } else { the_custom_logo(); } ?><!-- end custom logo -->
			</div>                                
			<div class="col-sm-2 text-center">
				<a class="link" href="<?php bloginfo('url'); ?>/<?php echo get_theme_mod( 'themeslug_menu_item_3_link' ); ?>">
				<h5><?php echo get_theme_mod( 'themeslug_menu_item_3' ); ?></h5>
				</a>
			</div>
			<div class="col-sm-2 text-center">
				<a class="link" href="<?php bloginfo('url'); ?>/<?php echo get_theme_mod( 'themeslug_menu_item_4_link' ); ?>">
				<h5><?php echo get_theme_mod( 'themeslug_menu_item_4' ); ?></h5>
				</a>
			</div>
		</div>
	</div>
</div>

<div class="home-nav hidden-md-up <?php if ( !is_front_page() ) : ?>fixed top border-top-line<?php endif ?> <?php if ( is_front_page() ) : ?>bottom border-bottom-line<?php endif ?>">
	<div class="container-fluid">
		<div class="row">                              
			<div class="col-xs-8 offset-xs-2">
            <?php if (!has_custom_logo()) { ?>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                	<?php bloginfo( 'name' ); ?>
                </a>
            <?php } else { the_custom_logo(); } ?><!-- end custom logo -->
			</div>
			<div class="col-sm-2">
				<!-- The overlay -->
				<div id="myNav" class="nav-overlay">

				  <!-- Button to close the overlay navigation -->
				  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

				  <div class="nav-overlay-content">
					<a class="link" href="<?php bloginfo('url'); ?>/<?php echo get_theme_mod( 'themeslug_menu_item_1_link' ); ?>"><?php echo get_theme_mod( 'themeslug_menu_item_1' ); ?></a>

					<a class="link" href="<?php bloginfo('url'); ?>/<?php echo get_theme_mod( 'themeslug_menu_item_2_link' ); ?>"><?php echo get_theme_mod( 'themeslug_menu_item_2' ); ?></a>

				    <a class="link" href="<?php bloginfo('url'); ?>/<?php echo get_theme_mod( 'themeslug_menu_item_3_link' ); ?>"><?php echo get_theme_mod( 'themeslug_menu_item_3' ); ?></a>

				    <a class="link" href="<?php bloginfo('url'); ?>/<?php echo get_theme_mod( 'themeslug_menu_item_4_link' ); ?>"><?php echo get_theme_mod( 'themeslug_menu_item_4' ); ?></a>
				  </div>

				</div>
				<!-- Use any element to open/show the overlay navigation menu -->
				<span onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></span>
			</div>
		</div>
	</div>
</div>


