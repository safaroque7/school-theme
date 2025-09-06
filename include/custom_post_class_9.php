<?php
    function custom_post_type_class_9(){
        register_post_type('class9', array(
            'label'     => 'নবম শ্রেণীর শিক্ষার্থীদের তালিকা', array(
                'name'          =>  __('class9'),
                'singular_name' =>  __('class9'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New class9'),
                'edit_item'     =>  __('edit class9'),
                'view_item'     =>  __('view class9'),
                'new_item'      =>  __('new class9'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  true,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=student',
                'menu_position'         =>  2,
                're-write'              =>  array('slug'=>'class9'),
                'supports'              =>  array('title', 'custom-fields', 'thumbnail')
        ));
    }
        add_action('init', 'custom_post_type_class_9');
?>