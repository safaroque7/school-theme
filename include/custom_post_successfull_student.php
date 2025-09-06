<?php
    function custom_post_type_successfull(){
        register_post_type('successfullStudent', array(
            'label'     => 'কৃতি শিক্ষার্থী', array(
                'name'          =>  __('successfullStudent'),
                'singular_name' =>  __('successfullStudent'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New successfullStudent'),
                'edit_item'     =>  __('edit successfullStudent'),
                'view_item'     =>  __('view successfullStudent'),
                'new_item'      =>  __('new successfullStudent'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=student',
                'menu_position'         =>  6,
                're-write'              =>  array('slug'=>'successfullStudent'),
                'supports'              =>  array('title', 'custom-fields', 'thumbnail')
        ));
    }
        add_action('init', 'custom_post_type_successfull');
?>