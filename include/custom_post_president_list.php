<?php
    function custom_post_type_president_list(){
        register_post_type('presidentlist', array(
            'label'     =>  'সভাপতিগণের তালিকা', array(
                'name'          =>  __('presidentlist'),
                'singular_name' =>  __('presidentlist'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New presidentlist'),
                'edit_item'     =>  __('edit presidentlist'),
                'view_item'     =>  __('view presidentlist'),
                'new_item'      =>  __('new presidentlist'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=aboutschool',
                'menu_position'         =>  4,
                're-write'              =>  array('slug'=>'presidentlist'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_president_list');
?>