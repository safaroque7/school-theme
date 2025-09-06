<?php
    function custom_post_type_leave(){
        register_post_type('leave', array(
            'label'     => 'বাৎসরিক ছুটি', array(
                'name'          =>  __('leave'),
                'singular_name' =>  __('leave'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New leave'),
                'edit_item'     =>  __('edit leave'),
                'view_item'     =>  __('view leave'),
                'new_item'      =>  __('new leave'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=academiccalender',
                'menu_position'         =>  9,
                're-write'              =>  array('slug'=>'leave'),
                'supports'              =>  array('title', 'editor')
        ));
    }
        add_action('init', 'custom_post_type_leave');
?>