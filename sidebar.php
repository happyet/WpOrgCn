<div id="sidebar">
	<div class="widget">
		<?php get_search_form(); ?>
	</div>
	<div class="widget">
		<h3><?php echo (is_home())?'随机日志':'最新日志'; ?></h3>
		<ul class="show-post">
			<?php
				if(is_home()){
					$posts = get_posts('numberposts=7&orderby=rand');
				}else{
					$posts = get_posts('numberposts=7&orderby=date');
				}
				foreach($posts as $post) {
					setup_postdata($post);
					echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
				}
				wp_reset_postdata();
			?>
		</ul>
	</div>
	<div class="widget">
		<h3>最新评论</h3>
		<?php
			$comments_args = array(
				'type' 				=> 'comment',
				'status'			=> 'approve',
				'post_status'		=> 'publish',
				'author__not_in' 	=> 1,
				'number'  			=> 5
			);
			$recent_comments = get_comments($comments_args);
			if($recent_comments){
				$recent_comments_cache = '<ul class="rc-comment">';
				foreach($recent_comments as $rc_comment):
					$recent_comments_cache .= '
					<li>
						<a title="发表在《'.get_the_title($rc_comment->comment_post_ID).'》" href="'.get_comment_link($rc_comment->comment_ID).'">'.get_avatar($rc_comment->comment_author_email, 35).'
						<div>
							<strong>' . $rc_comment->comment_author . '</strong><span>'. $rc_comment->comment_date . '</span>
							<p>'. $rc_comment->comment_content .'</p>
						</div>
						</a>
					</li>';
				endforeach; 
				$recent_comments_cache .= '</ul>';
			}
			echo $recent_comments_cache;
		?>
	</div>
	<div class="widget">
		<h3>标签云</h3>
		<ul class="tags"><?php wp_tag_cloud('smallest=10&largest=10'); ?></ul>
	</div>
</div>