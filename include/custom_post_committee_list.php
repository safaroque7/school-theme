<?php
    function custom_post_type_committee_list(){
        register_post_type('committeelist', array(
            'label'     => 'কমিটির তালিকা', array(
                'name'          =>  __('committeelist'),
                'singular_name' =>  __('committeelist'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New committeelist'),
                'edit_item'     =>  __('edit committeelist'),
                'view_item'     =>  __('view committeelist'),
                'new_item'      =>  __('new committeelist'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=aboutschool',
                'menu_position'         =>  6,
                're-write'              =>  array('slug'=>'committeelist'),
                'supports'              =>  array('title', 'custom-field', 'thumbnail')
        ));
    }
        add_action('init', 'custom_post_type_committee_list');
?>