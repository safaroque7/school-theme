<?php while(have_posts()):the_post();?>
    <div class="fix class_routine display_none_for_1000_750px">
        <div class="fix class_routine_part routine_two_line_box"> 
            <?php the_title();?> </div>
        <div class="fix class_routine_part routine_two_line_box"> 
            <?php the_field('subject_1');?>
            <span class="teacher"> 
                <h2> <a href="<?php the_permalink();?>"> <?php the_field('subject_1_teacher_name');?> </a> </h2>
             </span>
        </div>

        <div class="fix class_routine_part routine_two_line_box"> 
            <?php the_field('subject_2');?>  
            <span class="teacher"> 
                <h2> <a href=""> <?php the_field('subject_2_teacher_name');?> </a> </h2>
             </span>
        </div>

        <div class="fix class_routine_part routine_two_line_box"> 
            <?php the_field('subject_3');?>  
            <span class="teacher"> 
                <h2> <a href=""> <?php the_field('subject_3_teacher_name');?> </a> </h2>
             </span>
        </div>

        <div class="fix class_routine_part routine_two_line_box"> 
            <?php the_field('subject_4');?>  
            <span class="teacher"> 
                <h2> <a href=""> <?php the_field('subject_4_teacher_name');?> </a> </h2>
             </span>
        </div>

        <div class="fix class_routine_part routine_two_line_box"> 
            <?php the_field('subject_5');?>  
            <span class="teacher"> 
                <h2> <a href=""> <?php the_field('subject_5_teacher_name');?> </a> </h2>
             </span>
        </div>

        <div class="fix class_routine_part routine_two_line_box"> 
            <?php the_field('subject_0');?>  
        </div>


        <div class="fix class_routine_part routine_two_line_box"> 
            <?php the_field('subject_6');?>  
            <span class="teacher"> 
                <h2> <a href=""> <?php the_field('subject_6_teacher_name');?> </a> </h2>
             </span>
        </div>

        <div class="fix class_routine_part routine_two_line_box"> 
            <?php the_field('subject_7');?>  
            <span class="teacher"> 
                <h2> <a href=""> <?php the_field('subject_7_teacher_name');?> </a> </h2>
             </span>
        </div>

        <div class="fix class_routine_part routine_two_line_box"> 
            <?php the_field('subject_8');?>  
            <span class="teacher"> 
                <h2> <a href=""> <?php the_field('subject_8_teacher_name');?> </a> </h2>
             </span>
        </div>
    </div><!--end routine title from here -->           
<?php endwhile;?>


<!--for 300px-->
<div class="fix for_300px_box_for_border">
    <?php while(have_posts()):the_post();?>
        <div class="fix class_routine">
            <!--per day-->
            <div class="fix routine_day">
               <p> <?php the_title();?> </p>
                <div class="fix for_time_subject">

                    <!--per hourr-->
                    <div class="fix time_subject">
                        <p> ১ম ঘণ্টা </p>
                        <p>৯:৩০-১০:১৫</p>
                        <p> <?php the_field('subject_1');?> </p>
                        <span class="teacher"> 
                            <h2> <a href=""> <?php the_field('subject_1_teacher_name');?> </a> </h2>
                         </span>
                    </div>
                    <!--per hourr end-->

                    <!--per hourr-->
                    <div class="fix time_subject">
                        <p> ২য় ঘণ্টা </p>
                        <p>  ১০:১৫-১১.০০ </p>
                        <p> <?php the_field('subject_2');?> </p>
                        <span class="teacher"> 
                            <h2> <a href=""> <?php the_field('subject_1_teacher_name');?> </a> </h2>
                         </span>
                    </div>
                    <!--per hourr end-->

                    <!--per hourr-->
                    <div class="fix time_subject">
                        <p> ৩য় ঘণ্টা </p>
                        <p> ১১:০০-১১:৪৫ </p>
                        <p> <?php the_field('subject_3');?> </p>
                        <span class="teacher"> 
                            <h2> <a href=""> <?php the_field('subject_1_teacher_name');?> </a> </h2>
                         </span>
                    </div>
                    <!--per hourr end-->

                    <!--per hourr-->
                    <div class="fix time_subject">
                        <p> ৪র্থ ঘণ্টা </p>
                        <p>  ১১:৪৫-১২:৩০ </p>
                        <p> <?php the_field('subject_4');?> </p>
                        <span class="teacher"> 
                            <h2> <a href=""> <?php the_field('subject_1_teacher_name');?> </a> </h2>
                         </span>
                    </div>
                    <!--per hourr end-->

                    <!--per hourr-->
                    <div class="fix time_subject">
                        <p> ৫ম ঘণ্টা </p>
                        <p> ১২:৩০-১:১৫ </p>
                        <p> <?php the_field('subject_5');?> </p>
                        <span class="teacher"> 
                            <h2> <a href=""> <?php the_field('subject_1_teacher_name');?> </a> </h2>
                         </span>
                    </div>
                    <!--per hourr end-->

                    <!--per hourr-->
                    <div class="fix time_subject">
                        <p>১:১৫-১:৩০</p>
                        <p> <?php the_field('subject_0');?> </p>
                        <span class="teacher"> 
                            <h2> <a href=""> <?php the_field('subject_1_teacher_name');?> </a> </h2>
                         </span>
                    </div>
                    <!--per hourr end-->

                    <!--per hourr-->
                    <div class="fix time_subject">
                        <p> ৬ষ্ঠ ঘণ্টা </p>
                        <p>২:১৫-৩:০০ </p>
                        <p> <?php the_field('subject_6');?> </p>
                        <span class="teacher"> 
                            <h2> <a href=""> <?php the_field('subject_1_teacher_name');?> </a> </h2>
                         </span>
                    </div>
                    <!--per hourr end-->

                    <!--per hourr-->
                    <div class="fix time_subject">
                        <p> ৭ম ঘণ্টা </p>
                        <p>২:১৫-৩:০০</p>
                        <p> <?php the_field('subject_7');?> </p>
                        <span class="teacher"> 
                            <h2> <a href=""> <?php the_field('subject_1_teacher_name');?> </a> </h2>
                         </span>
                    </div>
                    <!--per hourr end-->

                    <!--per hourr-->
                    <div class="fix time_subject">
                        <p> ৮ম ঘণ্টা </p>
                        <p>৩:১৫-৪:০০</p>
                        <p> <?php the_field('subject_8');?> </p>
                        <span class="teacher"> 
                            <h2> <a href=""> <?php the_field('subject_1_teacher_name');?> </a> </h2>
                         </span>
                    </div>
                    <!--per hourr end-->
                </div>
            </div><!--end routine title from here -->           
        </div>
    <?php endwhile;?>
</div>