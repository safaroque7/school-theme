<?php 
/*
    Template Name: আর্কাইভ
*/
get_header();?>
       
        <div class="maincontent fix">
        <!--start class_6_student_list_title-->
        <div class="fix class_6_student_list_title">
            <h2>
                ২০১৫ সাল থেকে ৬ষ্ঠ-১০ম শ্রেণীর সকল শিক্ষার্থীর আর্কাইভ
            </h2>
            
            <!--start archive_section-->
            <div class="fix archive_section">
               <form action="" method="GET">
                <!--start select_option-->
                <div class="select_option">
                    <select name="className" id="" required>
                        
                        <option selected="selected" disabled="disabled">
                            -- শ্রেণী নির্বাচন করুন --
                        </option>
                        <option value="6"> ৬ষ্ঠ শ্রেণী </option>
                        <option value="7"> ৭ম শ্রেণী </option>
                        <option value="8"> ৮ম শ্রেণী </option>
                        <option value="9"> ৯ম শ্রেণী </option>
                        <option value="10"> ১০ম শ্রেণী </option>
                    </select>
                </div><!--.end select_option-->
            
               
               
                <!--start select_option-->
                <div class="select_option">
                    <select name="student_year" id="" required>
                        <option selected="selected" disabled="disabled">-- সাল নির্বাচন করুন --</option>
                            <?php get_template_part('part/year');?>
                    </select>
                </div><!--.end select_option-->        
                   <input type="submit" name="submit" value="দেখুন">
               </form>         
            </div><!--.end archive_section-->

            
            <?php
                $args = array(
                    'post_type'         =>  'class'.$_GET['className'],
                    'posts_per_page'    =>  -1,
                    'meta_key'          =>  'present_year',
                    'meta_value'        =>  $_GET['student_year'],
                    'order'             =>  'ASC',
                );
            ?>
            
            <?php
                $the_query = new WP_Query( $args );
            ?>
       
        <div class="maincontent fix">
        <!--start class_6_student_list_title-->
        <div class="fix class_6_student_list_title">
           
           
           
           <?php

                $submit_value = $_GET["submit"];
                if(isset($submit_value)) { ?> 
                
           
            <h2> আপনি দেখছেন <?php echo $_GET["student_year"];?> সালের <?php $store_class_name = $_GET["className"];
                
                
                if($store_class_name == 6){
                    echo '৬ষ্ঠ';
                    
                }elseif($store_class_name == 7){
                    echo '৭ম';
                }elseif($store_class_name == 8){
                    echo '৮ম';
                }elseif($store_class_name == 9){
                    echo '৯ম';
                }elseif($store_class_name == 10){
                    echo '১০ম';
                }
                
                ?> শ্রেণীর শিক্ষার্থীর তালিকা </h2>
                
            <?php } ?>    

                <!--start class_list-->
                <div class="fix class_list">
                    
                    
            <!--start student_image_and_info এখান থেকেই কোয়ারি করতে হবে -->
            <?php while($the_query->have_posts()) : $the_query->the_post();?>
                <div class="fix student_image_and_info">
                   
                    <div class="fix for_bottom_border">
                        <div class="fix student_imageBox mobile_screen_image_size student_imageBox_other">

                           <?php $girl_student = get_post_meta(get_the_id(), "girl", true);?>

                            <?php if($girl_student == girl){?>   
                               <?php if( is_user_logged_in() ){?>


                                    <?php
                                        $student_image = wp_get_attachment_image_src(get_post_thumbnail_id($post_ID), 'student_image_size');?>

                                   <img src="<?php echo $student_image[0]?>" alt="<?php the_title();?>">


                                <?php } else{?>
                                    <img src="<?php echo get_template_directory_uri();?>/images/dami_image.jpg" alt="">
                                <?php }?>
                                <?php } else { ?>
                                    <?php the_post_thumbnail('custom_image_size');?>
                            <?php }?>
                        </div>
                        <div class="student_info">
                            <p> <?php the_title();?> </p>
                            <p style="color:red"> <b> শ্রেণী: </b> <?php the_field('class');?> </p>
                            <p> <b> রোল নং: </b> <?php the_field('roll');?> </p>

                            <?php $section_name = get_post_meta(get_the_id(), "section", true); ?>                
                                <?php if($section_name == নাই){?>

                                <?php } else { ?>
                                   <p> <b> শাখা: </b> <?php the_field('section');?> </p>
                                <?php }?>

                            
                                <?php $divistion_name = get_post_meta(get_the_id(), "groupdivision", true); ?>
                                
                                <?php if($divistion_name == নাই){?>
                                
                                <?php } else {?>
                                    <p> <b> বিভাগ: </b> <?php the_field('groupdivision')?> </p>    
                                <?php }?>
                            
                            <p style="color:red"> <b> সাল: </b> <?php the_field('present_year')?> </p>    
                            <p> <b> পিতা: </b> <?php the_field('father');?> </p>
                            <p> <b> মাতা: </b> <?php the_field('mother');?> </p>

                            <p> <b> ফোন: </b>

                            <?php $girl_student = get_post_meta(get_the_id(), "girl", true);?>

                            <?php if($girl_student == girl){?>

                                <?php if ( is_user_logged_in() ) {?>
                                        <?php the_field('phone');?> </p>
                                    <?php } else {?>   
                                      অনুমোদিত নয়
                                    <?php } ?>
                                <?php } else {?>
                                        <?php the_field('phone');?> </p>
                                    <?php }?>    

                            <p> <b> জন্ম তারিখ: </b> <?php the_field('birthdate');?> </p>
                            <p> <b> রক্তের গ্রুপ: </b> <?php the_field('bloodgroup');?> </p>
                        </div>
                    </div>
                </div> <!--end student_image_and_info-->

           
            <?php endwhile;?>               
            
            <?php get_template_part('part/pagination_for_governingbody');?>              
                    
        </div><!--end class_list-->
            
        
        </div><!--end class_6_student_list_title-->
<?php get_footer();?>