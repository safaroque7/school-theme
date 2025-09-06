<?php get_header();?>

    <div class="maincontent fix">
      
      <?php
        $dhaka = $_GET["s"];
            if(!empty($dhaka)){?>
        
       
        <div class="left_bire single_founder search_page fix">
           <div class="search_message">
               <h2> আপনি <span class="search_query"> 
                  
                   "<?php echo get_search_query();?>"</span> কী ওয়ার্ড দিয়ে অনুসন্ধান করেছেন। ফলাফল পাওয়া গেছে
                    <span class="search_query">
                       <?php $all_search_result = new WP_Query("s=$s&howposts=-1");?>
                        <?php $count = $all_search_result->post_count;?>
                        <?php echo $count . ''; wp_reset_query();?> টি
                    </span>
                </h2>    
            </div>
           
            <?php if(have_posts()) : while(have_posts()):the_post();?>
                <h4> <a href="<?php the_permalink();?>"> <?php the_title();?> </a> </h4>
				
                <div class="fix published_read search_page_time">
                    <h3> প্রকাশিত হয়েছে: <?php the_time('d F Y');?>  | 
                    <span class="pReading"> পড়া হয়েছে <?php echo getPostViews(get_the_ID()); ?></span>    
                    </h3>
                </div>
            
            <?php endwhile; else: {?> 
                   <div class="not_fount"> কোনো তথ্য খুঁজে পাওয়া যায়নি। অন্য কোনো শব্দ দিয়ে অনুসন্ধান করতে পারেন।  ধন্যবাদ... </div>
            <?php } endif; ?>
                        
        </div>
        
        <?php } else { ?>
            <div class="not_fount"> কোনো তথ্য খুঁজে পাওয়া যায়নি। অন্য কোনো শব্দ দিয়ে অনুসন্ধান করতে পারেন।  ধন্যবাদ... </div>
        <?php }?>
       
        <div class="right_bire fix">
            <?php get_template_part('part/notice');?>
                <div class="clear"></div>
            <?php get_template_part('part/news_event');?>
                <div class="clear"></div>
            
            <?php get_template_part('part/link');?>

            <?php get_template_part('part/image_link');?>
        </div>
        
    <div class="clear"></div>
    
    
    
        
        <div class="clear"></div>
        
       <?php get_footer();?>