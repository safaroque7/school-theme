<?php
/*
    Template Name: ফটো গ্যালারি
*/
get_header()?>

<?php query_posts('post_type=photogellary&post_status=publish&order=desc&posts_per_page=20&paged=' 
                              .get_query_var('paged'));?>

    <div class="maincontent fix">
    
        <div class="amader_kotha fix">
            <h2> ফটো গ্যালারি </h2>
                <?php while(have_posts()):the_post();?>
                    <div class="fix photogellary_image_caption">
                        <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('photogellary_page_image_size');?> </a>
                        
                        <div class="fix captionBox pcaption pccaption_padding justcaptionsize">
                            <a href="<?php the_permalink();?>"> <?php the_title();?> </a>
                        </div>                        
                        
                    </div>
                <?php endwhile;?>    
                
                
                <div class="pagitation_donation">
                   <?php the_posts_pagination(array(
                        'prev_text'             =>  'আগের গ্যালারি',
                        'next_text'             =>  'পরের গ্যালারি',
                        'screen_reader_text'    =>  ' '
                    ))?>
                </div>                
        </div>

<?php get_footer();?>