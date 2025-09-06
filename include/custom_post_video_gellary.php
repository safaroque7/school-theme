<?php
    function custom_post_type_videogellary(){
        register_post_type('videogellary', array(
            'label'     => 'ভিডিও গ্যালারি', array(
                'name'          =>  __('videogellary'),
                'singular_name' =>  __('videogellary'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New videogellary'),
                'edit_item'     =>  __('edit videogellary'),
                'view_item'     =>  __('view videogellary'),
                'new_item'      =>  __('new videogellary'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'menu_position'         =>  28,
                're-write'              =>  array('slug'=>'videogellary'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_videogellary');
?>