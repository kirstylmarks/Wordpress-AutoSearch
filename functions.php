<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    //I always tend to deregister the core and load in the latest version, or dependant on whether a plugin needs an earlier jquey dependancy
		wp_deregister_script('jquery');
		wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);
    //This is a typewriter style plugin
    wp_enqueue_script( 'tipy', get_template_directory_uri() . '/assets/js/tipytypy.js', 'jquery', true );
    //Code for show and hide the content based on the query
    wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/assets/js/main.js', 'tipy', '', true);

}

//The Fetch Function for the Wordpress query, the function ran is currrently called Fetch... lets be realistic and name it something more unique in the future..... but for now it works....

add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() {
?>
<script type="text/javascript">
function fetch(){

	let value = $('#keyword').val();
	$('.input-highlight').html(value);
    jQuery.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        type: 'post',
        data: { action: 'data_fetch', keyword: jQuery('#keyword').val() },
        success: function(data) {
            jQuery('#datafetch').html( data );
        }
    });

}
</script>

<?php
}

;?>
