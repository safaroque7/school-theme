<?php
    function custom_post_type_class_6(){
        register_post_type('class6', array(
            'label'     => '৬ষ্ঠ শ্রেণীর শিক্ষার্থীদের তালিকা', array(
                'name'          =>  __('class6'),
                'singular_name' =>  __('class6'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New class6'),
                'edit_item'     =>  __('edit class6'),
                'view_item'     =>  __('view class6'),
                'new_item'      =>  __('new class6'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  true,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=student',
                'menu_position'         =>  1,
                're-write'              =>  array('slug'=>'class6'),
                'supports'              =>  array('title', 'custom-fields', 'thumbnail')
        ));
    }
        add_action('init', 'custom_post_type_class_6');
?>