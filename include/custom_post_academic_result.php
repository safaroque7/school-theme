<?php
    function custom_post_type_academic_result(){
        register_post_type('academicresult', array(
            'label'     => 'একাডেমিক (অর্ধবার্ষিকী)', array(
                'name'          =>  __('academic_result'),
                'singular_name' =>  __('academic_result'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New academic_result'),
                'edit_item'     =>  __('edit academic_result'),
                'view_item'     =>  __('view academic_result'),
                'new_item'      =>  __('new academic_result'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=result',
                'menu_position'         =>  1,
                're-write'              =>  array('slug'=>'academic_result'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_academic_result');
?>