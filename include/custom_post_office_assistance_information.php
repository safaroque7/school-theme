<?php
    function custom_post_type_office_assistance_information(){
        register_post_type('officeassistance', array(
            'label'     => 'কর্মচারীদের তালিকা', array(
                'name'          =>  __('officeassistance'),
                'singular_name' =>  __('officeassistance'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New officeassistance'),
                'edit_item'     =>  __('edit officeassistance'),
                'view_item'     =>  __('view officeassistance'),
                'new_item'      =>  __('new officeassistance'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=aboutschool',
                'menu_position'         =>  8,
                're-write'              =>  array('slug'=>'officeassistance'),
                'supports'              =>  array('title', 'custom-fields', 'thumbnail')
        ));
    }
        add_action('init', 'custom_post_type_office_assistance_information');
?>