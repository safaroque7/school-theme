<!--start student_image_and_info এখান থেকেই কোয়ারি করতে হবে -->
<?php while(have_posts()):the_post();?>
   <?php $year = date('Y');
        if( $year == get_field('present_year') ){?>
            <div class="fix student_image_and_info">
        <div class="fix for_bottom_border_class_9">
            
            
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
            
            
            <div class="student_info student_info_9_10">
                <p> <?php the_title();?> </p>
                <p> <b> শ্রেণী: </b> <?php the_field('class');?> </p>
                <p> <b> রোল নং: </b> <?php the_field('roll');?> </p>
                <p> <b> বিভাগ: </b> <?php the_field('groupdivision');?> </p>
                <p> <b> সাল: </b> <?php the_field('present_year')?> </p>
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
        <?php } ?>    
<?php endwhile;?>