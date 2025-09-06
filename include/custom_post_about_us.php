<?php
    function custom_post_type_amader_somporke(){
        register_post_type('aboutschool', array(
            'label'     =>  'আমাদের সম্পর্কে',
                'public'                =>  true,
                'menu_position'         =>  8,
        ));
    }
        add_action('init', 'custom_post_type_amader_somporke');
?>