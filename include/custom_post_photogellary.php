<?php
    function custom_post_type_photogellary(){
        register_post_type('photogellary', array(
            'label'     => 'ফটো গ্যালারি', array(
                'name'          =>  __('photogellary'),
                'singular_name' =>  __('photogellary'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New photogellary'),
                'edit_item'     =>  __('edit photogellary'),
                'view_item'     =>  __('view photogellary'),
                'new_item'      =>  __('new photogellary'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'menu_position'         =>  27,
                're-write'              =>  array('slug'=>'photogellary'),
                'supports'              =>  array('title', 'editor', 'thumbnail')
        ));
    }
        add_action('init', 'custom_post_type_photogellary');
?>