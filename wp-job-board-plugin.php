<?php
/**
 * Plugin Name: WP Job Board Plugin
 * Description: A simple job board plugin to add and manage job posts.
 * Version: 1.0
 * Author: Lakshya Sharma
 */

defined('ABSPATH') or die('No script kiddies please!');

// Include functionality
require_once plugin_dir_path(__FILE__) . 'includes/job-functions.php';

// Register shortcode
function wpjb_display_job_form() {
    ob_start();
    include plugin_dir_path(__FILE__) . 'templates/job-form.php';
    return ob_get_clean();
}
add_shortcode('job_form', 'wpjb_display_job_form');
