<?php
    function custom_post_type_teacher_rule(){
        register_post_type('teacherrule', array(
            'label'     => 'শিক্ষকদের জন্য নিয়ম-কানুন', array(
                'name'          =>  __('teacherrule'),
                'singular_name' =>  __('teacherrule'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New teacherrule'),
                'edit_item'     =>  __('edit teacherrule'),
                'view_item'     =>  __('view teacherrule'),
                'new_item'      =>  __('new teacherrule'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=aboutschool',
                'menu_position'         =>  10,
                're-write'              =>  array('slug'=>'teacherrule'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_teacher_rule');
?>