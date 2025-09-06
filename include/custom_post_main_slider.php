<?php
    function custom_post_type_main_slider(){
        register_post_type('mainslider', array(
            'label'     =>  'স্লাইডার', array(
                'name'          =>  __('mainslider'),
                'singular_name' =>  __('mainslider'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New mainslider'),
                'edit_item'     =>  __('edit mainslider'),
                'view_item'     =>  __('view mainslider'),
                'new_item'      =>  __('new mainslider'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'menu_position'         =>  5,
                're-write'              =>  array('slug'=>'mainslider'),
                'supports'              =>  array('title', 'editor', 'custom-fields', 'thumbnail')
        ));
    }
        add_action('init', 'custom_post_type_main_slider');
?>