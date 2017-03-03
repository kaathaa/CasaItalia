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





   <?php foreach ($comments as $comment) : ?>
   
      <div class=" guestbook-single-comment" id="comment-<?php comment_ID() ?>">
       
        <p class="guestbook-comment-meta"><?php __('Gepostet von', 'casaItalia') ?> <strong><?php echo get_comment_author_link(); ?></strong>
		 am <?php echo get_comment_date("d.m.Y"); ?></p>
		<hr>
         <?php comment_text() ?>
    
          <?php if ($comment->comment_approved == '0') : ?>
            <strong>Achtung: Dein Kommentar muss erst noch freigegeben werden.</strong><br />
         <?php endif; ?>
       
      </div>
	  

   <?php endforeach; /* end for each comment */ ?> 




