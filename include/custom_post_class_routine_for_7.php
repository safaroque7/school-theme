<?php
    function custom_post_type_class_routine_7(){
        register_post_type('classroutine7', array(
            'label'     => 'সপ্তম শ্রেণির ক্লাশ রুটিন', array(
                'name'          =>  __('classroutine7'),
                'singular_name' =>  __('classroutine7'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New classroutine7'),
                'edit_item'     =>  __('edit classroutine7'),
                'view_item'     =>  __('view classroutine7'),
                'new_item'      =>  __('new classroutine7'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=routine',
                'menu_position'         =>  2,
                're-write'              =>  array('slug'=>'classroutine7'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_class_routine_7');
?>