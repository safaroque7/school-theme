<?php
    function custom_post_type_text_link(){
        register_post_type('textlink', array(
            'label'     => 'ওয়েবসাইটের টেক্সট লিংক', array(
                'name'          =>  __('textlink'),
                'singular_name' =>  __('textlink'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New textlink'),
                'edit_item'     =>  __('edit textlink'),
                'view_item'     =>  __('view textlink'),
                'new_item'      =>  __('new textlink'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=importantlink',
                'menu_position'         =>  1,
                're-write'              =>  array('slug'=>'textlink'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_text_link');
?>