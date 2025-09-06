<?php
/*
    Template Name: উপস্থিতি
*/
get_header();p?>

        <div class="maincontent fix">
            
            <div class="fix amader_kotha">
                <h2 style='color:
                    <?php echo ot_get_option( 'backgrouncolor_id');?>; 
                    border-bottom:1px solid 
                    <?php echo ot_get_option( 'backgrouncolor_id');?>'> 
                    শিক্ষক, শিক্ষার্থী ও অফিস সহকারীদের উপস্থিতি, অনুপস্থিতি ও ছুটিতে থাকার সংখ্যা 
                </h2>
                
                
            </div>
            
            <!--start techer_date-->
            <div class="fix techer_date">
                <form action=" " method="GET">
                    <div class="ddate">
                        <p>তারিখ লিখুন ইংরেজিতে: <input type="text" placeholder="example 28/12/2016" name="date" id="datepicker"></p>
                    </div>
                    <div class="view">
                        <input type="submit" name="submit" value="দেখুন">
                    </div>
                </form>
            </div>
            
        
            <!--start attendance from here-->
                             
            <?php 
                if( isset( $_GET['submit'] ) && !empty($_GET['date'] ) ) {
                $date = str_replace('/', '', $_GET['date']);
                $args = array(
                        'post_type'         => 'present',
                        'posts_per_page'    => 1,
                        'name'              =>  $_GET['date']
                        
           );?>
           
            <?php                  
                $present250 = new WP_Query($args);
            ?>
            
            <?php if($present250->have_posts()): ?>
                <?php while($present250->have_posts()):$present250->the_post();?>              
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
                        <h4> কর্মচারী </h4>                        
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
                <?php else:?>
                    <p> not found </p>
            <?php endif; ?>
            
        <?php wp_reset_postdata(); } ?>
        
<?php get_footer();?>