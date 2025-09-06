<?php
    function custom_post_type_other_form(){
        register_post_type('otherform', array(
            'label'     => 'অন্যান্য ফরম', array(
                'name'          =>  __('otherform'),
                'singular_name' =>  __('otherform'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New otherform'),
                'edit_item'     =>  __('edit otherform'),
                'view_item'     =>  __('view otherform'),
                'new_item'      =>  __('new otherform'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=admission',
                'menu_position'         =>  4,
                're-write'              =>  array('slug'=>'otherform'),
                'supports'              =>  array('title', 'custom-fields', 'thumbnail')
        ));
    }
        add_action('init', 'custom_post_type_other_form');
?>