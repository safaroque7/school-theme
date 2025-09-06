<?php
    function custom_post_type_academic_calendar_class_8_text_book(){
        register_post_type('class8textbook', array(
            'label'     => 'অষ্টম শ্রেণির পঠিত বিষয়সমূহ', array(
                'name'          =>  __('class8textbook'),
                'singular_name' =>  __('class8textbook'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New class8textbook'),
                'edit_item'     =>  __('edit class8textbook'),
                'view_item'     =>  __('view class8textbook'),
                'new_item'      =>  __('new class8textbook'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=academiccalender',
                'menu_position'         =>  6,
                're-write'              =>  array('slug'=>'class8textbook'),
                'supports'              =>  array('title', 'editor',)
        ));
    }
        add_action('init', 'custom_post_type_academic_calendar_class_8_text_book');
?>