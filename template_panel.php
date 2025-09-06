<?php
/*
    Template Name: প্যানেল
*/
get_header();?>
        
        <div class="maincontent fix">
        <!--start class_6_student_list_title-->


        <?php while(have_posts()):the_post(); ?>
            <?php the_content();?>
        <?php endwhile;?>

<?php get_footer();?>