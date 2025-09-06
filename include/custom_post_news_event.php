<?php
    function custom_post_type_news_event(){
        register_post_type('newsevent', array(
            'label'     =>  'নিউজ ও ইভেন্ট', array(
                'name'          =>  __('newsevent'),
                'singular_name' =>  __('newsevent'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New newsevent'),
                'edit_item'     =>  __('edit newsevent'),
                'view_item'     =>  __('view newsevent'),
                'new_item'      =>  __('new newsevent'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'menu_position'         =>  7,
                're-write'              =>  array('slug'=>'newsevent'),
                'supports'              =>  array('title', 'editor', 'thumbnail')
        ));
    }
        add_action('init', 'custom_post_type_news_event');
?>