<?php
    function custom_post_type_admission(){
        register_post_type('admission', array(
            'label'     =>  'ভর্তি',
                'public'                =>  true,
                'menu_position'         =>  11,
        ));
    }
        add_action('init', 'custom_post_type_admission');
?>