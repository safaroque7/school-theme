<?php 
/*
    Template Name: প্রসপেক্টাস
*/
get_header();?>
        
        <?php $prospectus = new WP_Query(array(
            'post_type' =>  'prospectus',
            'order'     =>  'asc'
        )); ?>
        
        <div class="maincontent fix">
            
            <div class="fix amader_kotha"><h2> প্রসপেক্টাস </h2></div>
            
            <?php while($prospectus->have_posts()): $prospectus->the_post();?>
                <div class="amader_kotha result fix">
                    <h4> <?php the_title();?> </h4>                    
                    <p> <?php the_content();?> </p>
                </div>
            <?php endwhile;?>    
                                    
<?php get_footer();?>