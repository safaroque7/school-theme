<?php
    function custom_post_type_class_routine_10_science(){
        register_post_type('class10science', array(
            'label'     => 'দশম শ্রেণির বিজ্ঞান বিভাগের ক্লাশ রুটিন', array(
                'name'          =>  __('class10science'),
                'singular_name' =>  __('class10science'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New class10science'),
                'edit_item'     =>  __('edit class10science'),
                'view_item'     =>  __('view class10science'),
                'new_item'      =>  __('new class10science'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=routine',
                'menu_position'         =>  8,
                're-write'              =>  array('slug'=>'class10science'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_class_routine_10_science');
?>