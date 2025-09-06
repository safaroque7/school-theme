<?php
    function custom_post_type_e_payment(){
        register_post_type('epayment', array(
            'label'     =>  'মোবাইল ব্যাংকিং',
                'public'                =>  true,
                'menu_position'         =>  19
        ));
    }
        add_action('init', 'custom_post_type_e_payment');
?>