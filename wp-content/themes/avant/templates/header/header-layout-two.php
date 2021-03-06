<?php
/**
 * @package Avant
 */
global $woocommerce; ?>

<?php if ( !get_theme_mod( 'avant-header-remove-topbar' ) ) : ?>
	<div class="site-top-bar site-header-layout-two <?php echo ( get_theme_mod( 'avant-header-topbar-switch' ) ) ? sanitize_html_class( 'site-top-bar-switch' ) : ''; ?>">
		
		<div class="site-container">
			
			<div class="site-top-bar-left">
				
				<?php if ( !get_theme_mod( 'avant-header-remove-no' ) ) : ?>
					<span class="site-topbar-no"><?php echo ( get_theme_mod( 'avant-website-head-no-icon' ) ) ? '<i class="fa ' . sanitize_html_class( get_theme_mod( 'avant-website-head-no-icon' ) ) . '"></i>' : '<i class="fa fa-phone"></i>'; ?> <?php echo wp_kses_post( get_theme_mod( 'avant-website-head-no', __( 'Call Us: +2782 444 YEAH', 'avant' ) ) ) ?></span>
				<?php endif; ?>
				
				<?php if ( !get_theme_mod( 'avant-header-remove-add' ) ) : ?>
	            	<span class="site-topbar-ad"><?php echo ( get_theme_mod( 'avant-website-site-add-icon' ) ) ? '<i class="fa ' . sanitize_html_class( get_theme_mod( 'avant-website-site-add-icon' ) ) . '"></i>' : '<i class="fa fa-map-marker"></i>'; ?> <?php echo wp_kses_post( get_theme_mod( 'avant-website-site-add', 'Cape Town, South Africa' ) ) ?></span>
				<?php endif; ?>
				
			</div>
			
			<div class="site-top-bar-right">
				
				<?php if ( !get_theme_mod( 'avant-header-search' ) ) : ?>
					<div class="menu-search">
				    	<i class="fa fa-search search-btn"></i>
				    </div>
				<?php endif; ?>
		        
		        <?php if ( !get_theme_mod( 'avant-header-remove-social' ) ) : ?>
					<?php get_template_part( '/templates/social-links' ); ?>
				<?php endif; ?>
				
				<?php wp_nav_menu( array( 'theme_location' => 'top-bar-menu', 'container_class' => 'avant-header-nav', 'fallback_cb' => false ) ); ?>
				
			</div>
			<div class="clearboth"></div>
			
			<?php if ( !get_theme_mod( 'avant-header-search' ) ) : ?>
			    <div class="search-block">
			        <?php get_search_form(); ?>
			    </div>
			<?php endif; ?>
			
		</div>
		
	</div>
<?php endif; ?>

<header id="masthead" class="site-header site-header-layout-two <?php echo ( is_front_page() && get_theme_mod( 'avant-header-remove-slider-space' ) ) ? sanitize_html_class( 'site-header-nospace' ) : ''; ?>">
	
	<div class="site-container">
			
		<div class="site-branding">
			
			<?php if ( has_custom_logo() ) : ?>
	            <?php the_custom_logo(); ?>
	        <?php else : ?>
	            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
	        <?php endif; ?>
			
		</div><!-- .site-branding -->
		
	</div>
	
	<div class="site-header-top">
		
		<div class="site-container">
			<div class="site-header-top-left">
				
				<nav id="site-navigation" class="main-navigation avant-nav-style-plain" role="navigation">
					<span class="header-menu-button"><i class="fa fa-bars"></i><span><?php echo esc_attr( get_theme_mod( 'avant-header-menu-text', __( 'menu', 'avant' ) ) ); ?></span></span>
					<div id="main-menu" class="main-menu-container">
						<span class="main-menu-close"><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></span>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</div>
				</nav><!-- #site-navigation -->
				
			</div>
			
			<div class="site-header-top-right">
				
				<?php if ( avant_is_woocommerce_activated() ) : ?>
					<?php if ( !get_theme_mod( 'avant-header-remove-cart' ) ) : ?>
						<div class="header-cart">
							
				            <a class="header-cart-contents" href="<?php echo esc_url( $woocommerce->cart->get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'avant' ); ?>">
				                <span class="header-cart-amount">
				                    <?php echo sprintf( _n( '%d item', '%d items', $woocommerce->cart->cart_contents_count, 'avant' ), $woocommerce->cart->cart_contents_count ); ?><span> - <?php echo $woocommerce->cart->get_cart_total(); ?></span>
				                </span>
				                <span class="header-cart-checkout <?php echo ( $woocommerce->cart->cart_contents_count > 0 ) ? sanitize_html_class( 'cart-has-items' ) : ''; ?>">
				                    <i class="fa fa-shopping-cart"></i>
				                </span>
				            </a>
							
						</div>
					<?php endif; ?>
				<?php endif; ?>
				
			</div>
			<div class="clearboth"></div>
			
		</div>
		
	</div>
	
</header><!-- #masthead -->