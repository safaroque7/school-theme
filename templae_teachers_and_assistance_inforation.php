<?php
/*
Template Name: শিক্ষক, কর্মচারী ও শূন্যপদের তালিকা
*/
get_header();?>

<div class="maincontent fix">
    <!--সম্মানিত শিক্ষকমণ্ডলীর তালিকা -->
    <div class="fix amader_kotha">
       
        <h2 style='color:
            <?php echo ot_get_option( 'backgrouncolor_id');?>; 
            border-bottom:1px solid 
            <?php echo ot_get_option( 'backgrouncolor_id');?>'> 
            সম্মানিত শিক্ষকমণ্ডলীর তালিকা    
        </h2>              
           
            <!--start box_for_border-->
            <div class="fix box_for_border teacher_color">
                <div class="fix donation">
                    <div class="fix index_number"><h2> ইনডেক্স নং </h2></div>
                    <div class="governing_body_image_name fix image_for_teachers_and_student"> <h2> ছবি </h2> </div>
                    <div class="fix teachers_name"><h2> নাম </h2></div>
                    <div class="fix designation"><h2> পদবী </h2></div>
                    <div class="fix qualification"><h2> যোগ্যতা </h2></div>
                    <div class="fix subject"><h2> পাঠদানের বিষয় </h2></div>
                    <div class="fix join"><h2> যোগদান </h2></div>
                    <div class="fix birthdate"><h2> জন্ম তারিখ </h2></div>
                    <div class="fix taining"><h2> প্রশিক্ষণ </h2></div>
                    <div class="fix mobile"><h2> ফোন/ই-মেইল </h2></div>
                </div>  
                
                <?php            
                query_posts('post_type=teacherinformation&post_status=publish&order=asc&posts_per_page=10&paged='
                .get_query_var('paged'));
                ?>    
                <?php while(have_posts()):the_post();?>
                    <div class="fix donation">
                        <div class="fix index_number_boddy"><h2> <?php the_field('index_number');?> </h2></div>
                        <div class="governing_body_image fix">
                            <?php the_post_thumbnail('committee_image_size');?>
                        </div>
                        <div class="fix teachers_name_body">
                            <h2> 
                                <a href="<?php the_permalink();?>"> <?php the_title();?> </a> 
                            </h2></div>
                        <div class="fix designation_body"><h2> <?php the_field('position');?> </h2></div>
                        <div class="fix qualification_body"><h2> <?php the_field('qualification');?> </h2></div>
                        <div class="fix subject_body"><h2> <?php the_field('subject');?> </h2></div>
                        <div class="fix join_body"><h2> <?php the_field('joindate');?> </h2></div>
                        <div class="fix birthdate_body"><h2> <?php the_field('birthdate');?> </h2></div>
                        <div class="fix taining_body"><h2> <?php the_field('training');?> </h2></div>
                        <div class="fix mobile_body"><h2> <?php the_field('phone');?> </h2></div>
                    </div>   
                <?php endwhile;?>    
            </div><!--end box_for_border-->

            <div class="pagination_for_1000_and_750px">
                <?php get_template_part('part/pagination_for_teacher_list');?>
            </div>
            
            <!--for 300px -->
            <div class="fix for_300px_box_for_border">
                <?php while(have_posts()):the_post();?>
                    <div class="fix for_bottom_border">
                        <div class="fix student_imageBox">
                            <?php the_post_thumbnail('committee_image_size');?>
                        </div>
                        <div class="student_info governing_commmittee_text_width teachers_list">
                            <p> <b> নাম: </b> <?php the_title();?> </p>
                            <p> <b> পদবী: </b> <?php the_field('position');?> </p>
                            <p> <b> যোগ্যতা: </b> <?php the_field('qualification');?> </p>
                            <p> <b> পাঠদানের বিষয়: </b> <?php the_field('subject');?> </p>
                            <p> <b> যোগদান: </b> <?php the_field('joindate');?> </p>
                            <p> <b> জন্ম তারিখ: </b> <?php the_field('birthdate');?> </p>
                            <p> <b> প্রশিক্ষণ: </b> <?php the_field('training');?> </p>
                            <p> <b> ফোন/ই-মেইল: </b> <?php the_field('phone');?> </p>
                        </div>
                    </div>    
                <?php endwhile;?>    
            </div><!--end box_for_border-->

            <div class="pagination_for_300px">
                <?php get_template_part('part/pagination_for_teacher_list');?>
            </div>
      </div>
    
<!--*****************************************************************************************************************-->  

    <!-- কর্মচারীদের তালিকা -->
    <div class="amader_kotha fix">
        
        <h2 style='color:
            <?php echo ot_get_option( 'backgrouncolor_id');?>; 
            border-bottom:1px solid 
            <?php echo ot_get_option( 'backgrouncolor_id');?>'> 
            কর্মচারীদের তালিকা 
        </h2>
       
            <!--start box_for_border-->
            <div class="fix box_for_border assistance_color">
                <div class="fix donation">
                    <div class="fix index_number office_assistance_index_number height_auto">
                        <h2> ইনডেক্স নং </h2></div>
                    <div class="governing_body_image_name fix image_for_teachers_and_student height_auto"> 
                        <h2> ছবি </h2> </div>
                    <div class="fix teachers_name office_assistance height_auto"><h2> নাম </h2></div>
                    <div class="fix designation office_assistance_qualification height_auto">
                        <h2> পদবী </h2></div>
                    <div class="fix qualification office_assistance_qualification height_auto">
                        <h2> যোগ্যতা </h2></div>
                    <div class="fix join height_auto"><h2> যোগদান </h2></div>
                    <div class="fix birthdate height_auto"><h2> জন্ম তারিখ </h2></div>
                    <div class="fix mobile height_auto office_assistance_phone"><h2> ফোন </h2></div>
                </div>    
                
        <?php            
            query_posts('post_type=officeassistance&post_status=publish&order=asc&posts_per_page=10&paged='
            .get_query_var('paged'));
        ?>                
               <?php while(have_posts()):the_post()?>
                    <div class="fix donation">
                        <div class="fix index_number_boddy office_assistance_index_number">
                            <h2> <?php the_field('index_number');?> </h2></div>
                        <div class="governing_body_image fix">
                            <?php the_post_thumbnail('committee_image_size');?>
                        </div>
                        <div class="fix teachers_name_body office_assistance">
                            <h2> <?php the_title();?> </h2></div>
                        <div class="fix designation_body office_assistance_qualification">
                            <h2> <?php the_field('position');?> </h2></div>
                        <div class="fix qualification_body office_assistance_qualification">
                            <h2> <?php the_field('qualification');?> </h2></div>
                        <div class="fix join_body"><h2> <?php the_field('joindate');?> </h2></div>
                        <div class="fix birthdate_body"><h2> <?php the_field('birthdate');?> </h2></div>
                        <div class="fix mobile_body office_assistance_phone">
                            <h2> <?php the_field('phone');?> </h2>
                        </div>
                    </div>
                <?php endwhile;?>     
            </div><!--end box_for_border-->
            
            <!--for 300px -->
            <div class="fix for_300px_box_for_border">
                <?php while(have_posts()):the_post();?>
                    <div class="fix for_bottom_border">
                        <div class="fix student_imageBox">
                            <?php the_post_thumbnail('committee_image_size');?>
                        </div>
                        <div class="student_info governing_commmittee_text_width">
                            <p> <b> নাম : </b> <?php the_title();?> </p>
                            <p> <b> পদবী : </b> <?php the_field('position');?> </p>
                            <p> <b> যোগ্যতা : </b> <?php the_field('qualification');?> </p>
                            <p> <b> যোগদান : </b> <?php the_field('joindate');?> </p>
                            <p> <b> জন্ম তারিখ : </b> <?php the_field('birthdate');?> </p>
                            <p> <b> ফোন/ই-মেইল: </b> <?php the_field('phone');?> </p>
                        </div>
                    </div>    
                <?php endwhile;?>    
            </div><!--end box_for_border-->

            <div class="pagination_for_300px">
                <?php get_template_part('part/pagination_for_governingbody');?>
            </div>
    </div>

<!--*****************************************************************************************************************-->

    <!-- শূন্যপদের তালিকা-->
    <div class="amader_kotha fix">
        
        <h2 style='color:
            <?php echo ot_get_option( 'backgrouncolor_id');?>; 
            border-bottom:1px solid 
            <?php echo ot_get_option( 'backgrouncolor_id');?>'> 
            শূন্যপদের তালিকা
        </h2>    
           
            <!--start box_for_border-->
            <div class="fix box_for_border zero_color">
                <div class="fix donation">
                    <div class="fix index_number office_assistance_index_number post_name">
                        <h2> পদের নাম </h2></div>
                    <div class="governing_body_image_name fix subject_name_width"> <h2> বিষয় </h2> </div>
                    <div class="fix teachers_name office_assistance blank_date"><h2> যে তারিখ হতে শূন্য </h2></div>
                    <div class="fix designation office_assistance_qualification zero_comments"><h2> মন্তব্য </h2></div>
                </div>    
                
            <?php            
                    query_posts('post_type=Vacancies&post_status=publish&order=asc&posts_per_page=10&paged='
                .get_query_var('paged'));
                ?>                
                
                <?php while(have_posts()):the_post();?>
                    <div class="fix donation">
                        <div class="fix index_number_boddy office_assistance_index_number post_name">
                            <h2> <?php the_title();?> </h2></div>
                        <div class="governing_body_image fix subject_name subject_name_width"> 
                            <h2> <?php the_field('subject');?> </h2> </div>
                        <div class="fix teachers_name_body office_assistance blank_date">
                            <h2> <?php the_field('vacancidate');?> </h2></div>
                        <div class="fix qualification_body office_assistance_qualification zero_comments">
                            <h2> <?php the_field('comments');?> </h2></div>
                    </div> 
                <?php endwhile;?>
            </div><!--end box_for_border-->
            <div class="pagination_for_1000_and_750px">
                <?php get_template_part('part/pagination_for_vacancy');?>
            </div>
            
            <!--for 300px -->
            <div class="fix for_300px_box_for_border">                
                <?php while(have_posts()):the_post();?>
                    <div class="fix vacancy_name_post_date">
                        <p> <b> পদের নাম: </b> <?php the_title();?> </p>
                        <p> <b> বিষয়: </b> <?php the_field('subject');?> </p>
                        <p> <b> যে তারিখ হতে শূন্য: </b> <?php the_field('vacancidate');?> </p>
                        <p> <b> মন্তব্য: </b> <?php the_field('comments');?> </p>
                    </div>
                <?php endwhile;?>
            </div>    
        </div><!--end box_for_border-->
            <div class="pagination_for_300px margin_bottom_15">
                <?php get_template_part('part/pagination_for_vacancy');?>
            </div>                     

<?php get_footer();?>