<?php
    function custom_post_type_head_master(){
        register_post_type('headmaster', array(
            'label'     => 'প্রধান শিক্ষকের বাণী', array(
                'name'          =>  __('headmaster'),
                'singular_name' =>  __('headmaster'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New headmaster'),
                'edit_item'     =>  __('edit headmaster'),
                'view_item'     =>  __('view headmaster'),
                'new_item'      =>  __('new headmaster'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'menu_position'         =>  20,
                're-write'              =>  array('slug'=>'headmaster'),
                'supports'              =>  array('title', 'editor', 'thumbnail')
        ));
    }
        add_action('init', 'custom_post_type_head_master');
?>