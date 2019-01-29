<?php

/**
 * @package MyanmarConverter
 * @version 1.0.0
 */

!defined('WP_UNINSTALL_PLUGIN') or die ('Error, something wrong');

// clear databases stored data
$books = get_posts(array('post_type' => 'book', 'numberposts' => -1));

foreach($books as $book) {
    wp_delete_post($book->ID, true);
}
