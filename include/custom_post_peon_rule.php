<?php
    function custom_post_type_peon_rule(){
        register_post_type('peonrule', array(
            'label'     => 'কর্মচারীদের জন্য নিয়ম-কানুন', array(
                'name'          =>  __('peonrule'),
                'singular_name' =>  __('peonrule'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New peonrule'),
                'edit_item'     =>  __('edit peonrule'),
                'view_item'     =>  __('view peonrule'),
                'new_item'      =>  __('new peonrule'),
                'not_found'     =>  __('soory we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=aboutschool',
                'menu_position'         =>  12,
                're-write'              =>  array('slug'=>'peonrule'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_peon_rule');
?>