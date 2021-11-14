<?php
/*
Template Name: archives
*/
?>
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
				<div style="display:flex">
					<div style="width:50%">
					<h2>页面存档</h2>
					<ul>
					<?php wp_list_pages(array('title_li' => '')); ?>
					</ul>
					</div>
					<div style="width:50%">
					<h2>分类存档</h2>
					<ul>
						<?php wp_list_categories(array('title_li' => '')); ?>
					</ul>
					</div>
				</div>
				<div style="display:flex">
				<div style="width:50%">
                <h2>月存档</h2>
				<ul class="blogroll">
				<?php wp_get_archives('type=monthly&show_post_count=true'); ?>
				</ul>
				</div>
				<div style="width:50%">
					<h2>Tags:</h2>
					<div><?php wp_tag_cloud('smallest=8&largest=16'); ?></div>
				</div>
				</div>
				<?php wp_link_pages(array('before' => '<p><strong>' . __('Pages:', 'kubrick') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
			
		</div>

		<?php comments_template(); ?>
	</div><!--singlepost div over-->
		<?php endwhile; else: ?>
			<p>对不起,没有找到符合的文章.<br />
			</p>
		<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>