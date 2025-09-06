<?php
    function custom_post_type_business_bank(){
        register_post_type('businessbank', array(
            'label'     => 'বাণিজ্যিক ব্যাংক', array(
                'name'          =>  __('businessbank'),
                'singular_name' =>  __('businessbank'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New businessbank'),
                'edit_item'     =>  __('edit businessbank'),
                'view_item'     =>  __('view businessbank'),
                'new_item'      =>  __('new businessbank'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=epayment',
                'menu_position'         =>  2,
                're-write'              =>  array('slug'=>'businessbank'),
                'supports'              =>  array('editor')
        ));
    }
        add_action('init', 'custom_post_type_business_bank');
?>