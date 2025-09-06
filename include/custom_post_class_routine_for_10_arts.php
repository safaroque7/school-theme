<?php
    function custom_post_type_class_routine_10_arts(){
        register_post_type('class10arts', array(
            'label'     => 'দশম শ্রেণির মানবিক বিভাগের ক্লাশ রুটিন', array(
                'name'          =>  __('class10arts'),
                'singular_name' =>  __('class10arts'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New class10arts'),
                'edit_item'     =>  __('edit class10arts'),
                'view_item'     =>  __('view class10arts'),
                'new_item'      =>  __('new class10arts'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=routine',
                'menu_position'         =>  9,
                're-write'              =>  array('slug'=>'class10arts'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_class_routine_10_arts');
?>