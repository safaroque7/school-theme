<?php
    function custom_post_type_dynamic_result(){
        register_post_type('dynamicResult', array(
            'label'     => 'ডাইনামিক রেজাল্ট', array(
                'name'          =>  __('dynamicResult'),
                'singular_name' =>  __('dynamicResult'),
                'add_new'       =>  __('add new'),
                'add_new_item'  =>  __('Add New dynamicResult'),
                'edit_item'     =>  __('edit dynamicResult'),
                'view_item'     =>  __('view dynamicResult'),
                'new_item'      =>  __('new dynamicResult'),
                'not_found'     =>  __('sorry we couldn\'t find anything you are looking for')
            ),
                'public'                =>  true,
                'publicity_queryable'   =>  true,
                'exclude_from_search'   =>  false,
                'has_archive'           =>  true,
                'show_in_menu'          =>  'edit.php?post_type=result',
                'menu_position'         =>  5,
                're-write'              =>  array('slug'=>'dynamicResult'),
                'supports'              =>  array('title', 'custom-fields')
        ));
    }
        add_action('init', 'custom_post_type_dynamic_result');
?>