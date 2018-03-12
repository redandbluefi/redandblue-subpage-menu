<?php
/**
 * Plugin Name: redandblue subpage menu
 * Plugin URI: https://github.com/redandbluefi/redandblue-subpage-menu
 * Description: Building a simple hierarchical (sidebar) menu for pages with parents / child.
 * Version: 0.1.0
 * Author: Red & Blue Oy, Eemeli Makkonen
 * Author URI: https://www.redandblue.fi
 * Requires at least: 4.4.2
 * Tested up to: 4.9
 *
 * Text Domain: redandblue-subpage-menu
 * Domain Path: /languages
*/

function get_subpage_menu($post_type) {
  if (is_page() || get_post_type() == $post_type) {
    global $post;

      $ancestors = get_ancestors($post->ID, get_post_type());

      if (count($ancestors) < 1) {
        return null;
      } else {
        $second_level_ancestor = end($ancestors);

        $opts = [
          'echo' => false,
          'child_of' => $second_level_ancestor,
          'title_li' => NULL,
          'post_type' => get_post_type()
        ];
        return wp_list_pages($opts);
      }

    return null;
  }
}
?>
