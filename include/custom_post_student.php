<?php
    function custom_post_type_student(){
        register_post_type('student', array(
            'label'     =>  'শিক্ষার্থী',
                'public'                =>  true,
                'menu_position'         =>  10
        ));
    }
        add_action('init', 'custom_post_type_student');
?>