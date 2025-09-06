<!--for 300px-->
    <div class="fix for_300px_box_for_border">
        <?php while($routine->have_posts()):$routine->the_post();?>
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
                        </div>
                        <!--per hourr end-->

                        <!--per hourr-->
                        <div class="fix time_subject">
                            <p> ২য় ঘণ্টা </p>
                            <p>  ১০:১৫-১১.০০ </p>
                            <p> <?php the_field('subject_2');?> </p>
                        </div>
                        <!--per hourr end-->

                        <!--per hourr-->
                        <div class="fix time_subject">
                            <p> ৩য় ঘণ্টা </p>
                            <p> ১১:০০-১১:৪৫ </p>
                            <p> <?php the_field('subject_3');?> </p>
                        </div>
                        <!--per hourr end-->

                        <!--per hourr-->
                        <div class="fix time_subject">
                            <p> ৪র্থ ঘণ্টা </p>
                            <p>  ১১:৪৫-১২:৩০ </p>
                            <p> <?php the_field('subject_4');?> </p>
                        </div>
                        <!--per hourr end-->

                        <!--per hourr-->
                        <div class="fix time_subject">
                            <p> ৫ম ঘণ্টা </p>
                            <p> ১২:৩০-১:১৫ </p>
                            <p> <?php the_field('subject_5');?> </p>
                        </div>
                        <!--per hourr end-->

                        <!--per hourr-->
                        <div class="fix time_subject">
                            <p>১:১৫-১:৩০</p>
                            <p> <?php the_field('subject_0');?> </p>
                        </div>
                        <!--per hourr end-->

                        <!--per hourr-->
                        <div class="fix time_subject">
                            <p> ৬ষ্ঠ ঘণ্টা </p>
                            <p>২:১৫-৩:০০ </p>
                            <p> <?php the_field('subject_6');?> </p>
                        </div>
                        <!--per hourr end-->

                        <!--per hourr-->
                        <div class="fix time_subject">
                            <p> ৭ম ঘণ্টা </p>
                            <p>২:১৫-৩:০০</p>
                            <p> <?php the_field('subject_7');?> </p>
                        </div>
                        <!--per hourr end-->

                        <!--per hourr-->
                        <div class="fix time_subject">
                            <p> ৮ম ঘণ্টা </p>
                            <p>৩:১৫-৪:০০</p>
                            <p> <?php the_field('subject_8');?> </p>
                        </div>
                        <!--per hourr end-->
                    </div>
                </div><!--end routine title from here -->           
            </div>
        <?php endwhile;?>
    </div> 