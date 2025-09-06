<?php
    function custom_post_type_school_history(){
        register_post_type('schoolhistory', array(
            'label'     => 'বিদ্যালয়ের ইতিহাস', array(
                'name'          =>  __('schoolhistory'),
                'singular_name' =>  __('schoolhistory'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New schoolhistory'),
                'edit_item'     =>  __('edit schoolhistory'),
                'view_item'     =>  __('view schoolhistory'),
                'new_item'      =>  __('new schoolhistory'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=aboutschool',
                'menu_position'         =>  1,
                're-write'              =>  array('slug'=>'schoolhistory'),
                'supports'              =>  array('title', 'editor', 'custom-fields', 'thumbnail')
        ));
    }
        add_action('init', 'custom_post_type_school_history');
?>