<?php
    function custom_post_type_class_routine_9_bsns(){
        register_post_type('class9business', array(
            'label'     => 'নবম শ্রেণির বাণিজ্য বিভাগের ক্লাশ রুটিন', array(
                'name'          =>  __('class9business'),
                'singular_name' =>  __('class9business'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New class9business'),
                'edit_item'     =>  __('edit class9business'),
                'view_item'     =>  __('view class9business'),
                'new_item'      =>  __('new class9business'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=routine',
                'menu_position'         =>  5,
                're-write'              =>  array('slug'=>'class9business'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_class_routine_9_bsns');
?>