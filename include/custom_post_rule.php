<?php
    function custom_post_type_rule(){
        register_post_type('rule', array(
            'label'     => 'নিয়ম ও প্রবিধান', array(
                'name'          =>  __('rule'),
                'singular_name' =>  __('rule'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New rule'),
                'edit_item'     =>  __('edit rule'),
                'view_item'     =>  __('view rule'),
                'new_item'      =>  __('new rule'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=aboutschool',
                'menu_position'         =>  10,
                're-write'              =>  array('slug'=>'rule'),
                'supports'              =>  array('title', 'editor', 'thumbnail')
        ));
    }
        add_action('init', 'custom_post_type_rule');
?>