<?php
    function custom_post_type_content_publication(){
        register_post_type('contentp', array(
            'label'     => 'কন্টেন্ট ও প্রকাশনা', array(
                'name'          =>  __('contentp'),
                'singular_name' =>  __('contentp'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New contentp'),
                'edit_item'     =>  __('edit contentp'),
                'view_item'     =>  __('view contentp'),
                'new_item'      =>  __('new contentp'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'menu_position'         =>  18,
				'capability_type'		=>	'post',
                're-write'              =>  array('slug'=>'contentp'),
                'supports'              =>  array('title', 'editor', 'custom-fields', 'thumbnail')
        ));
    }
        add_action('init', 'custom_post_type_content_publication');
?>