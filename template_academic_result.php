<?php
/*
    Template Name: একাডেমিক
*/
get_header();?>
        

        <div class="maincontent fix">
            
            <div class="fix amader_kotha">
                <h2> আভ্যন্তরীণ পরীক্ষার ফলাফল </h2>
            </div>
            
            <div class="amader_kotha result fix">
                <h2> অর্ধবার্ষিক পরীক্ষার ফলাফল </h2>
                    <!--start box_for_border-->
                    <div class="fix box_for_border zero_color result_none_bg">
                        <div class="fix donation">
                            <div class="fix index_number office_assistance_index_number post_name">
                                <h2> শ্রেণি </h2></div>
                            <div class="governing_body_image_name fix subject_name_width">
                                <h2> সাল </h2> </div>
                            <div class="fix teachers_name office_assistance blank_date published_date">
                                <h2> ফল প্রকাশের তারিখ </h2></div>
                            <div class="fix designation office_assistance_qualification zero_comments">
                                <h2> ফলাফল জানতে লিংকগুলোতে ক্লিক করুন </h2></div>
                        </div>  
                        
                        <?php $academichalfyearly = new WP_Query(array(
                            'post_type'         =>  'academicresult',
                            'posts_per_page'    =>  5,
                            'order'             =>  'asc'                 
                        ));?>    
                        
                        <?php while($academichalfyearly->have_posts('$academichalfyearly')):$academichalfyearly->the_post();?>
                            <div class="fix donation">
                                <div class="fix index_number_boddy office_assistance_index_number post_name">
                                    <h2> <?php the_title();?> </h2></div>
                                <div class="governing_body_image fix subject_name subject_name_width"> 
                                    <h2> <?php the_time(Y);?> </h2> </div>
                                <div class="fix teachers_name_body office_assistance blank_date published_date">
                                    <h2> <?php the_time('d/m/y');?>ইং </h2></div>
                                <div class="fix qualification_body office_assistance_qualification zero_comments">
                                    <h2> <a href="<?php the_field('link');?>" target="_blank"> এখানে ক্লিক করুন </a> </h2>
                                </div>
                            </div>
                        <?php endwhile;?>
                        
                      </div><!--end box_for_border-->
                      
                        <!--for 300px-->                      
                        <div class="fix for_300px_box_for_border">
                            <?php while($academichalfyearly->have_posts('$academichalfyearly')):
                                $academichalfyearly->the_post();?>
                            
                                <div class="fix donation">
                                    <div class="donation_roll fix"> 
                                        <h4> <b> শ্রেণি : </b> <?php the_title();?> </h4></div>
                                     <div class="donation_name fix">
                                         <h4> <b> সাল : </b> <?php the_time(Y);?> </h4></div>
                                     <div class="donation_duration fix">
                                         <h4> <b> ফল প্রকাশের তারিখ : </b> <?php the_time('d/m/y');?>ইং </h4></div>
                                     <div class="donation_amount fix">
                                         <h4> <b> ফলাফল জানতে এই লিংকে ক্লিক করুন : </b> <h2> <a href="<?php the_field('link');?>" target="_blank"> এখানে ক্লিক করুন </a> </h2> </h4></div>
                                </div> 
                            <?php endwhile;?>
                        </div>                        
            </div>
            
<!--*****************************************************************************************************************-->
            
            <div class="amader_kotha result fix">
                <h2> বার্ষিক পরীক্ষার ফলাফল </h2>
                    <!--start box_for_border-->
                    <div class="fix box_for_border zero_color result_none_bg">
                        <div class="fix donation">
                            <div class="fix index_number office_assistance_index_number post_name">
                                <h2> শ্রেণি </h2></div>
                            <div class="governing_body_image_name fix subject_name_width">
                                <h2> সাল </h2> </div>
                            <div class="fix teachers_name office_assistance blank_date published_date">
                                <h2> ফল প্রকাশের তারিখ </h2></div>
                            <div class="fix designation office_assistance_qualification zero_comments">
                                <h2> ফলাফল জানতে লিংকগুলোতে ক্লিক করুন </h2></div>
                        </div>  
                        
                        <?php $academicyearly = new WP_Query(array(
                            'post_type'         =>  'academicresultannul',
                            'posts_per_page'    =>  5,
                            'order'             =>  'asc'                 
                        ));?>    
                        
                        <?php while($academicyearly->have_posts('$academichalfyearly')):$academicyearly->the_post();?>
                            <div class="fix donation">
                                <div class="fix index_number_boddy office_assistance_index_number post_name">
                                    <h2> <?php the_title()?> </h2></div>
                                <div class="governing_body_image fix subject_name subject_name_width"> 
                                    <h2> <?php the_time(Y);?> </h2> </div>
                                <div class="fix teachers_name_body office_assistance blank_date published_date">
                                    <h2> <?php the_time('d/m/y');?>ইং </h2></div>
                                <div class="fix qualification_body office_assistance_qualification zero_comments">
                                    <h2> <a href="<?php the_field('link');?>" target="_blank"> এখানে ক্লিক করুন </a> </h2>
                                </div>
                            </div>
                        <?php endwhile;?>    
                      </div><!--end box_for_border-->
                      
                      <!--for 300px-->                      
                        <div class="fix for_300px_box_for_border">
                            <?php while($academichalfyearly->have_posts('$academichalfyearly')):
                                $academichalfyearly->the_post();?>
                            
                                <div class="fix donation">
                                    <div class="donation_roll fix"> 
                                        <h4> <b> শ্রেণি : </b> <?php the_title();?> </h4></div>
                                     <div class="donation_name fix">
                                         <h4> <b> সাল : </b> <?php the_time(Y);?> </h4></div>
                                     <div class="donation_duration fix">
                                         <h4> <b> ফল প্রকাশের তারিখ : </b> <?php the_time('d/m/y');?>ইং </h4></div>
                                     <div class="donation_amount fix">
                                         <h4> <b> ফলাফল জানতে এই লিংকে ক্লিক করুন : </b> <h2> <a href="<?php the_field('link');?>" target="_blank"> এখানে ক্লিক করুন </a> </h2> </h4></div>
                                </div> 
                            <?php endwhile;?>
                        </div>
            </div>
            
            
			
<?php get_footer();?>