<?php
    function custom_post_type_prospectus(){
        register_post_type('prospectus', array(
            'label'     => 'প্রসপেক্টাস', array(
                'name'          =>  __('prospectus'),
                'singular_name' =>  __('prospectus'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New prospectus'),
                'edit_item'     =>  __('edit prospectus'),
                'view_item'     =>  __('view prospectus'),
                'new_item'      =>  __('new prospectus'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=admission',
                'menu_position'         =>  2,
                're-write'              =>  array('slug'=>'prospectus'),
                'supports'              =>  array('title', 'editor')
        ));
    }
        add_action('init', 'custom_post_type_prospectus');
?>