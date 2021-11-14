	</div>
</div>
<div id="footer">
	<div class="wrapper">
		<?php if ( is_home() ) { ?>
			<div id="flink">
				<?php wp_list_bookmarks('title_li=&category_before=&category_after='); ?>
		</div>
		<?php } ?>
		<div id="footer-menu">
			<?php if(has_nav_menu('footer-menu')){
				wp_nav_menu( array(
					'menu'              => '',
					'theme_location'    => 'footer-menu',
					'depth'             => 1,
					'container'         => '',
					'container_class'   => ''
				)  );
			} ?>
		</div>
		<p><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a> &copy; <?php the_date('Y'); ?> <a href="http://www.miibeian.gov.cn/" target="_blank">XICP备xxxxxxxx号</a>
		<br />Powered by <a href="http://wordpress.org" target="_blank">WordPress</a> Theme by <a href="https://lms.im" target="_blank" title="自娱自乐,不亦乐乎!">不亦乐乎</a>/p>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>