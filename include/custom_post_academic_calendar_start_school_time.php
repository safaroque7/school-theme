<?php
    function custom_post_type_academic_calendar_start_school_time(){
        register_post_type('startschooltime', array(
            'label'     => 'বিদ্যালয় খোলা ও বন্ধের সময়', array(
                'name'          =>  __('startschooltime'),
                'singular_name' =>  __('startschooltime'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New startschooltime'),
                'edit_item'     =>  __('edit startschooltime'),
                'view_item'     =>  __('view startschooltime'),
                'new_item'      =>  __('new startschooltime'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=academiccalender',
                'menu_position'         =>  1,
                're-write'              =>  array('slug'=>'startschooltime'),
                'supports'              =>  array('title', 'custom-fields',)
        ));
    }
        add_action('init', 'custom_post_type_academic_calendar_start_school_time');
?>