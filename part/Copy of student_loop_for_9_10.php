<!--start student_image_and_info এখান থেকেই কোয়ারি করতে হবে -->
<?php while(have_posts()):the_post();?>
    <div class="fix student_image_and_info">
        <div class="fix for_bottom_border_class_9">
            <div class="fix student_imageBox mobile_screen_image_size student_imageBox_other">
                <?php the_post_thumbnail('student_image_size');?>
            </div>
            <div class="student_info student_info_9_10">
                <p> <?php the_title();?> </p>
                <p> <b> পিতা: </b> <?php the_field('father');?> </p>
                <p> <b> মাতা: </b> <?php the_field('mother');?> </p>
                <p> <b> শ্রেণী রোল: </b> <?php the_field('roll');?> </p>
                <p> <b> বিভাগ: </b> <?php the_field('groupdivision');?> </p>
                <p> <b> শাখা: </b> <?php the_field('section');?> </p>
                <p> <b> অভিভাবক: </b> <?php the_field('phone');?> </p>
                <p> <b> জন্ম তারিখ: </b> <?php the_field('birthdate');?> </p>
                <p> <b> রক্তের গ্রুপ: </b> <?php the_field('bloodgroup');?> </p>
            </div>
        </div>
    </div> <!--end student_image_and_info-->
<?php endwhile;?>