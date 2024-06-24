<?php

/*
Plugin Name:  My REST endpoiint
Plugin URI:   alemadlei.tech
Description:  A custom wordpress pluging for evaluation purposes
Version:      1.0
Author:       Alejandro Madrigal Leiva
Author URI:   https://www.alemadlei.tech
*/


/**
 * Grab latest 10 posts.
 *
 * @param array $data Options for the function.
 * @return string|null Post title for the latest,  * or null if none.
 */
function _my_rest_get_latest_10_posts( $data ) {
  // Evaluation note: the most recent 10 posts on the site.
  $query = new WP_Query([
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 10,
    'post_status' => ['publish'], // Evaluation note: The API should respond with only published posts.
    'post_type' => 'post'
  ]);
  if (empty($query->posts)) {
    return null;
  }

  // Evaluation note: JSON response.
  return $query->posts;
}

// rest_api_ini hook.
// Evaluation note: Please create a custom plugin which exposes a REST endpoint which returns JSON containing
// the most recent 10 posts on the site.
add_action('rest_api_init', function () {
  register_rest_route( 'my-rest', '/posts', array(
    'callback' => '_my_rest_get_latest_10_posts',
    'methods' => 'GET',
    'permission_callback' => '__return_true', // Evaluation note: The API endpoint does not need any special authentication.
  ) );
} );