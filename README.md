# redandblue sub-page hierarchical menu

@TODO Better name?

## Use case:
- Building a hierarchical (sidebar) menu for pages with parents / child.
- Lists child nodes under parent node in separate list.


## How to use:

- Call the function in your page.php / single.php
- Add custom post type name as an argument if you want to use the menu in a custom post type
- Add TRUE as a second parameter if you need to display parent title

## Example:
```php

<?php $sub_nav = get_subpage_menu('custom_post_type', TRUE); ?>
<?php if ($sub_nav) : ?>
  <section class="sidebar-navigation">
    <ul class="sidebar-navigation__container">
      <?php print_r($sub_nav); ?>
    </ul>
  </section>
<?php endif; ?>
```
