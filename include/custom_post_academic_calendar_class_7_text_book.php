<?php
    function custom_post_type_academic_calendar_class_7_text_book(){
        register_post_type('class7textbook', array(
            'label'     => 'সপ্তম শ্রেণির পঠিত বিষয়সমূহ', array(
                'name'          =>  __('class7textbook'),
                'singular_name' =>  __('class7textbook'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New class7textbook'),
                'edit_item'     =>  __('edit class7textbook'),
                'view_item'     =>  __('view class7textbook'),
                'new_item'      =>  __('new class7textbook'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=academiccalender',
                'menu_position'         =>  5,
                're-write'              =>  array('slug'=>'class7textbook'),
                'supports'              =>  array('title', 'editor',)
        ));
    }
        add_action('init', 'custom_post_type_academic_calendar_class_7_text_book');
?>