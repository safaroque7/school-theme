<div class="fix single_content committee_margin">
        <h2 style='background:<?php echo ot_get_option( 'backgrouncolor_id' ); ?>'> বর্তমান কমিটি </h2>

       <?php            
            query_posts('post_type=committeelist&post_status=publish&order=asc&posts_per_page=3&paged='
            .get_query_var('paged'));
        ?>
       
       <?php while(have_posts()):the_post();?>
            <div class="fix commettee_member">
                <div class="commettee_member_image">
                    <?php the_post_thumbnail('governing_body_image_size');?>
                </div>
                <div class="commettee_member_caption">
                    <h2> <?php the_title();?> </h2>
                    <p> <?php the_field('position');?> </p>
                    <p> <?php the_field('address');?> </p>
                </div>
            </div>
        <?php endwhile;?>    
    </div>
    <p class="complate_committee"> <a href="<?php get_site_url();?>/আমাদের-সম্পর্কে-▾/কমিটির-তালিকা/"> পূর্ণাঙ্গ কমিটি </a> </p>