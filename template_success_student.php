<?php
/*
    Template Name: কৃতি শিক্ষার্থী
*/
get_header();?>

        <div class="maincontent fix">
            
            <div class="fix amader_kotha">
                <h2> কৃতি শিক্ষার্থী </h2>
                <!--student success_student-->
                <div class="fix success_student">
              
                  <?php query_posts('post_type=successfullStudent&post_status=publish&posts_per_page=20&paged='.get_query_var('paged'));?>
                   
                   <?php while(have_posts()):the_post();?>
                        <!--start per_studen-->
                        <div class="fix per_student">

                           <?php
                                $student_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'success_student_image_size');?>
                                <img src="<?php echo $student_image[0]?>" 
                                alt="<?php the_title();?>">
                                <!--student per_student_info-->
                                <div class="per_student_info">
                                    <h2> <?php the_title();?> </h2>
                                    <h3> <?php the_field('success');?> </h3>
                                    <h3> সাল : <?php the_field('success_year');?> </h3>
                                </div><!--student per_student_info-->
                        </div><!--.end per_studen-->
                    <?php endwhile;?>
                    
                    <div class="clear"></div>
                    
                    <div class="pagination_of_success">
                        <?php get_template_part('part/pagination_for_governingbody');?>
                    </div>

                </div><!--.end success_student-->
                            
            </div>

            
<?php get_footer();?>