<?php
class Weather_Widget extends WP_Widget 
{
	public function __construct() 
	{
		parent::__construct(
			'weather_widget',
			'Weather Widget',
			array(
				'description' => 'Zeigt das Wetter für Peschiera an.'
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

	
			<?php echo '<p>'. _e( 'Zeigt das Wetter für Peschiera an.', 'casaItalia' ).'</p>'; ?>
	
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
		?>
		<!-- Shows the weather -->						

		<div id="cont_2e4afa91882ee9ea33ff663a49a777b2" class="mobile-weather">
		<script type="text/javascript" async src="https://www.daswetter.com/wid_loader/2e4afa91882ee9ea33ff663a49a777b2"></script></div>
	<?php
		echo $after_widget;
	}	
}

add_action('widgets_init', function()
{
     return register_widget('Weather_Widget');
});

