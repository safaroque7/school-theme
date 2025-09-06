<?php
    function custom_post_type_academic_annaul_result(){
        register_post_type('academicresultannul', array(
            'label'     => 'একাডেমিক (বার্ষিকী)', array(
                'name'          =>  __('academicresultannul'),
                'singular_name' =>  __('academicresultannul'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New academicresultannul'),
                'edit_item'     =>  __('edit academicresultannul'),
                'view_item'     =>  __('view academicresultannul'),
                'new_item'      =>  __('new academicresultannul'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=result',
                'menu_position'         =>  2,
                're-write'              =>  array('slug'=>'academicresultannul'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_academic_annaul_result');
?>