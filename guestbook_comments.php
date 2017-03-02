<div class="comment-form">
<?php 
	function wpb_move_comment_field_to_bottom( $fields ) {
		$comment_field = $fields['comment'];
		unset( $fields['comment'] );
		$fields['comment'] = $comment_field;
		return $fields;
	}
	add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );
	 
	 

	$fields = array(
		'author' => '<p class="form-group">
		<input class="form-control" id="author" name="author" type="text" placeholder="'. __( 'Name *', 'casaItalia' ) .'" value="" ' . $aria_req . ' /></p>',	
		);
	 
	comment_form( array (
		'fields' => apply_filters( 'comment_form_default_fields', $fields ), 
		'comment_notes_before' => '', 
		'comment_notes_after' => '<p>Dein Kommentar wird vor der Freischaltung moderiert.</p>', 
		'title_reply' => 'Vielen Dank und liebe Grüße von uns :)',
		'label_submit' => __( 'Absenden', 'casaItalia' ),
		'class_submit' => 'btn btn-default',	 
		'comment_field' => '<p><textarea id="comment" class="form-control" name="comment" placeholder="'. __( 'Erzähl wie es dir bei uns gefallen hat *', 'casaItalia' ) .'" rows="6" aria-required="true"></textarea></p>',
	));
 ?>
</div>



<div class="comment-list">
 <?php if ( have_comments() ) : ?>
 
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	 <div class="navigation">
	 <div class="nav-previous"> <?php previous_comments_link( 'Ältere Beiträge' ); ?> </div>
	 <div class="nav-next"> <?php next_comments_link( 'Neuere Beiträge' ); ?> </div>
	 </div>
	<?php endif; ?>
	 
	<ul>
		<?php wp_list_comments('type=all&callback=casaItalia_comments'); ?>
	</ul>
	 
	<?php if ( ! comments_open() ) : ?>
	 <p>Die Kommentare für diesen Beitrag sind geschlossen.</p>
	<?php endif; ?>
 
 <?php endif; ?>
</div>