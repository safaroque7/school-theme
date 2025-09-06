<?php
    function custom_post_type_present(){
        register_post_type('present', array(
            'label'     => 'উপস্থিতি', array(
                'name'          =>  __('present'),
                'singular_name' =>  __('present'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New present'),
                'edit_item'     =>  __('edit present'),
                'view_item'     =>  __('view present'),
                'new_item'      =>  __('new present'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'menu_position'         =>  17,
                're-write'              =>  array('slug'=>'present'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_present');
?>