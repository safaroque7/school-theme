<?php
    function custom_post_type_routine(){
        register_post_type('routine', array(
            'label'     =>  'রুটিন',
                'public'                =>  true,
                'menu_position'         =>  16
        ));
    }
        add_action('init', 'custom_post_type_routine');
?>