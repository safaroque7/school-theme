<?php
    function custom_post_type_admission_notice(){
        register_post_type('admissionnotice', array(
            'label'     => 'ভর্তি বিজ্ঞপ্তি', array(
                'name'          =>  __('claadmissionnoticess10'),
                'singular_name' =>  __('admissionnotice'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New admissionnotice'),
                'edit_item'     =>  __('edit admissionnotice'),
                'view_item'     =>  __('view admissionnotice'),
                'new_item'      =>  __('new admissionnotice'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=admission',
                'menu_position'         =>  1,
                're-write'              =>  array('slug'=>'admissionnotice'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_admission_notice');
?>