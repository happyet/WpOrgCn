<?php get_header(); ?>
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="singlepost">
			<div class="postTitle">
				<h2><?php the_title(); ?></h2>					
				<div class="postMeta">
					<span>发表于<?php the_time('Y-m-d') ?> <?php the_time('H:i') ?></span>
					<span>阅读(<?php lmsim_theme_views(); ?>)</span>
					<span><?php comments_popup_link('评论(0)', '评论(1)', '评论(%)', '','已关闭'); ?></span>
				</div>
			</div>

			<div class="single-entry">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => '<p><strong>' . __('Pages:', 'kubrick') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
			
		</div>

		<?php comments_template(); ?>
	</div>
		<?php endwhile; else: ?>
			<p>对不起,没有找到符合的文章.<br />
			</p>
		<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>