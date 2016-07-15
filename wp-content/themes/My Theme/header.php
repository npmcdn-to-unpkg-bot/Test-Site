<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<?php wp_head(); ?>
</head>
	<body <?php body_class(); ?>>
		<div class="container-fluid">
			<div class="row">
				<div id="page" class="site">
					<div class="site-inner">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  			<!-- Indicators -->
			  				<ol class="carousel-indicators">
			    				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  				</ol>
			
			  			<!-- Wrapper for slides -->
				  			<div class="carousel-inner" role="listbox">
							    <div class="item active">
				    				<img src="https://cldup.com/BbPI7fwlMB.JPG" alt="slide1">
				    			</div>
				    			<div class="item">
				      				<img src="https://cldup.com/eKKcuH-4tH.JPG" alt="Slide2">
				    			</div>
				    			<div class="item">
				      				<img src="https://cldup.com/07LBcU2qov.JPG" alt="slide3">
				    			</div>
				  			</div><!-- .carousel-inner -->
				
				  			<!-- Controls -->
				  			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    			<span class="sr-only">Previous</span>
				  			</a>
				  			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    			<span class="sr-only">Next</span>
				  			</a>
						</div><!-- End Carousel -->
							<header id="masthead" class="site-header" role="banner">
							<div class="site-header-main">
								<div class="row">
									<div class="col-sm-12">
										<?php $description = get_bloginfo( 'description', 'display' );
											if ( $description || is_customize_preview() ) : ?>
												<div id="top-bar">
													<p class="site-description"><?php echo $description; ?></p>
												</div>
											<?php endif; ?>
									</div><!-- .col -->
								</div><!-- .row -->
								<div class="row">
									<div class="col-sm-12 col-md-4">
										<div class="site-branding">
											
											<?php twentysixteen_the_custom_logo(); ?>
	
											<?php if ( is_front_page() || is_home() ) : ?>
												<h1 class="site-title"><em><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></em></h1>
											<?php else : ?>
												<p class="site-title lead"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
											<?php endif; ?>
	
										</div><!-- .site-branding -->
									</div><!-- .col -->
									<div class="col-sm-12 col-md-8">
										<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
											<div id="site-header-menu" class="site-header-menu" data-spy="affix" data-offset-top="63">
												<?php if ( has_nav_menu( 'primary' ) ) : ?>
													<nav class="navbar navbar-default" role="navigation">
														<div class="container-fluid"> 
														<!-- Brand and toggle get grouped for better mobile display --> 
		  													<div class="navbar-header"> 
		    													<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
		      														<span class="sr-only">Toggle navigation</span> 
		      														<span class="icon-bar"></span> 
		      														<span class="icon-bar"></span> 
		      														<span class="icon-bar"></span> 
		    													</button> 
		    													<a class="navbar-brand hidden-xs" href="<?php bloginfo('url'); ?>"><span class="glyphicon glyphicon-wrench"></span>&nbsp;<?php bloginfo('name')?></a> 
		  													</div> 
		  													<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  													<!-- Collect the nav links, forms, and other content for toggling --> 
		    												<?php
		            										wp_nav_menu( array(
		                										'menu'              => 'primary',
		                										'theme_location'    => 'primary',
		                										'depth'             => 2,
		                										'container'         => 'div',
		                										'container_class'   => '',
		        												'container_id'      => '',
		                										'menu_class'        => 'nav navbar-nav',
		                										'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                										'walker'            => new wp_bootstrap_navwalker())
		            										);
		        											?>
		        												<ul class="nav navbar-nav navbar-right">
																	<li class="dropdown">
																		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-search"></span><span class="caret"></span></a>
																		<ul class="dropdown-menu">
																			<div id="search-container" class="search-box-wrapper">
																				<div class="search-box">
																					<?php get_search_form(); ?>
																				</div>
																			</div>
																		</ul>
																	</li>
		        												</ul>
		        											</div><!-- .collapse navbar-collapse -->
		        										</div><!-- .container-fluid -->
													</nav>
												<?php endif; ?>
	
												<?php if ( has_nav_menu( 'social' ) ) : ?>
													<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
														<?php
															wp_nav_menu( array(
																'theme_location' => 'social',
																'menu_class'     => 'social-links-menu',
																'depth'          => 1,
																'link_before'    => '<span class="screen-reader-text">',
																'link_after'     => '</span>',
															) );
														?>
													</nav><!-- .social-navigation -->
												<?php endif; ?>
											</div><!-- .site-header-menu -->
										<?php endif; ?>
									</div><!-- .col -->
								</div><!-- .row -->
							</div><!-- .site-header-main -->
							<?php if ( get_header_image() ) : ?>
								<?php
									/**
									* Filter the default twentysixteen custom header sizes attribute.
									*
									* @since Twenty Sixteen 1.0
									*
									* @param string $custom_header_sizes sizes attribute
									* for Custom Header. Default '(max-width: 709px) 85vw,
									* (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
									*/
									$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
								?>
								<div class="header-image">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
										<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
									</a>
								</div><!-- .header-image -->
							<?php endif; // End header image check. ?>
							</header><!-- .site-header -->
								<div id="content" class="site-content">