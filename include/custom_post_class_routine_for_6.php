<?php
    function custom_post_type_class_routine_6(){
        register_post_type('classroutine6', array(
            'label'     => 'ষষ্ঠ শ্রেণির ক্লাশ রুটিন', array(
                'name'          =>  __('classroutine6'),
                'singular_name' =>  __('classroutine6'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New classroutine6'),
                'edit_item'     =>  __('edit classroutine6'),
                'view_item'     =>  __('view classroutine6'),
                'new_item'      =>  __('new classroutine6'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=routine',
                'menu_position'         =>  1,
                're-write'              =>  array('slug'=>'classroutine6'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_class_routine_6');
?>