<?php
/*
    Template Name: সুবিধা
*/
get_header();?>
        

<div class="maincontent fix">

    <div class="amader_kotha fix">
           
         
        <h2 style='color:
                    <?php echo ot_get_option( 'backgrouncolor_id');?>; 
                    border-bottom:1px solid 
                    <?php echo ot_get_option( 'backgrouncolor_id');?>
                   '> সুবিধাসমূহ
        </h2>                               
                                                   
                                                                       
                                                                                                               
            <?php  query_posts('post_type=featured&post_status=publish&orderby=desc&posts_per_page=10&paged='.get_query_var('paged'));?>
            
        <!--start box_for_border-->
        <div class="fix school_role">
           <?php while(have_posts()):the_post();?>
                <!--start per_feautured-->
                <div class="fix per_feautured">
                    <div class="fix feautured_image">

                       <?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'featured_image_size'); ?>


                        <a href="<?php the_permalink();?>">
                            <img src="<?php echo $featured_image[0] ?>" alt="<?php the_title();?>">
                        </a>
                    </div>
                    <div class="featured_title_body">
                        <h2> <a href="<?php the_permalink();?>"> <?php the_title();?> </a> </h2>
                        <p> <?php echo excerpt('80');?>  </p>
                    </div>
                </div>
                <!--.end per_feautured-->
            <?php endwhile;?>   
        
            <?php
                the_posts_pagination(array(
                    'prev_text'             =>  'আগের',
                    'next_text'             =>  'পরের',
                    'screen_reader_text'    =>  ' '
                ));
            ?>            
            
        </div>
    </div>
<?php get_footer();?>