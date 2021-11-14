<!DOCTYPE html>
<html dir="ltr" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content ="initial-scale=1.0,user-scalable=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="header">
	<div class="wrapper">
		<ul id="umenu">
			<li>
			<svg class="icon" style="width: 1em;height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3113"><path d="M832.512 63.488q26.624 0 49.664 10.24t40.448 27.648 27.648 40.448 10.24 49.664l0 704.512q0 26.624-10.24 49.664t-27.648 40.448-40.448 27.648-49.664 10.24l-704.512 0q-26.624 0-49.664-10.24t-40.448-27.648-27.648-40.448-10.24-49.664l0-704.512q0-26.624 10.24-49.664t27.648-40.448 40.448-27.648 49.664-10.24l704.512 0zM188.416 923.648q19.456 0 36.864-7.168t30.208-19.968 19.968-30.208 7.168-36.864-7.168-36.864-19.968-30.208-30.208-19.968-36.864-7.168q-20.48 0-37.376 7.168t-30.208 19.968-20.48 30.208-7.168 36.864 7.168 36.864 20.48 30.208 30.208 19.968 37.376 7.168zM446.464 897.024l36.864 0q15.36 0 30.208 0.512t31.232 0.512 36.864-1.024q0-93.184-35.84-175.616t-97.28-143.872-143.872-96.768-175.616-35.328q-1.024 24.576-1.024 39.936l0 28.672q0 14.336 0.512 29.184t0.512 37.376q65.536 0 123.392 24.576t100.864 67.584 68.096 100.864 25.088 123.392zM707.584 894.976q36.864 0 49.152 0.512t18.432 1.536 15.872 1.024 41.472-2.048q0-145.408-55.296-272.896t-150.528-222.72-223.232-150.528-273.408-55.296q-1.024 25.6-1.024 36.864l0 16.384q0 4.096 0.512 5.632t0.512 7.168 0.512 18.432 0.512 40.448q119.808 0 224.768 45.056t183.296 123.392 123.392 183.296 45.056 223.744z" p-id="3114"></path></svg>
				<a class="rss" href="<?php bloginfo('rss_url'); ?>" target="_blank" title="订阅《<?php bloginfo('name'); ?>》">订阅本站</a></li>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
		</ul>

		<div class="site-banner">
			<h1 class="site-name">
			<?php if(has_custom_logo()) : ?>
				<?php the_custom_logo(); ?>
			<?php else: ?>
				<a id="logo" href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>">
					<?php bloginfo('name'); ?> <span><?php bloginfo( 'description' ); ?></span>
				</a>
			<?php endif; ?>
			</h1>
			<div class="header_ad ad">广告468*60</div>
		</div>		

		<div id="menu">
			<?php if(has_nav_menu('topbar')){
				wp_nav_menu( array(
					'menu'              => '',
					'theme_location'    => 'topbar',
					'depth'             => 2,
					'container'         => '',
					'container_class'   => '',
					'fallback_cb'     	=> false,
					'menu_class'        => 'nav navbar-nav',
					'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
				)  );
			} ?>
		</div>
	</div>
</div>
<div id="nav">
	<div class="wrapper">
		<svg class="icon" style="width: 1em;height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2345"><path d="M512 74.666667c194.133333 0 352 160 352 354.133333 0 119.466667-64 236.8-168.533333 349.866667-36.266667 38.4-74.666667 72.533333-113.066667 104.533333-12.8 10.666667-25.6 21.333333-38.4 27.733333l-6.4 4.266667-8.533333 6.4c-10.666667 6.4-25.6 6.4-36.266667 0-2.133333-2.133333-4.266667-4.266667-8.533333-6.4l-12.8-8.533333c-8.533333-6.4-19.2-14.933333-29.866667-23.466667-38.4-32-76.8-66.133333-113.066667-104.533333-104.533333-110.933333-168.533333-230.4-168.533333-349.866667C160 234.666667 317.866667 74.666667 512 74.666667zM512 298.666667c-64 0-117.333333 53.333333-117.333333 117.333333S448 533.333333 512 533.333333s117.333333-53.333333 117.333333-117.333333S576 298.666667 512 298.666667z" p-id="2346"></path></svg>
		<a class="nav-home" href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
		<?php  if ( is_home() ) { ?> » 首页<?php } ?>
		<?php  if ( is_single() ) { ?> » <?php the_category(', ') ?> » <?php the_title(); ?><?php } ?>
		<?php  if ( is_page() ) { ?> » <?php the_title(); ?><?php } ?>
		<?php  if (is_category()) { ?> » <?php single_cat_title(); ?><?php } ?>
		<?php  if( is_tag() ) { ?> » <?php single_tag_title(); ?><?php } ?>
		<?php  if (is_date()) { ?> » <?php the_time('Y年m月d日'); ?><?php } ?>
	</div>
</div>
<div id="main">
	<div class="wrapper">