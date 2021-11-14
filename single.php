<?php get_header(); ?>
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" class="singlepost">
			<div class="postBar">
				<div class="postCat">
					<p>
						<svg class="icon" style="width: 1em;height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1157"><path d="M921.6 450.133333c-6.4-8.533333-14.933333-12.8-25.6-12.8h-10.666667V341.333333c0-40.533333-34.133333-74.666667-74.666666-74.666666H514.133333c-4.266667 0-6.4-2.133333-8.533333-4.266667l-38.4-66.133333c-12.8-21.333333-38.4-36.266667-64-36.266667H170.666667c-40.533333 0-74.666667 34.133333-74.666667 74.666667v597.333333c0 6.4 2.133333 12.8 6.4 19.2 6.4 8.533333 14.933333 12.8 25.6 12.8h640c12.8 0 25.6-8.533333 29.866667-21.333333l128-362.666667c4.266667-10.666667 2.133333-21.333333-4.266667-29.866667zM170.666667 224h232.533333c4.266667 0 6.4 2.133333 8.533333 4.266667l38.4 66.133333c12.8 21.333333 38.4 36.266667 64 36.266667H810.666667c6.4 0 10.666667 4.266667 10.666666 10.666666v96H256c-12.8 0-25.6 8.533333-29.866667 21.333334l-66.133333 185.6V234.666667c0-6.4 4.266667-10.666667 10.666667-10.666667z m573.866666 576H172.8l104.533333-298.666667h571.733334l-104.533334 298.666667z" p-id="1158"></path></svg>
						<?php the_category(', ') ?>
						<?php edit_post_link('编辑',''); ?>
					</p>
				</div>
				<div class="postNav">
					<span class="up"><?php previous_post_link('%link', '上一篇'); ?></span> 
					<span class="down"><?php next_post_link('%link', '下一篇'); ?></span> 
					<a href="<?php echo get_option('home'); ?>">返回列表</a>
				</div>
			</div>

			<div class="postTitle">
				<h2><?php the_title(); ?></h2>					
				<div class="postMeta">
					<span><?php the_author_link() ?>
					<span>发表于<?php the_time('Y-m-d') ?> <?php the_time('H:i') ?></span>
					<span>阅读(<?php lmsim_theme_views(); ?>)</span>
					<span><?php comments_popup_link('评论(0)', '评论(1)', '评论(%)', '','已关闭'); ?></span>
				</div>
			</div>

			<div class="single-entry">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => '<p><strong>' . __('Pages:', 'kubrick') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>

			<div class="postFooter">
				<svg class="icon" style="width: 1em;height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2356"><path d="M512 74.666667c241.066667 0 437.333333 196.266667 437.333333 437.333333S753.066667 949.333333 512 949.333333 74.666667 753.066667 74.666667 512 270.933333 74.666667 512 74.666667z m0 341.333333c-17.066667 0-32 14.933333-32 32v300.8c2.133333 17.066667 14.933333 29.866667 32 29.866667s32-14.933333 32-32V445.866667c-2.133333-17.066667-14.933333-29.866667-32-29.866667z m0-160c-23.466667 0-42.666667 19.2-42.666667 42.666667s19.2 42.666667 42.666667 42.666666 42.666667-19.2 42.666667-42.666666-19.2-42.666667-42.666667-42.666667z" p-id="2357"></path></svg>
				<p>本文标题：<?php the_title(); ?></p>
				<p>本文链接：<input value="<?php the_permalink() ?>" class="text-input" type="text" onclick="this.select()"></p>
				<p>版权声明：非著名，本站文章皆为原创，转载请著名出处，未经允许不得商用。</p>
			</div>
			
			<div class="postBar">
				<div class="tag"><?php the_tags(' 标签：', '&nbsp; ', ''); ?> </div>
				<div class="postNav">
					<span class="up"><?php previous_post_link('%link', '上一篇'); ?></span> <span class="down"><?php next_post_link('%link', '下一篇'); ?></span> <a href="<?php echo get_option('home'); ?>/">返回列表</a>
				</div>
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