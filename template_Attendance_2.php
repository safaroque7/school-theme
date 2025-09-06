<?php
/*
    Template Name: উপস্থিতি
*/
get_header();p?>
        

        <div class="maincontent fix">
            
            <div class="fix amader_kotha">
                <h2> শিক্ষক, শিক্ষার্থী ও অফিস সহকারীদের উপস্থিতি, অনুপস্থিতি ও ছুটিতে থাকার সংখ্যা </h2>
            </div>
            
            <!--start attendance from here-->
            <?php query_posts('post_type=present&post_status=publish&order=desc&posts_per_page=10&paged=' 
                              .get_query_var('paged'));?>
                              
        <?php while(have_posts()):the_post();?>              
            <div class="fix attendance">
                <h2> <?php the_title();?></h2>
                <div class="fix attendance_per_day">
                    <h4> শিক্ষক </h4>
                    <p> মোট শিক্ষক: <span class="attendance_float_right"> 
                        <?php the_field('total_teacher');?> </span> </p>
                    <p> মোট উপস্থিত শিক্ষক: <span class="attendance_float_right"> 
                        <?php the_field('total_teacher_present');?> </span> </p>
                    <p> মোট অনুপস্থিত শিক্ষক: <span class="attendance_float_right"> 
                        <?php the_field('total_teacher_absence');?> </span> </p>
                    <p> মোট ছুটিতে থাকা শিক্ষক: <span class="attendance_float_right"> 
                        <?php the_field('total_teacher_leave');?> </span> </p>
                </div>

                <div class="fix attendance_per_day">
                       <div class="fix title_bg">
                            <div class="fix className"><p> শ্রেণী </p></div>
                            <div class="fix present white"> উপ: </div>    
                            <div class="fix present white"> অনু: </div>
                        </div>    
                    <div class="fix classNameForattendance">
                        <div class="fix className"><p> ৬ষ্ঠ শ্রেণী </p></div>
                        <div class="fix present"> <?php the_field('six_present');?> </div>    
                        <div class="fix present"> <?php the_field('six_absent');?> </div>    
                    </div>
                    <div class="fix classNameForattendance">
                        <div class="fix className"><p> ৭ম শ্রেণী </p></div>
                        <div class="fix present"> <?php the_field('seven_present');?> </div>    
                        <div class="fix present"> <?php the_field('seven_absent');?> </div>    
                    </div>
                    <div class="fix classNameForattendance">
                        <div class="fix className"><p> ৮ম শ্রেণী </p></div>
                        <div class="fix present"> <?php the_field('eight_present');?> </div>    
                        <div class="fix present"> <?php the_field('eight_absent');?> </div>    
                    </div>
                    <div class="fix classNameForattendance">
                        <div class="fix className"><p> ৯ম শ্রেণী </p></div>
                        <div class="fix present"> <?php the_field('nine_present');?> </div>    
                        <div class="fix present"> <?php the_field('nine_absent');?> </div>    
                    </div>
                    <div class="fix classNameForattendance">
                        <div class="fix className"><p> ১০ম শ্রেণী </p></div>
                        <div class="fix present"> <?php the_field('ten_present');?> </div>    
                        <div class="fix present"> <?php the_field('ten_absent');?> </div>    
                    </div>
                    
                </div>

                <div class="fix attendance_per_day">
                    <h4> কর্মচারী   </h4>
                    <p> মোট কর্মচারী : <span class="attendance_float_right"> 
                        <?php the_field('total_assistance');?> </span> </p>
                    <p> মোট উপস্থিত কর্মচারী : <span class="attendance_float_right"> 
                        <?php the_field('total_assistance_present');?> </span> </p>
                    <p> মোট অনুপস্থিত কর্মচারী : <span class="attendance_float_right"> 
                        <?php the_field('total_assistance_absence');?> </span> </p>
                    <p> মোট ছুটিতে থাকা কর্মচারী : <span class="attendance_float_right"> 
                        <?php the_field('total_assistance_leave');?> </span> </p>
                </div>
            </div><!--end attendance from here-->      
        <?php endwhile;?>    
        
        <div class="fix attendance_box_for_pagination">
            <div class="pagitation_donation">
               <?php the_posts_pagination(array(
                    'prev_text'             =>  'আগের',
                    'next_text'             =>  'পরের',
                    'screen_reader_text'    =>  ' '
                ))?>
            </div>
        </div>
        
        
<?php get_footer();?>