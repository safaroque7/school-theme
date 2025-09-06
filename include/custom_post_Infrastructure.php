<?php
    function custom_post_type_infrastructure(){
        register_post_type('infrastructure', array(
            'label'     =>  'অবকাঠামো', array(
                'name'          =>  __('infrastructure'),
                'singular_name' =>  __('infrastructure'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New infrastructure'),
                'edit_item'     =>  __('edit infrastructure'),
                'view_item'     =>  __('view infrastructure'),
                'new_item'      =>  __('new infrastructure'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=aboutschool',
                'menu_position'         =>  2,
                're-write'              =>  array('slug'=>'infrastructure'),
                'supports'              =>  array('editor', 'thumbnail')
        ));
    }
        add_action('init', 'custom_post_type_infrastructure');
?>