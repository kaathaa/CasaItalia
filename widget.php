<?php
class Latest_Comment_Widget extends WP_Widget 
{
	public function __construct() 
	{
		parent::__construct(
			'latest_comment_widget',
			'Latest Comment Widget',
			array(
				'description' => 'Zeigt den letzten Kommentar in einer Box an.'
			)
	    );
	}
	
	
	public function form($instance) 
	{
		$defaults = array(
			'page' => '',
	    );
	    $instance = wp_parse_args((array)$instance, $defaults);

		$page = $instance['page'];
	    ?>

		<p>
			<label for="<?php echo $this->get_field_name( 'page' ); ?>"><?php _e( 'Wähle eine Seite aus der Liste unten aus. Diese Seite wird durch das "Latest Comments" Widget verlinkt. <br />', 'casaItalia' ); ?></label><br />
			<?php wp_dropdown_pages( array( 'name' => $this->get_field_name( 'page' ), 
											'show_option_none' => __( 'Keine', 'casaItalia' ), 
											'selected' => $instance['page'] ) ); ?>
		</p>
		<?php
	}
	
	
	
	public function update($new_instance, $old_instance) 
	{
		$instance = array();
		$instance['page'] = (int)$new_instance['page'];

		return $instance;
	}
	
	
	public function widget($args, $instance) 
	{
		extract($args);
		$page = $instance['page'];


		echo $before_widget;
		
		if(!empty($title))
		{
			echo $before_title . $title . $after_title;
		}
		
			// Get the latest comment						
		    $args = array(
		            'number' => '1',
		            'post_id' => $post->ID,
		    );
		    $comments = get_comments($args);
		    foreach($comments as $comment) :
		        echo '<p class="front-page-comment-text">'.$comment->comment_content.'</p>';
		    	echo '<p class="front-page-comment-meta">gepostet von '.$comment->comment_author;
		    	echo ' am '.$comment->comment_date.'</p>';
		    endforeach;
		
			?><a class="btn btn-default" href="<?php echo get_page_link( $instance['page'] ) ?>">weiterlesen</a><?php

			echo $after_widget;
	}
	
}

add_action('widgets_init', function()
{
     return register_widget('Latest_Comment_Widget');
});

