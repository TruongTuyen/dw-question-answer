<?php
/**
 * The template for displaying single answers
 *
 * @package DW Question & Answer
 * @since DW Question & Answer 1.4.0
 */
?>
<div class="dwqa-answer-item">
	<div class="dwqa-answer-vote">
		<span class="dwqa-vote-count">0</span>
		<a class="dwqa-vote dwqa-vote-up" href="#"><?php _e( 'Vote Up', 'dwqa' ); ?></a>
		<a class="dwqa-vote dwqa-vote-down" href="#"><?php _e( 'Vote Down', 'dwqa' ); ?></a>
	</div>
	<div class="dwqa-answer-meta">
		<?php $user_id = get_post_field( 'post_author', get_the_ID() ) ? get_post_field( 'post_author', get_the_ID() ) : false ?>
		<?php printf( '<span><a href="%s">%s</a> %s</span>', dwqa_get_author_link( $user_id ), dwqa_get_author(), human_time_diff( get_post_time( 'U' ) ) ) ?>
		<span class="dwqa-answer-actions"><?php dwqa_answer_button_action(); ?></span>
	</div>
	<div class="dwqa-answer-content"><?php the_content(); ?></div>
	<?php comments_template(); ?>
</div>
