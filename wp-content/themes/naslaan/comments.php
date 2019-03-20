<?php
 
if ( post_password_required() ) {
	return;
}

?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h3 class="comments-title">
			<?php
				$comments_number = get_comments_number();
				if ( 1 === $comments_number ) {
					/* translators: %s: post title */
					printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'naslaan' ), get_the_title() );
				} else {
					printf(
						/* translators: 1: number of comments, 2: post title */
						_nx(
							'%1$s thought on &ldquo;%2$s&rdquo;',
							'%1$s thoughts on &ldquo;%2$s&rdquo;',
							$comments_number,
							'comments title',
							'naslaan'
						),
						number_format_i18n( $comments_number ),
						get_the_title()
					);
				}
			?>
		</h3>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'callback' => 'naslaan_front_functions::naslaan_comments_callback',
					'style'       => 'ol',
				) );
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>

	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'naslaan' ); ?></p>
	<?php endif; ?>

	<?php
	$comment_field =  '<p class="comment-form-comment"><label class="lpd_form_label" for="comment"></label><textarea id="comment" class="theme-form" name="comment" cols="45" rows="8" aria-required="true" placeholder=' . esc_html__( 'Comment', 'naslaan' ) . '></textarea></p>';
	
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	$fields =  array(

	  'author' =>
	    '<p class="comment-form-author">' .
	    '<input id="author" name="author" type="text" placeholder="' . esc_html__( 'Name', 'naslaan' ) . ( $req ? ' *' : '' ) . '" class="theme-form" value="' . esc_attr( $commenter['comment_author'] ) .
	    '" size="30"' . $aria_req . ' /></p>',
	
	  'email' =>
	    '<p class="comment-form-email">' .
	    '<input id="email" name="email" type="text" class="theme-form" placeholder="' . esc_html__( 'Email', 'naslaan' ) . ( $req ? ' *' : '' ) . '" value="' . esc_attr(  $commenter['comment_author_email'] ) .
	    '" size="30"' . $aria_req . ' /></p>',
	
	  'url' =>
	    '<p class="comment-form-url">' .
	    '<input id="url" name="url" type="text" placeholder="' . esc_html__( 'Website', 'naslaan' ) . '" class="theme-form" value="' . esc_attr( $commenter['comment_author_url'] ) .
	    '" size="30" /></p>',
	);
	
		comment_form( array(
			'fields' =>  $fields,
			'comment_field' =>  $comment_field,
			
			'class_submit' => 'submit lpd_t_btn',
			'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h3>',
		) );
	?>

</div><!-- .comments-area -->
