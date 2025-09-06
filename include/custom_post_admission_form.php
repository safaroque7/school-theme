<?php
    function custom_post_type_admission_form(){
        register_post_type('admissionfrom', array(
            'label'     => 'ভর্তি ফরম', array(
                'name'          =>  __('admissionfrom'),
                'singular_name' =>  __('admissionfrom'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New admissionfrom'),
                'edit_item'     =>  __('edit admissionfrom'),
                'view_item'     =>  __('view admissionfrom'),
                'new_item'      =>  __('new admissionfrom'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=admission',
                'menu_position'         =>  3,
                're-write'              =>  array('slug'=>'admissionfrom'),
                'supports'              =>  array('title', 'thumbnail')
        ));
    }
        add_action('init', 'custom_post_type_admission_form');
?>