<?php
    function custom_post_type_academic_calendar_exam_month_class_10(){
        register_post_type('exammonth10', array(
            'label'     => 'দশম শ্রেণীর পরীক্ষা জন্য নির্ধারিত মাসসমূহের নাম', array(
                'name'          =>  __('exammonth10'),
                'singular_name' =>  __('exammonth10'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New exammonth10'),
                'edit_item'     =>  __('edit exammonth10'),
                'view_item'     =>  __('view exammonth10'),
                'new_item'      =>  __('new exammonth10'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=academiccalender',
                'menu_position'         =>  3,
                're-write'              =>  array('slug'=>'exammonth10'),
                'supports'              =>  array('title', 'custom-fields',)
        ));
    }
        add_action('init', 'custom_post_type_academic_calendar_exam_month_class_10');
?>