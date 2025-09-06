<?php 
/*
    Template Name: নবম শ্রেণীর শিক্ষার্থীদের তালিকা
*/
get_header();?>
        
        <?php            
            query_posts('post_type=class9&post_status=publish&order=asc&posts_per_page=15&paged='
            .get_query_var('paged'));
        ?>
       
        <div class="maincontent fix">
        <!--start class_6_student_list_title-->
        <div class="fix class_6_student_list_title">
            <h2> নবম শ্রেণীর শিক্ষার্থীদের তালিকা : <?php if(function_exists('get_option_tree')):if(get_option_tree('class6_id')):?><?php get_option_tree('class9_id', '', true);?><?php endif;endif;?>
            </h2>

                <!--start class_list-->
                <div class="fix class_list">
                    
                    <?php get_template_part('part/student_loop_for_9_10');?>
                    
                </div><!--end class_list-->
                <!--start class_list-->
        </div><!--end class_6_student_list_title-->
        <div class="pagination">
            <?php get_template_part('part/pagination_for_governingbody');?>
        </div>
<?php get_footer();?>