<?php
    function custom_post_type_class_routine_8(){
        register_post_type('classroutine8', array(
            'label'     => 'অষ্টম শ্রেণির ক্লাশ রুটিন', array(
                'name'          =>  __('classroutine8'),
                'singular_name' =>  __('classroutine8'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New classroutine8'),
                'edit_item'     =>  __('edit classroutine8'),
                'view_item'     =>  __('view classroutine8'),
                'new_item'      =>  __('new classroutine8'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=routine',
                'menu_position'         =>  3,
                're-write'              =>  array('slug'=>'classroutine8'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_class_routine_8');
?>