<?php
/*
    Template Name: প্রচ্ছদ
*/
get_header();?>

    <div class="maincontent fix">
        <div class="left_bire fix">
            <?php get_template_part('part/main_slider');?>

            <div class="content fix">
                <div class="left_content fix">
                    <div class="single_left2">
                        <?php get_template_part('part/founder');?>
                        <?php get_template_part('part/left_menu');?>                    
                        
                        <?php echo do_shortcode('[contact-form-7 id="672" title="প্রধান শিক্ষককে কিছু জানাতে চাইলে..."]');?>
                        
                </div>
                
                <div class="middle_content fix">
                    
                    <?php get_template_part('part/school_story');?>
                    <?php get_template_part('part/committee');?>
                    <?php get_template_part('part/headmaster');?>
                </div>
            </div>
        </div>

        <div class="right_bire fix">
            <?php get_template_part('part/notice');?>
                <div class="clear"></div>
            <?php get_template_part('part/news_event');?>
                <div class="clear"></div>
            
            <?php get_template_part('part/link');?>

            <?php get_template_part('part/image_link');?>
        </div>
        
    <div class="clear"></div>
    
    <!--slider5_for_responsive is for responsive strat from here-->
    <?php get_template_part('part/photogellary');?>
        
        <div class="clear"></div>
        
       <?php get_footer();?>