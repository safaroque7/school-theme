<?php
    function custom_post_type_feauted(){
        register_post_type('featured', array(
            'label'     => 'সুবিধা', array(
                'name'          =>  __('featured'),
                'singular_name' =>  __('rufeaturedle'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New featured'),
                'edit_item'     =>  __('edit featured'),
                'view_item'     =>  __('view featured'),
                'new_item'      =>  __('new featured'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=aboutschool',
                'menu_position'         =>  11,
                're-write'              =>  array('slug'=>'featured'),
                'supports'              =>  array('title', 'editor', 'thumbnail')
        ));
    }
        add_action('init', 'custom_post_type_feauted');
?>