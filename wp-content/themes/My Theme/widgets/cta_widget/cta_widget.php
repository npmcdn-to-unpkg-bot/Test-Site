<?php
// Creating the widget
	class cta_widget extends WP_Widget {

	function __construct() {
	    parent::__construct(
	    // Base ID of your widget
	    'cta_widget',

	    // Widget name will appear in UI
	    __('Call To Action', 'cta_widget_domain'),
	        
	    // Widget description
	    array( 'description' => __( 'Call To Action Widget', 'cta_widget_domain' ), )
	    );
	}

	// Creating widget front-end
	// This is where the action happens
	public function widget( $args, $instance ) {
	    $title = apply_filters( 'widget_title', $instance['title'] );
	    // before and after widget arguments are defined by themes
	    echo $args['before_widget'];
	    if ( ! empty( $title ) )
    	    echo $args['before_title'] . $title . $args['after_title'];
	 
	    // This is where you run the code and display the output
	    require_once('cta_widget_code.php');
	    echo $args['after_widget'];
	}
	         
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
	$instance = array();
	$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
	return $instance;
	}
} // Class cta_widget ends here
	 
	