<?php
    function custom_post_type_information(){
        register_post_type('teacherinformation', array(
            'label'     => 'সম্মানিত শিক্ষকমণ্ডলীর তালিকা', array(
                'name'          =>  __('information'),
                'singular_name' =>  __('information'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New information'),
                'edit_item'     =>  __('edit information'),
                'view_item'     =>  __('view information'),
                'new_item'      =>  __('new information'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=aboutschool',
                'menu_position'         =>  7,
                're-write'              =>  array('slug'=>'information'),
                'supports'              =>  array('title', 'editor', 'custom-fields', 'thumbnail')
        ));
    }
        add_action('init', 'custom_post_type_information');
?>