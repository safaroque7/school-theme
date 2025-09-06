<?php 
/*
    Template name: গভর্নিং বডি
*/
get_header();?>
        
        <?php            
            query_posts('post_type=committeelist&post_status=publish&order=asc&posts_per_page=10&paged='
            .get_query_var('paged'));
        ?>

        <div class="maincontent fix">
            
            <div class="amader_kotha fix">

                <h2 style='color:
                    <?php echo ot_get_option( 'backgrouncolor_id');?>; 
                    border-bottom:1px solid 
                    <?php echo ot_get_option( 'backgrouncolor_id');?>'> 
                    গভর্নিংবডি-২০১৫-২০১৬    
                </h2>
               
                    <!--start box_for_border-->
                    <div class="fix box_for_border">
                        <div class="fix donation">
                            <div class="donation_roll fix"><h2> ক্রম </h2></div>
                            <div class="governing_body_image_name fix"> <h2> ছবি </h2> </div>
                            <div class="governing_body_name_title fix"><h2> নাম </h2></div>
                            <div class="donation_duration fix"><h2> পদবী </h2></div>
                            <div class="governing_body_image_mobile_title fix"><h2> ঠিকানা </h2></div>
                        </div>    
                        
                        <?php while(have_posts()):the_post();?>
                            <div class="fix donation">
                                <div class="governing_body_roll fix"><h4> <?php the_field('roll');?> </h2></div>
                                <div class="governing_body_image fix">
                                    <?php the_post_thumbnail('committee_image_size');?>
                                </div>
                                <div class="governing_body_name fix"><h4> <?php the_title();?> </h2></div>
                                <div class="governing_body_duration fix"><h4> <?php the_field('position');?> </h2></div>
                                <div class="governing_body_image_mobile fix"><h4> <?php the_field('address');?> </h4>
                                </div>
                            </div> 
                        <?php endwhile;?>
                    </div><!--end box_for_border-->
                    <div class="pagination_for_1000_and_750px">
                        <?php get_template_part('part/pagination_for_governingbody');?>
                    </div>
                    
                    <!--for 300px-->
                    <div class="fix for_300px_box_for_border">
                        <?php while(have_posts()):the_post();?>
                            <div class="fix for_bottom_border">
                                <div class="fix student_imageBox">
                                    <?php the_post_thumbnail('committee_image_size');?>
                                </div>
                                <div class="student_info governing_commmittee_text_width">
                                    <p> <?php the_title();?> </p>
                                    <p> <?php the_field('position');?> </p>
                                    <p> <?php the_field('address');?> </p>
                                </div>
                            </div>                             
                        <?php endwhile;?>
                    </div>    
                    </div><!--end box_for_border-->
                    <div class="pagination_for_300px">
                        <?php get_template_part('part/pagination_for_governingbody');?>
                    </div>
                    
                    
                    
                </div>
			
<?php get_footer();?>