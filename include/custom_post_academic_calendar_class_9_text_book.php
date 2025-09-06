<?php
    function custom_post_type_academic_calendar_class_9_text_book(){
        register_post_type('class9textbook', array(
            'label'     => 'নবম শ্রেণির পঠিত বিষয়সমূহ', array(
                'name'          =>  __('class9textbook'),
                'singular_name' =>  __('class9textbook'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New class9textbook'),
                'edit_item'     =>  __('edit class9textbook'),
                'view_item'     =>  __('view class9textbook'),
                'new_item'      =>  __('new class9textbook'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=academiccalender',
                'menu_position'         =>  7,
                're-write'              =>  array('slug'=>'class9textbook'),
                'supports'              =>  array('title', 'editor',)
        ));
    }
        add_action('init', 'custom_post_type_academic_calendar_class_9_text_book');
?>