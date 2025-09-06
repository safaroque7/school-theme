<?php
    function custom_post_type_important_link(){
        register_post_type('importantlink', array(
            'label'     =>  'গুরুত্বপূর্ণ লিংক',
                'public'                =>  true,
                'menu_position'         =>  14
        ));
    }
        add_action('init', 'custom_post_type_important_link');
?>