<?php
    function custom_post_type_student_rule(){
        register_post_type('studentrule', array(
            'label'     => 'শিক্ষার্থীদের জন্য নিয়ম-কানুন', array(
                'name'          =>  __('studentrule'),
                'singular_name' =>  __('studentrule'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New studentrule'),
                'edit_item'     =>  __('edit studentrule'),
                'view_item'     =>  __('view studentrule'),
                'new_item'      =>  __('new studentrule'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=aboutschool',
                'menu_position'         =>  11,
                're-write'              =>  array('slug'=>'studentrule'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_student_rule');
?>