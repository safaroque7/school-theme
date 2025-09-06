<?php
/*
    Template Name: প্রধান শিক্ষকগণের নামের তালিকা
*/
get_header();?>
         <?php            
            query_posts('post_type=headmasterlist&post_status=publish&order=desc&posts_per_page=10&paged='
            .get_query_var('paged'));
        ?>

        <div class="maincontent fix">
            <div class="amader_kotha fix">
               
                <h2 style='color:
                    <?php echo ot_get_option( 'backgrouncolor_id');?>; 
                    border-bottom:1px solid 
                    <?php echo ot_get_option( 'backgrouncolor_id');?>'> 
                    বিদ্যালয়ে প্রধান শিক্ষকগণের নামের তালিকা ও কার্যকাল   
                </h2>   
                    <!--start box_for_border-->
                    <div class="fix box_for_border">
                        <div class="fix donation">
                            <div class="donation_roll fix"><h2> ক্রম </h2></div>
                            <div class="donation_name fix"><h2> নাম </h2></div>
                            <div class="donation_duration fix"><h2> কার্যকাল </h2></div>
                            <div class="donation_amount fix"><h2> বিদ্যালয়ে অবদান </h2></div>
                        </div>    
                        <?php while(have_posts()):the_post();?>
                            <div class="fix donation">
                                <div class="donation_roll fix"><h4> <?php the_field('roll');?> </h4></div>
                                <div class="donation_name fix"><h4> <?php the_title();?> </h4></div>
                                <div class="donation_duration fix"><h4> <?php the_field('time');?> </h4></div>
                                <div class="donation_amount fix">
                                    <h4> <?php the_field('contribution');?> </h4></div>
                            </div>
                        <?php endwhile;?>     
                    </div><!--end box_for_border-->
                    <div class="pagination_for_1000_and_750px">
                        <?php get_template_part('part/pagination_for_headmaster_list');?>
                    </div>
                    
                    <!--for 300px-->
                    <div class="fix for_300px_box_for_border">
                        <?php while(have_posts()):the_post();?>
                            <div class="fix donation">
                                <div class="donation_roll fix"> 
                                    <h4> <b> ক্রম : </b> <?php the_field('roll');?> </h4></div>
                                 <div class="donation_name fix">
                                     <h4> <b> নাম : </b> <?php the_title();?> </h4></div>
                                 <div class="donation_duration fix">
                                     <h4> <b> কার্যকাল : </b> <?php the_field('time');?></h4></div>
                                 <div class="donation_amount fix">
                                     <h4> <b> অর্জন : </b> <?php the_field('contribution');?> </h4></div>
                            </div> 
                        <?php endwhile;?>   
                    </div>  <!--end box_for_border -->
                    <div class="pagination_for_300px">
                        <?php get_template_part('part/pagination_for_headmaster_list');?>
                    </div>
            </div>
<?php get_footer();?>