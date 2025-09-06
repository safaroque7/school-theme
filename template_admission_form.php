<?php
/*
    Template Name: বিভিন্ন ফরম
*/
get_header();?>
        

        <div class="maincontent fix">
        <!--start class_6_student_list_title-->
        <div class="fix class_6_student_list_title">
            <h2> বিভিন্ন ধরনের ফরম ডাউনলোড করুন এখান থেকে </h2>
        
        <!--start all_from    -->
        <div class="fix all_from">
            <div class="fix admission_from_download">    
              
              <?php
                $admissionform = new WP_Query(array(
                    'post_type'         =>  'admissionfrom',
                    'posts_per_page'    =>  1,
                ));  
              ?>
              
               <?php $admissionform = new WP_Query(array(
                    'post_type'         => 'admissionfrom',
                    'posts_per_page'    =>  1
                ));?>
                <?php while($admissionform->have_posts()):$admissionform->the_post();?>
                    <div class="fix admission_form"><?php the_post_thumbnail('form');?></div>
                    <div class="fix download_form"> <a href="<?php the_title();?>" target="_blank">ভর্তি ফরম ডাউনলোড</a></div>
                <?php endwhile; ?>
                <?php wp_reset_query();?>
            </div>
            
            
            <?php            
                query_posts('post_type=otherform&post_status=publish&order=asc&posts_per_page=10&paged='
                .get_query_var('paged'));
            ?>
             
              
            <div class="fix others_form">
               <?php while(have_posts()):the_post();?>
                    <div class="fix download_link">
                       <ul><li> <?php the_title();?> </li> 
                           <li> <a href="<?php the_field('link');?>" target="_blank">ডাউনলোড</a> </li>
                        </ul>
                    </div>
                <?php endwhile; ?>
                
                <div class="pagitation_donation margin_bottom_15">
                   <?php the_posts_pagination(array(
                        'prev_text'             =>  'আগের ফরম',
                        'next_text'             =>  'পরের ফরম',
                        'screen_reader_text'    =>  ' '
                    ))?>
                </div>
                
            </div>
        </div><!--end all_from    -->

        </div><!--end class_6_student_list_title-->
			
<?php get_footer();?>