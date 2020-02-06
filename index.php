<?php

/**
 * Plugin Name: To-Do App
 * Plugin URI:
 * Description: Describe what your plugin is for here.
 * Version: 1.0
 * Author: DearHive
 * Author URI:
 */
        add_action('init', 'my_custom_post_type');
        function my_custom_post_type(){
            register_post_type('todos', $args= array(
                'label' => 'My Todo List',
                'public' => true,
                'menu_icon' => 'dashicons-editor-ul',
                'show_ui' => true,
                'show_in_nav_menus' => true,
                'name' => 'Todo List',
                'description' => 'This is our custom post type',
            ));

        }
      ?>



























































