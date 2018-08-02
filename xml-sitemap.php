<?php
/*
Plugin Name: XML Sitemap & Google News
Plugin URI: http://status301.net/wordpress-plugins/xml-sitemap-feed/
Description: Feed the  hungry spiders in compliance with the XML Sitemap and Google News protocols. Happy with the results? Please leave me a <strong><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=ravanhagen%40gmail%2ecom&item_name=XML%20Sitemap%20Feed">tip</a></strong> for continued development and support. Thanks :)
Text Domain: xml-sitemap-feed
Version: 5.0
Requires PHP: 5.6
Author: RavanH
Author URI: http://status301.net/
*/

/*  Copyright 2018 RavanH
    http://status301.net/
    mailto: ravanhagen@gmail.com

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License version 3 as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
*/

/* --------------------
 *  AVAILABLE HOOKS
 * --------------------
 *
 * FILTERS
 *  xmlsf_defaults        -> Filters the default array values for different option groups.
 * 	xmlsf_allowed_domain  -> Filters the response when checking the url against allowed domains.
 *                           Passes variable $url; must return true or false.
 *  xmlsf_excluded        -> Filters the response when checking the post for exclusion flags.
 *                           Passes variable $post_id; must return true or false.
 *  the_title_xmlsitemap  -> Filters the Google News publication name and title
 *                           plus the Image title and caption tags
 *  xmlsf_custom_urls     -> Filters the custom urls array
 *  xmlsf_custom_sitemaps -> Filters the custom sitemaps array
 *  xmlsf_post_language   -> Filters the post language tag used in the news sitemap.
 *                           Passes variable $post_id; must return a 2 or 3 letter
 *                           language ISO 639 code with the exception of zh-cn and zh-tw.
 *
 * ACTIONS
 *  xmlsf_news_tags_after -> Fired inside the Google News Sitemap loop at the end of the news
 *                           tags, just before each closing </news:news> is generated. Can be used to
 *                           echo custom tags or trigger another action in the background.
 *
 * --------------------
 *  AVAILABLE FUNCTIONS
 * --------------------
 *  is_sitemap() -> conditional, returns bolean, true if the request is for an xml sitemap
 *  is_news()    -> conditional, returns bolean, true if the request is for an xml news sitemap
 *
 * Feel free to request, suggest or submit more :)
 */

if ( ! defined( 'WPINC' ) ) die;

/* -------------------------------------
 *        INCLUDE & INSTANTIATE
 * ------------------------------------- */

/**
 * Functions
 */

require dirname(__FILE__) . '/includes/functions.php';

/**
 * Main class
 */

require dirname(__FILE__) . '/includes/class-xmlsitemapfeed.php';

$xmlsf = new XMLSitemapFeed( plugin_basename(__FILE__), '5.0' );

/**
 * Admin class
 */

if ( is_admin() ) {

	require dirname( __FILE__ ) . '/includes/class-xmlsitemapfeed-admin.php';

	$xmlsf_admin = new XMLSitemapFeed_Admin( plugin_basename(__FILE__) );

}
