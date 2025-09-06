<?php
    function custom_post_type_founder(){
        register_post_type('founder', array(
            'label'     => 'প্রতিষ্ঠাতার বাণী', array(
                'name'          =>  __('founder'),
                'singular_name' =>  __('founder'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New founder'),
                'edit_item'     =>  __('edit founder'),
                'view_item'     =>  __('view founder'),
                'new_item'      =>  __('new founder'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'menu_position'         =>  15,
                're-write'              =>  array('slug'=>'founder'),
                'supports'              =>  array('title', 'editor', 'thumbnail')
        ));
    }
        add_action('init', 'custom_post_type_founder');
?>