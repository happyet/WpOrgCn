<?php
if ( post_password_required() ) {
	return;
}

$twenty_twenty_one_comment_count = get_comments_number();
?>

<div id="comments" class="comments-area <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">

	<?php
	if ( have_comments() ) :
		;
		?>
		<h2 class="comments-title">
			<?php if ( '1' === $twenty_twenty_one_comment_count ) : ?>
				<?php esc_html_e( '1 comment', 'twentytwentyone' ); ?>
			<?php else : ?>
				<?php
				printf(
					/* translators: %s: Comment count number. */
					esc_html( _nx( '%s comment', '%s comments', $twenty_twenty_one_comment_count, 'Comments title', 'twentytwentyone' ) ),
					esc_html( number_format_i18n( $twenty_twenty_one_comment_count ) )
				);
				?>
			<?php endif; ?>
		</h2>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'avatar_size' => 34,
					'style'       => 'ol',
					'short_ping'  => true,
				)
			);
			?>
		</ol>

		<?php the_comments_pagination(); ?>

		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'twentytwentyone' ); ?></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php
		comment_form(
			array(
				'logged_in_as'       => null,
				'title_reply'        => esc_html__( 'Leave a comment', 'twentytwentyone' ),
				'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
				'title_reply_after'  => '</h2>',
			)
		);
	?>

</div>
<?php if(!is_page()){ ?>
<div class="postBar postBar-bt">
	<div class="postNav">
		<span class="up"><?php previous_post_link('%link', '上一篇'); ?></span> 
		<span class="down"><?php next_post_link('%link', '下一篇'); ?></span> 
		<a href="<?php echo get_option('home'); ?>">返回列表</a>
	</div>
</div>
<?php } ?>