<?php
    function custom_post_type_life_time_donation_member(){
        register_post_type('donation', array(
            'label'     =>  'আজীবন দাতা সদস্য', array(
                'name'          =>  __('donation'),
                'singular_name' =>  __('donation'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New donation'),
                'edit_item'     =>  __('edit donation'),
                'view_item'     =>  __('view donation'),
                'new_item'      =>  __('new donation'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=aboutschool',
                'menu_position'         =>  3,
                're-write'              =>  array('slug'=>'donation'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_life_time_donation_member');
?>