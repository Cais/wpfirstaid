<?php
/**
 * Functions
 * Where the magic happens ...
 *
 * @package     OpusPrimus
 * @subpackage  WPFA
 * @since       0.1
 *
 * @author      Edward Caissie <edward.caissie@gmail.com>
 * @copyright   Copyright (c) 2012, Edward Caissie
 *
 * This file is part of WPFA.
 *
 * WPFA is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.
 *
 * You may NOT assume that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, write to:
 *
 *      Free Software Foundation, Inc.
 *      51 Franklin St, Fifth Floor
 *      Boston, MA  02110-1301  USA
 *
 * The license for this software can also likely be found here:
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! function_exists( 'wpfa_opus_primus_enqueue_scripts' ) ) {
    /**
     * WPFirstAid Opus Primus Enqueue Scripts
     * Use to enqueue the Child-Theme stylesheet after the Parent-Theme
     *
     * @subpackage  WPFA
     * @since       0.1
     *
     * @uses        get_stylesheet_uri
     * @uses        parent
     * @uses        wp_enqueue_style
     * @uses        wp_get_theme
     */
    function wpfa_opus_primus_enqueue_scripts() {
        /** Enqueue Theme Stylesheets */
        wp_enqueue_style( 'WPFA-Opus-Primus', get_stylesheet_directory_uri() . '/wpfa-opus-primus.css', array(), wp_get_theme()->parent()->get( 'Version' ), 'screen' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpfa_opus_primus_enqueue_scripts', 11 );


/**
 * WPFA Header
 * Add logo before Opus Primus header
 *
 * @subpackage  WPFA
 * @since       0.1
 *
 * @uses        get_stylesheet_directory_uri
 * @internal used with action hook opus_primus_before_header
 */
function wpfa_header() { ?>
    <div id="header-logo">
        <img alt="" src="<?php echo get_stylesheet_directory_uri() . '/images/WPFA-Logo.png'; ?>" />
    </div> <!-- #header-logo -->
<?php }
add_action( 'opus_primus_before_header', 'wpfa_header' );