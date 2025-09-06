<?php
    function custom_post_type_class_routine_10_business(){
        register_post_type('class10business', array(
            'label'     => 'দশম শ্রেণির বাণিজ্য বিভাগের ক্লাশ রুটিন', array(
                'name'          =>  __('class10business'),
                'singular_name' =>  __('class10business'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New class10business'),
                'edit_item'     =>  __('edit class10business'),
                'view_item'     =>  __('view class10business'),
                'new_item'      =>  __('new class10business'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=routine',
                'menu_position'         =>  8,
                're-write'              =>  array('slug'=>'class10business'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_class_routine_10_business');
?>