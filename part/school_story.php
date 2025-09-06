<div class="fix single_content">
    <h2 style='background:<?php echo ot_get_option( 'backgrouncolor_id' ); ?>' >প্রতিষ্ঠানের ইতিহাস </h2>

    <?php $history = new WP_Query(array(
                'post_type'         =>  'schoolhistory',
                'posts_per_page'    =>  '1',
                'order'             =>  'DESC'                 
            ));?>

    <?php while($history->have_posts()):$history->the_post();?>
        <?php if(has_post_thumbnail()){?>
			
			<div class="fix signle_content_image display_none none_300">
				<?php the_post_thumbnail('history_image_size');?>
			</div>
		<?php }?>
        <p> <?php echo excerpt('135');?> </p>
    <?php endwhile;?>    

   <!--FOR 750PX SCREEN START -->
    <div class="fix for750_single_content">
        <?php while($history->have_posts()):$history->the_post();?>
            <?php if(has_post_thumbnail()){?>
			<div class="fix signle_content_image">
				<?php the_post_thumbnail('history_image_size');?>
			</div>
		<?php }?>
        <p> <?php echo excerpt('90');?> </p>
    </div>
    <?php endwhile;?>    
    <!--FOR 750PX SCREEN END -->
    
       
    <!--FOR 300PX MOBILE SCREEN -->
    <div class="fix for300px_mobile_screen">
        <?php while($history->have_posts()):$history->the_post();?>
            <?php if(has_post_thumbnail()){?>
			<div class="fix signle_content_image">
				<?php the_post_thumbnail('history_image_size');?>
			</div>
		<?php }?>
        <p> <?php echo excerpt('8');?></p>
    </div>
    <?php endwhile;?>    
    <!--FOR 750PX SCREEN END -->
    
</div>