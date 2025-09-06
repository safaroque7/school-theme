<?php
    function custom_post_type_image_link(){
        register_post_type('imagelink', array(
            'label'     => 'লোগোসহ ওয়েবসাইটের লিংক', array(
                'name'          =>  __('imagelink'),
                'singular_name' =>  __('imagelink'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New imagelink'),
                'edit_item'     =>  __('edit imagelink'),
                'view_item'     =>  __('view imagelink'),
                'new_item'      =>  __('new imagelink'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=importantlink',
                'menu_position'         =>  2,
                're-write'              =>  array('slug'=>'textlink'),
                'supports'              =>  array('custom-fields', 'thumbnail')
        ));
    }
        add_action('init', 'custom_post_type_image_link');
?>