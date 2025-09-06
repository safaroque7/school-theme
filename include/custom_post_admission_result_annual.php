<?php
    function custom_post_type_admission_result(){
        register_post_type('admissionresult', array(
            'label'     => 'ভর্তি পরীক্ষার ফলাফল ', array(
                'name'          =>  __('admissionresult'),
                'singular_name' =>  __('academicradmissionresultesultannul'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New admissionresult'),
                'edit_item'     =>  __('edit admissionresult'),
                'view_item'     =>  __('view admissionresult'),
                'new_item'      =>  __('new admissionresult'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=result',
                'menu_position'         =>  4,
                're-write'              =>  array('slug'=>'admissionresult'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_admission_result');
?>