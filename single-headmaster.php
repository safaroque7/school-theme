<?php get_header();?>

    <div class="maincontent fix">
        <div class="left_bire single_founder fix">
           
            <?php while(have_posts()):the_post();?>
                <h2> প্রধান শিক্ষকের বাণী </h2>
                <?php if(has_post_thumbnail()) { ?>
                    <div class="fix image_box_and_caption">
                        <?php the_post_thumbnail();?>
                    </div>
                <?php } ?>    
                <?php the_content();?>
                
                <?php setPostViews(get_the_ID()); ?>
                
                <span class="pReading founder_teacher"> পড়া হয়েছে <?php echo getPostViews(get_the_ID()); ?></span>
            
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