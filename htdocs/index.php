<?php
date_default_timezone_set('America/Los_Angeles');
/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require dirname(__FILE__).'/cms/wp-blog-header.php';
