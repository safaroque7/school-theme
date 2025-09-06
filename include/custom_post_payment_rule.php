<?php
    function custom_post_type_payment_rule(){
        register_post_type('paymentrule', array(
            'label'     => 'নিয়মাবলি', array(
                'name'          =>  __('paymentrule'),
                'singular_name' =>  __('paymentrule'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New paymentrule'),
                'edit_item'     =>  __('edit paymentrule'),
                'view_item'     =>  __('view paymentrule'),
                'new_item'      =>  __('new paymentrule'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=epayment',
                'menu_position'         =>  3,
                're-write'              =>  array('slug'=>'paymentrule'),
                'supports'              =>  array('title')
        ));
    }
        add_action('init', 'custom_post_type_payment_rule');
?>