<?php

/**
 *
 * @link              https://scottwyden.com
 * @since             1.0.0
 * @package           Scottwyden
 *
 * @wordpress-plugin
 * Plugin Name:       Simple Mercury Postlight AMP
 * Plugin URI:        https://scottwyden.com
 * Description:       This is a custom site plugin for ScottWyden.com
 * Version:           1.0.0
 * Author:            Scott Wyden Kivowitz
 * Author URI:        https://scottwyden.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       scottwyden
 */


// Add Mercury Postlight AMP Script to Header
function swk_mercury_postlight()
{
?>
<link rel="amphtml" href="http://mercury.postlight.com/amp?url=<?php echo get_permalink( $post->ID ); ?>">
<?php }
add_action('wp_head', 'swk_mercury_postlight');