<?php
    function custom_post_type_panel(){
        register_post_type('panel', array(
            'label'     =>  'প্যানেল', array(
                'name'          =>  __('panel'),
                'singular_name' =>  __('panel'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New panel'),
                'edit_item'     =>  __('edit panel'),
                'view_item'     =>  __('view panel'),
                'new_item'      =>  __('new panel'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'menu_position'         =>  13,
                're-write'              =>  array('slug'=>'panel'),
                'supports'              =>  array('title', 'custom-fields', 'thumbnail')
        ));
    }
        add_action('init', 'custom_post_type_panel');



            function ppm_quickstart_custom_post_taxonomy() {
             register_taxonomy(
              'panel_event',  
              'panel', 
              array(
               'hierarchical'          => true,
               'label'                 => 'panel category', 
               'query_var'             => true,
               'show_admin_column'     => true,
               'rewrite'               => array(
                'slug'              => 'panel-category', 
                'with_front'        => true 
                )
               )
             );
            }
            add_action( 'init', 'ppm_quickstart_custom_post_taxonomy');
?>