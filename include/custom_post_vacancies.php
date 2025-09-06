<?php
    function custom_post_type_vacancies(){
        register_post_type('Vacancies', array(
            'label'     => 'শূন্যপদের তালিকা ', array(
                'name'          =>  __('Vacancies'),
                'singular_name' =>  __('Vacancies'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New Vacancies'),
                'edit_item'     =>  __('edit Vacancies'),
                'view_item'     =>  __('view Vacancies'),
                'new_item'      =>  __('new Vacancies'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=aboutschool',
                'menu_position'         =>  9,
                're-write'              =>  array('slug'=>'Vacancies'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_vacancies');
?>