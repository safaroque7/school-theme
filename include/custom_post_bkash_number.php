<?php
    function custom_post_type_bkash_number(){
        register_post_type('bkash', array(
            'label'     => 'মোবিকাশ / মাইক্যাশ/ বিকাশ', array(
                'name'          =>  __('bkash'),
                'singular_name' =>  __('bkash'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New bkash'),
                'edit_item'     =>  __('edit bkash'),
                'view_item'     =>  __('view bkash'),
                'new_item'      =>  __('new bkash'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=epayment',
                'menu_position'         =>  1,
                're-write'              =>  array('slug'=>'bkash'),
                'supports'              =>  array('title')
        ));
    }
        add_action('init', 'custom_post_type_bkash_number');
?>