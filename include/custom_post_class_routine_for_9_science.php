<?php
    function custom_post_type_class_routine_9_science(){
        register_post_type('class9science', array(
            'label'     => 'নবম শ্রেণির বিজ্ঞান বিভাগের ক্লাশ রুটিন', array(
                'name'          =>  __('class9science'),
                'singular_name' =>  __('class9science'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New class9science'),
                'edit_item'     =>  __('edit class9science'),
                'view_item'     =>  __('view class9science'),
                'new_item'      =>  __('new class9science'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=routine',
                'menu_position'         =>  4,
                're-write'              =>  array('slug'=>'class9science'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_class_routine_9_science');
?>