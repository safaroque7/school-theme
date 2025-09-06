<?php
    function custom_post_type_academic_calendar_class_10_text_book(){
        register_post_type('class10textbook', array(
            'label'     => 'দশম শ্রেণির পঠিত বিষয়সমূহ', array(
                'name'          =>  __('class10textbook'),
                'singular_name' =>  __('class10textbook'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New class10textbook'),
                'edit_item'     =>  __('edit class10textbook'),
                'view_item'     =>  __('view class10textbook'),
                'new_item'      =>  __('new class10textbook'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=academiccalender',
                'menu_position'         =>  8,
                're-write'              =>  array('slug'=>'class10textbook'),
                'supports'              =>  array('title', 'editor',)
        ));
    }
        add_action('init', 'custom_post_type_academic_calendar_class_10_text_book');
?>