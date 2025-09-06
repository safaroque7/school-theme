<?php
    function custom_post_type_class_8(){
        register_post_type('class8', array(
            'label'     => 'অষ্টম শ্রেণীর শিক্ষার্থীদের তালিকা', array(
                'name'          =>  __('class8'),
                'singular_name' =>  __('class8'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New class8'),
                'edit_item'     =>  __('edit class8'),
                'view_item'     =>  __('view class8'),
                'new_item'      =>  __('new class8'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  true,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=student',
                'menu_position'         =>  2,
                're-write'              =>  array('slug'=>'class8'),
                'supports'              =>  array('title', 'custom-fields', 'thumbnail')
        ));
    }
        add_action('init', 'custom_post_type_class_8');
?>