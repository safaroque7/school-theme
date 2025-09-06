<?php
    function soigoria_school_menu(){
        register_nav_menus(array(
            'top_menu'      =>  'top menu',
            'side_menu'     =>  'side menu'
            ));
    }
    add_action('init', 'soigoria_school_menu');
?>