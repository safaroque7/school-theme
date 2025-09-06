<?php
    
    function custom_shortcode($atts){
        extract( shortcode_atts( array(
            'heading' => '',
            'cat' => ''
            ), $atts) );
        
            $q = new WP_Query(array(
                'post_type' => 'panel', 
                'panel_event' => $cat, 
                'order' => 'ASC'
            ));  
        
        $list = '
            <div class="fix class_6_student_list_title">
                <h2> '.$heading.' </h2>

                <div class="fix class_list">
        ';
        
        while($q->have_posts()) : $q->the_post();
            $idd = get_the_ID();
            $eventname = get_post_meta($idd, 'eventname', true); 
            $position = get_post_meta($idd, 'position', true); 
            $phone = get_post_meta($idd, 'phone', true); 
            $email = get_post_meta($idd, 'email', true); 
              $list .= '
               
                    <div class="fix student_image_and_info">
                        <div class="fix for_bottom_border">
                            <div class="fix student_imageBox mobile_screen_image_size student_imageBox_other">
                                '.get_the_post_thumbnail($idd, 'student_image_size').'
                            </div>
                            <div class="student_info panel_info">
                                <p> '.get_the_title().' </p>
                                <p> <b> অনুষ্ঠানের নাম: </b> '.$eventname.' </p>
                                <p> <b> পদবী: </b> '.$position.' </p>
                                <p> <b> ফোন: </b> '.$phone.' </p>
                                <p> <b> ই-মেইল: <br/> </b> '.$email.' </p>
                            </div>
                        </div>
                    </div>
               '; 
        endwhile; 
        $list.= '
        
            </div>
        </div>
        '; 
        wp_reset_query(); 
        return $list; 
    
    } 
    add_shortcode('RXquery', 'custom_shortcode');
?>