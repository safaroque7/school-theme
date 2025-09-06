<?php
    function custom_post_type_class_10(){
        register_post_type('class10', array(
            'label'     => 'দশম শ্রেণীর শিক্ষার্থীদের তালিকা', array(
                'name'          =>  __('class10'),
                'singular_name' =>  __('class10'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New class10'),
                'edit_item'     =>  __('edit class10'),
                'view_item'     =>  __('view class10'),
                'new_item'      =>  __('new class10'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  true,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=student',
                'menu_position'         =>  2,
                're-write'              =>  array('slug'=>'class10'),
                'supports'              =>  array('title', 'custom-fields', 'thumbnail')
        ));
    }
        add_action('init', 'custom_post_type_class_10');
?>