<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset');?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="refresh" content="600"/>
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head();?>
    
    <style>
        .result > h2,
        .r_menu{
            background:<?php echo ot_get_option( 'backgrouncolor_id' ); ?>;
        }
        
        .page-numbers:hover,
        .page-numbers.current,
        .view > input:hover,
        .form input[type="reset"]:hover, 
        .class_routin_download > a:hover, 
        .download_link ul li a:hover, 
        .download_form a:hover, 
        .class_routin_download > input:hover, 
        .wpcf7-form-control.wpcf7-submit:hover, 
        .admission_from_download > input[type="button"]:hover, 
        .contact_from > input[type="button"]:hover, 
        .contact_from > input[type="reset"]:hover,
        button:hover, 
        .menu-top-menu-container .current-menu-item a, 
        .school_menu ul li a:hover, 
        .single_left2 ul li a:hover{
            background: <?php echo ot_get_option('hover_color_id');?> none repeat scroll 0 0;
            color: #fff;
        }
        
        .school_menu ul li {
            border-left: 1px solid <?php echo ot_get_option('menu_border_left_id');?>;
            border-right: 1px solid <?php echo ot_get_option('menu_border_right_id');?>;
            float: left;
        }        
        
        .school_menu ul li ul li {
            border-top: 1px solid <?php echo ot_get_option('menu_border_left_id');?>;
            border-bottom: 1px solid <?php echo ot_get_option('menu_border_right_id');?>;
            float: none;
        }       
        
        
        .form input[type="reset"], 
        button, 
        #searchform input, 
        .wpcf7-form-control.wpcf7-submit.submit_font, 
        .form input, 
        .comments_box textarea, 
        .wpcf7-form-control.wpcf7-submit, 
        .wpcf7-form-control.wpcf7-text, 
        .contact_from > input[type="reset"], 
        .contact_from textarea {
            border: 1px solid <?php echo ot_get_option( 'backgrouncolor_id' ); ?>;
        }
        
        .attendance h2, 
        .class_6_student_list_title > h2, 
        .amader_kotha > h2, 
        .footer_part > h2, 
        .comments_box > h2 {
            border-bottom: 1px solid <?php echo ot_get_option( 'backgrouncolor_id' ); ?>;
            color: <?php echo ot_get_option( 'backgrouncolor_id' ); ?>;
        } 
        
        
        .page-numbers.current,
        .page-numbers:hover,
        .school_menu ul li:hover ul,
        .notish_bord1 > h2,
        .fix.title_bg,
        .attendance_per_day > h4,
        .view > input,
        #today {
            background: <?php echo ot_get_option( 'backgrouncolor_id' ); ?> none repeat scroll 0 0;
            color: #fff;
        }
        .archive_section, .routine_title,
        .amader_kotha.academic_calender > h4,
        .fix.amader_kotha > h5 {
          background: <?php echo ot_get_option( 'backgrouncolor_id' ); ?> none repeat scroll 0 0;
          color: #fff;
        }  
        
        .academic_calender {
            border-right: 10px solid <?php echo ot_get_option( 'backgrouncolor_id' ); ?>;
            border-bottom: 10px solid <?php echo ot_get_option( 'backgrouncolor_id' ); ?>;
            border-left: 10px solid <?php echo ot_get_option( 'backgrouncolor_id' ); ?>;
        }    
        
        .class_routine_part {
            border-right: 1px solid <?php echo ot_get_option( 'backgrouncolor_id' ); ?>;
        }  
        
        .class_routine {
          border-left: 1px solid <?php echo ot_get_option( 'backgrouncolor_id' ); ?>;
          border-right: 1px solid <?php echo ot_get_option( 'backgrouncolor_id' ); ?>;
          border-top: 1px solid <?php echo ot_get_option( 'backgrouncolor_id' ); ?>;
        }     
        
        .class_routine.display_none_for_1000_750px:nth-child(9) {
            border-bottom: 1px solid <?php echo ot_get_option( 'backgrouncolor_id' ); ?>;
        }
        
        .vacancy_name_post_date, .for_bottom_border, .for_bottom_border_class_9 {
            border-bottom: 1px dashed <?php echo ot_get_option( 'backgrouncolor_id' ); ?>;
        }
        
        .class_routin_download > a {
          background: #e6e7e8 none repeat scroll 0 0;
          border: 1px solid <?php echo ot_get_option( 'backgrouncolor_id' ); ?>;
        }  
        
        .fix.archive_section input:hover {
          background: <?php echo ot_get_option( 'backgrouncolor_id' ); ?> none repeat scroll 0 0;
        }
        .attendance {
            border-bottom: 1px dashed <?php echo ot_get_option( 'backgrouncolor_id' ); ?>;
        }
        
        .student_image_and_info {
          border-right: 1px dashed <?php echo ot_get_option( 'backgrouncolor_id' ); ?>;
        }    
        
        .amader_kotha.result > h4 a::before {
          content: "*";
          color: <?php echo ot_get_option('hover_color_id');?>;
        }
        
        .amader_kotha.result > h4 a, 
        .amader_kotha.result > h4 {
          color: <?php echo ot_get_option('backgrouncolor_id');?>;
        }    
        
        .download_form, 
        .download_link li:nth-child(2n), 
        .admission_from_download > input[type="button"] {
          border: 1px solid <?php echo ot_get_option('backgrouncolor_id');?>;
        }        
        
        .download_form a, .download_link li:nth-child(2n) a {
          color: <?php echo ot_get_option('backgrouncolor_id');?>;
          padding: 5px 10px;
        }   
        
        .image_box_and_caption {
            border: 5px solid <?php echo ot_get_option('backgrouncolor_id');?>;
        }        
        
        .featured_title_body > p > a,
        .right_bire.fix > ul > li,        
        .single_content a, .notish a{
            color: <?php echo ot_get_option( 'backgrouncolor_id' ); ?>;
        }
        
        
     </style>    
    
    
    
    
    
</head>

<body style='background:<?php echo ot_get_option( 'body_backgrouncolor_id' ); ?>'>
    <div class="fix main">
        <div class="fix header fix">
            <?php get_template_part('part/main_logo');?>
            <?php get_template_part('part/name_part');?>
            
            <div class="fix search_and_soical_share">
                <?php get_template_part('part/search_part');?>
                
                <div class="clear"></div>            
                
                <div class="fix social_share">
                    <ul>
                        <li class="facebook"><a href="#"> <i class="fa fa-facebook" target="_blank"></i> </a></li>
                        <li class="twitter"><a href="" target="_blank"> <i class="fa fa-twitter"></i> </a></li>
                        <li class="google-plus"><a href="" target="_blank"> <i class="fa fa-google-plus"></i> </a></li>
                    </ul>
                </div>
            </div>
            
        </div>
        <div class="fix r_menu">
            <p> <i class="fa fa-bars"></i> </p>
        </div>
        <div class="school_menu" style='background:<?php echo ot_get_option( 'backgrouncolor_id' ); ?>'>
            <ul>
                <?php wp_nav_menu(array(
                    'theme_location'   =>  'top_menu'
                ))?>
            </ul>
        </div>
        
       <div class="clear"></div>