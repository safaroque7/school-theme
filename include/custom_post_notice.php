<?php
    function custom_post_type_notice(){
        register_post_type('notice', array(
            'label'     =>  'নোটিশ', array(
                'name'          =>  __('notice'),
                'singular_name' =>  __('notice'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New notice'),
                'edit_item'     =>  __('edit notice'),
                'view_item'     =>  __('view notice'),
                'new_item'      =>  __('new notice'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'menu_position'         =>  6,
                're-write'              =>  array('slug'=>'notice'),
                'supports'              =>  array('title', 'editor')
        ));
    }
        add_action('init', 'custom_post_type_notice');
?>