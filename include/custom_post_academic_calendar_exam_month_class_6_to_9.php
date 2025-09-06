<?php
    function custom_post_type_academic_calendar_exam_month_class_6_to_9(){
        register_post_type('exammonth', array(
            'label'     => 'ষষ্ঠ থেকে নবম শ্রেণীর পরীক্ষা জন্য নির্ধারিত মাসসমূহের নাম', array(
                'name'          =>  __('exammonth'),
                'singular_name' =>  __('exammonth'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New exammonth'),
                'edit_item'     =>  __('edit exammonth'),
                'view_item'     =>  __('view exammonth'),
                'new_item'      =>  __('new exammonth'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=academiccalender',
                'menu_position'         =>  2,
                're-write'              =>  array('slug'=>'exammonth'),
                'supports'              =>  array('title', 'custom-fields',)
        ));
    }
        add_action('init', 'custom_post_type_academic_calendar_exam_month_class_6_to_9');
?>