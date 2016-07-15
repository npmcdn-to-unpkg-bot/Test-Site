<?php 
    // Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');
    
    //Loads My Custom Pages
    function load_custom_page($custom_page) {
        require_once('pages/template/base.php');
    }
    
    // Register and load the widget
	function cta_load_widget() {
	    require_once('widgets/cta_widget/cta_widget.php');
	    register_widget( 'cta_widget' );
	}
	add_action( 'widgets_init', 'cta_load_widget' );
?>