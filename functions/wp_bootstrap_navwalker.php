<?php

/**
 * Class Name: wp_bootstrap_navwalker
 * GitHub URI: https://github.com/twittem/wp-bootstrap-navwalker
 * Description: A custom WordPress nav walker class to implement the Bootstrap 3 navigation style in a custom theme using the WordPress built in menu manager.
 * Version: 2.0.4
 * Author: Edward McIntyre - @twittem
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

class wp_bootstrap_navwalker extends Walker_Nav_Menu
{

	/**
	 * @see Walker::start_lvl()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int $depth Depth of page. Used for padding.
	 */
	public function start_lvl(&$output, $depth = 0, $args = array())
	{
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul role=\"menu\" class=\" dropdown-menu\">\n";
	}

	/**
	 * @see Walker::start_el()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item Menu item data object.
	 * @param int $depth Depth of menu item. Used for padding.
	 * @param int $current_page Menu item ID.
	 * @param object $args
	 */
	public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
	{
		$indent = ($depth) ? str_repeat("\t", $depth) : '';

		/**
		 * Dividers, Headers or Disabled
		 * =============================
		 * Determine whether the item is a Divider, Header, Disabled or regular
		 * menu item. To prevent errors we use the strcasecmp() function to so a
		 * comparison that is not case sensitive. The strcasecmp() function returns
		 * a 0 if the strings are equal.
		 */
		if (strcasecmp($item->attr_title, 'divider') == 0 && $depth === 1) {
			$output .= $indent . '<li role="presentation" class="divider">';
		} else if (strcasecmp($item->title, 'divider') == 0 && $depth === 1) {
			$output .= $indent . '<li role="presentation" class="divider">';
		} else if (strcasecmp($item->attr_title, 'dropdown-header') == 0 && $depth === 1) {
			$output .= $indent . '<li role="presentation" class="dropdown-header">' . esc_attr($item->title);
		} else if (strcasecmp($item->attr_title, 'disabled') == 0) {
			$output .= $indent . '<li role="presentation" class="disabled"><a href="#">' . esc_attr($item->title) . '</a>';
		} else {

			$class_names = $value = '';

			$classes = empty($item->classes) ? array() : (array) $item->classes;
			$classes[] = 'menu-item-' . $item->ID;

			$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));

			if ($args->has_children)
				$class_names .= ' dropdown';

			if (in_array('current-menu-item', $classes))
				$class_names .= ' active';

			$class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

			$id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
			$id = $id ? ' id="' . esc_attr($id) . '"' : '';

			$output .= $indent . '<li' . $id . $value . $class_names . '>';

			$atts = array();
			$atts['title']  = ! empty($item->title)	? $item->title	: '';
			$atts['target'] = ! empty($item->target)	? $item->target	: '';
			$atts['rel']    = ! empty($item->xfn)		? $item->xfn	: '';

			// If item has_children add atts to a.
			if ($args->has_children && $depth === 0) {
				$atts['href']   		= $item->url;
				$atts['data-toggle']	= 'dropdown';
				$atts['class']			= 'dropdown-toggle';
				$atts['aria-haspopup']	= 'true';
			} else {
				$atts['href'] = ! empty($item->url) ? $item->url : '';
			}

			$atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);

			$attributes = '';
			foreach ($atts as $attr => $value) {
				if (! empty($value)) {
					$value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
					$attributes .= ' ' . $attr . '="' . $value . '"';
				}
			}

			$item_output = $args->before;

			/*
			 * Glyphicons
			 * ===========
			 * Since the the menu item is NOT a Divider or Header we check the see
			 * if there is a value in the attr_title property. If the attr_title
			 * property is NOT null we apply it as the class name for the glyphicon.
			 */
			if (! empty($item->attr_title))
				$item_output .= '<a' . $attributes . '><span class="glyphicon ' . esc_attr($item->attr_title) . '"></span>&nbsp;';
			else
				$item_output .= '<a' . $attributes . '>';

			$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
			$item_output .= ($args->has_children && 0 === $depth) ? ' <span class="caret"><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M7.3554 1.10505C7.30891 1.05819 7.25361 1.02099 7.19269 0.995607C7.13176 0.970222 7.0664 0.957153 7.0004 0.957153C6.93439 0.957153 6.86904 0.970222 6.80811 0.995607C6.74718 1.02099 6.69188 1.05819 6.6454 1.10505L4.3554 3.39505C4.30892 3.44191 4.25361 3.47911 4.19268 3.50449C4.13176 3.52988 4.0664 3.54295 4.0004 3.54295C3.93439 3.54295 3.86904 3.52988 3.80811 3.50449C3.74718 3.47911 3.69188 3.44191 3.6454 3.39505L1.3554 1.10505C1.30891 1.05819 1.25361 1.02099 1.19268 0.995607C1.13176 0.970222 1.0664 0.957153 1.0004 0.957153C0.93439 0.957153 0.869038 0.970222 0.808108 0.995607C0.747178 1.02099 0.691878 1.05819 0.645396 1.10505C0.552271 1.19873 0.5 1.32546 0.5 1.45755C0.5 1.58964 0.552271 1.71637 0.645396 1.81005L2.9404 4.10505C3.22165 4.38595 3.6029 4.54373 4.0004 4.54373C4.3979 4.54373 4.77915 4.38595 5.0604 4.10505L7.3554 1.81005C7.44852 1.71637 7.50079 1.58964 7.50079 1.45755C7.50079 1.32546 7.44852 1.19873 7.3554 1.10505Z" fill="white"></path>
</svg></span></a>' : '</a>';
			$item_output .= $args->after;

			$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
		}
	}

	/**
	 * Traverse elements to create list from elements.
	 *
	 * Display one element if the element doesn't have any children otherwise,
	 * display the element and its children. Will only traverse up to the max
	 * depth and no ignore elements under that depth.
	 *
	 * This method shouldn't be called directly, use the walk() method instead.
	 *
	 * @see Walker::start_el()
	 * @since 2.5.0
	 *
	 * @param object $element Data object
	 * @param array $children_elements List of elements to continue traversing.
	 * @param int $max_depth Max depth to traverse.
	 * @param int $depth Depth of current element.
	 * @param array $args
	 * @param string $output Passed by reference. Used to append additional content.
	 * @return null Null on failure with no changes to parameters.
	 */
	public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output)
	{
		if (! $element)
			return;

		$id_field = $this->db_fields['id'];

		// Display this element.
		if (is_object($args[0]))
			$args[0]->has_children = ! empty($children_elements[$element->$id_field]);

		parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
	}

	/**
	 * Menu Fallback
	 * =============
	 * If this function is assigned to the wp_nav_menu's fallback_cb variable
	 * and a manu has not been assigned to the theme location in the WordPress
	 * menu manager the function with display nothing to a non-logged in user,
	 * and will add a link to the WordPress menu manager if logged in as an admin.
	 *
	 * @param array $args passed from the wp_nav_menu function.
	 *
	 */
	public static function fallback($args)
	{
		if (current_user_can('manage_options')) {

			extract($args);

			$fb_output = null;

			if ($container) {
				$fb_output = '<' . $container;

				if ($container_id)
					$fb_output .= ' id="' . $container_id . '"';

				if ($container_class)
					$fb_output .= ' class="' . $container_class . '"';

				$fb_output .= '>';
			}

			$fb_output .= '<ul';

			if ($menu_id)
				$fb_output .= ' id="' . $menu_id . '"';

			if ($menu_class)
				$fb_output .= ' class="' . $menu_class . '"';

			$fb_output .= '>';
			$fb_output .= '<li><a href="' . admin_url('nav-menus.php') . '">Add a menu</a></li>';
			$fb_output .= '</ul>';

			if ($container)
				$fb_output .= '</' . $container . '>';

			echo $fb_output;
		}
	}
}
