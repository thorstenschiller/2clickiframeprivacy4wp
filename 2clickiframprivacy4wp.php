<?php
/**
* Plugin Name: 2Click Iframe Privacy
* Plugin URI: https://www.thorstenschiller.com/
* Description: 2Click Iframe Privacy4WP.
* Version: 0.1
* Author: Thorsten Schiller
* Author URI: http://thorstenschiller.com/
**/
?>
<?php
add_action('wp_enqueue_scripts','2click_init');

function 2click_init() {
    wp_enqueue_script( '2click_init', plugins_url( 'dist/2ClickIframePrivacy.min.js', __FILE__ ));
}
?>
<style type="text/css">
div.privacy-msg p {
    width:200px;
    border: 1px solid black;
    padding: 5px;
    text-align:center;
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

    -webkit-box-shadow: 0 10px 6px -6px #777;
       -moz-box-shadow: 0 10px 6px -6px #777;
            box-shadow: 0 10px 6px -6px #777;
}
</style>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', _2ClickIframePrivacy.init(''));
</script>
<?php
function torque_hello_world_shortcode( $atts ) {
   $a = shortcode_atts( array(
      'name' => 'world'
   ), $atts );
   return 'Hello ' . $a['name'] . !';
}
?>
