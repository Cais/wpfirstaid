<?php
/**
 * Header Template
 * A generic header template to show when no other more specific post-format
 * header template is available.
 *
 * @package     OpusPrimus
 * @subpackage  WPFirstAid
 * @since       1.0
 *
 * @author      Opus Primus <in.opus.primus@gmail.com>
 * @copyright   Copyright (c) 2012-2013, Opus Primus
 *
 * This file is part of Opus Primus.
 *
 * Opus Primus is free software; you can redistribute it and/or modify it under
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

/** Create OpusPrimusHeader class object */
$opus_headers = new OpusPrimusHeader(); ?>

	<header>

		<?php do_action( 'opus_header_top' ); ?>

		<div class="masthead">

			<div id="header-image">

				<?php $opus_headers->show_custom_header_image_block(); ?>

			</div>
			<!-- #header-image -->

			<div id="header-text">

				<?php
				$opus_headers->site_title_block();
				$opus_headers->site_description_block(); ?>

			</div>
			<!-- #header-text -->

		</div>
		<!-- .masthead -->

		<div id="header-widgets">
			<?php get_sidebar( 'header' ); ?>
		</div>
		<!-- #header-widgets -->

		<?php
		/** Add empty hook before primary navigation */
		do_action( 'opus_nav_before' ); ?>

		<nav>
			<?php
			$opus_navigation = new OpusPrimusNavigation();
			$opus_navigation->primary_menu(); ?>
		</nav>
		<!-- End navigation section -->

		<?php
		/** Add empty hook after primary navigation */
		do_action( 'opus_nav_after' );

		do_action( 'opus_header_bottom' ); ?>

	</header><!-- End header section -->

<?php
$opus_breadcrumbs = new OpusPrimusBreadcrumbs();
$opus_breadcrumbs->show_the_trail();