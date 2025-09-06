<?php
/*
    Template Name: একাডেমিক ক্যালেন্ডার
*/
get_header();?>

        <div class="maincontent fix">
            
            <div class="fix amader_kotha">
                <h2> একাডেমিক ক্যালেন্ডার </h2>
            </div>
            
            <?php get_template_part('part/academic_calender_start_time');?>
            
            <?php get_template_part('part/class_6_to_9');?>
            
            <?php get_template_part('part/class_10');?>
            
            <div class="fix amader_kotha marigin_bottom_10 class_base_suject">
                <h2> শ্রেণিভিত্তিক পঠিত বিষয়সমূহ </h2>
            </div>            
                <?php get_template_part('part/class_6_text_book');?>
                <?php get_template_part('part/class_7_text_book');?>
                <?php get_template_part('part/class_8_text_book');?>
                <?php get_template_part('part/class_9_text_book');?>
                <?php get_template_part('part/class_10_text_book');?>
            
            <div class="fix amader_kotha marigin_bottom_10 class_base_suject">
                <h2> বাৎসরিক ছুটিসমূহ </h2>
            </div>        
            <?php get_template_part('part/leave');?>
            
<?php get_footer();?>            