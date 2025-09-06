<?php
    function custom_post_type_result(){
        register_post_type('result', array(
            'label'     =>  'পরীক্ষার ফল',
                'public'                =>  true,
                'menu_position'         =>  12,
        ));
    }
        add_action('init', 'custom_post_type_result');
?>