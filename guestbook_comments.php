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
		<input class="form-control" id="author" name="author" type="text" placeholder="'. __( 'Name', 'casaItalia' ) .'" value="" ' . $aria_req . ' /></p>',	
		);
	 
	comment_form( array (
		'fields' => apply_filters( 'comment_form_default_fields', $fields ), 
		'comment_notes_before' => '', 
		'comment_notes_after' => '', 
		'title_reply' => '',
		'title_reply_before' => '<p>',
		'title_reply_after' => '</p>',
		'label_submit' => __( 'Absenden', 'casaItalia' ),
		'class_submit' => 'btn btn-default hvr-buzz',
		'name_submit' => 'commentSubmit',	 
		'comment_field' => '<p><textarea id="comment" class="form-control" name="comment" placeholder="'. __( 'Erzähl wie es dir bei uns gefallen hat *', 'casaItalia' ) .'" rows="3" aria-required="true"></textarea></p>',
	));
 ?>
</div>



<?php  $colors = array('rgb(0,135,193)', 'rgb(133,203,239)', 'rgb(163,184,211)', 'rgb(114,139,159)'); ?>

<div class="row guestbook_comments">
<?php $i = 0; ?>

<?php if ( have_comments() ) : while ( have_comments() ) : the_comment(); ?>

<?php $rand = array_rand($colors, 1); ?>
<?php $bgColor = $colors[$rand]; ?>


<div class="col-md-4">
	<div style="background: <?php echo $bgColor; ?>;" class="guestbook_comments_single">
        <p class="guestbook-comment-meta"><?php __('Gepostet von', 'casaItalia') ?> <strong><?php echo get_comment_author_link(); ?></strong>
		 am <?php echo get_comment_date("d.m.Y"); ?></p>
		<hr>
         <?php comment_text() ?>
    
          <?php if ($comment->comment_approved == '0') : ?>
            <strong>Achtung: Dein Kommentar muss erst noch freigegeben werden.</strong><br />
         <?php endif; ?>
	</div>
</div>	
	<?php 
$i++;	
if($i % 3 == 0){
	echo '</div><div class="row guestbook_comments">';
} 
endwhile; ?>
</div>
<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


 



 