<?php
    function custom_post_type_fee(){
        register_post_type('fee', array(
            'label'     => 'সকল প্রকার ফী', array(
                'name'          =>  __('fee'),
                'singular_name' =>  __('fee'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New fee'),
                'edit_item'     =>  __('edit fee'),
                'view_item'     =>  __('view fee'),
                'new_item'      =>  __('new fee'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'menu_position'         =>  29,
                're-write'              =>  array('slug'=>'fee'),
                'supports'              =>  array('title', 'editor')
        ));
    }
        add_action('init', 'custom_post_type_fee');
?>