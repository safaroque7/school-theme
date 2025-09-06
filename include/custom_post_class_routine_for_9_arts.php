<?php
    function custom_post_type_class_routine_9_arts(){
        register_post_type('class9arts', array(
            'label'     => 'নবম শ্রেণির মানবিক বিভাগের ক্লাশ রুটিন', array(
                'name'          =>  __('class9arts'),
                'singular_name' =>  __('class9arts'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New class9arts'),
                'edit_item'     =>  __('edit class9arts'),
                'view_item'     =>  __('view class9arts'),
                'new_item'      =>  __('new class9arts'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=routine',
                'menu_position'         =>  7,
                're-write'              =>  array('slug'=>'class9arts'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_class_routine_9_arts');
?>