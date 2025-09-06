<?php get_header();?>

    <div class="maincontent fix">
        <div class="left_bire single_founder fix">
           
            <?php while(have_posts()):the_post();?>
                <?php if(has_post_thumbnail()){?>   
                    <div class="fix single_image_size">
                        <?php the_post_thumbnail();?>
                        
                        
                            <div class="fix captionBox">
                                <?php the_field('single_caption');?>
                            </div>
                        
                    </div>
                <?php } ?>    
               
                <h4> <?php the_title();?> </h4>
                <p class="positionTeacher"> <?php the_field('position');?> </p>
                <div class="fix published_read">
                    <h3> প্রকাশিত হয়েছে: <?php the_date('d F Y');?>  | 
                    <span class="pReading"> পড়া হয়েছে <?php echo getPostViews(get_the_ID()); ?></span>

                </div>
                
                <?php?>
                
                
                <?php the_content();?>
                <?php setPostViews(get_the_ID()); ?>
            <?php endwhile;?>           
                        
        </div>
        <div class="right_bire fix">
            <?php get_template_part('part/notice');?>
                <div class="clear"></div>
            <?php get_template_part('part/news_event');?>
                <div class="clear"></div>
            
            <?php get_template_part('part/link');?>

            <?php get_template_part('part/image_link');?>
        </div>
        
    <div class="clear"></div>
    
    <?php get_template_part('part/photogellary');?> 
    
        
        <div class="clear"></div>
        
       <?php get_footer();?>