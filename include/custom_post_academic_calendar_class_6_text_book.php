<?php
    function custom_post_type_academic_calendar_class_6_text_book(){
        register_post_type('class6textbook', array(
            'label'     => 'ষষ্ঠ শ্রেণির পঠিত বিষয়সমূহ', array(
                'name'          =>  __('class6textbook'),
                'singular_name' =>  __('class6textbook'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New class6textbook'),
                'edit_item'     =>  __('edit class6textbook'),
                'view_item'     =>  __('view class6textbook'),
                'new_item'      =>  __('new class6textbook'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=academiccalender',
                'menu_position'         =>  4,
                're-write'              =>  array('slug'=>'class6textbook'),
                'supports'              =>  array('title', 'editor',)
        ));
    }
        add_action('init', 'custom_post_type_academic_calendar_class_6_text_book');
?>