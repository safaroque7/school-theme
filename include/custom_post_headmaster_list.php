<?php
    function custom_post_type_headmaster_list(){
        register_post_type('headmasterlist', array(
            'label'     => 'প্রধান শিক্ষকগণের তালিকা', array(
                'name'          =>  __('headmasterlist'),
                'singular_name' =>  __('headmasterlist'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New headmasterlist'),
                'edit_item'     =>  __('edit headmasterlist'),
                'view_item'     =>  __('view headmasterlist'),
                'new_item'      =>  __('new headmasterlist'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=aboutschool',
                'menu_position'         =>  12,
                're-write'              =>  array('slug'=>'headmasterlist'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_headmaster_list');
?>