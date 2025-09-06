<?php
    function custom_post_type_class_7(){
        register_post_type('class7', array(
            'label'     => 'সপ্তম শ্রেণীর শিক্ষার্থীদের তালিকা', array(
                'name'          =>  __('class7'),
                'singular_name' =>  __('class7'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New class7'),
                'edit_item'     =>  __('edit class7'),
                'view_item'     =>  __('view class7'),
                'new_item'      =>  __('new class7'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  true,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=student',
                'menu_position'         =>  2,
                're-write'              =>  array('slug'=>'class7'),
                'supports'              =>  array('title', 'custom-fields', 'thumbnail')
        ));
    }
        add_action('init', 'custom_post_type_class_7');
?>