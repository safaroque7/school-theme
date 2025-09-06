<?php
/*
    Template Name: ভিডিও গ্যালারি
*/
get_header()?>

<?php query_posts('post_type=videogellary&post_status=publish&order=desc&posts_per_page=12&paged=' 
                              .get_query_var('paged'));?>

    <div class="maincontent fix">
    
        <div class="amader_kotha fix">
            <h2> ভিডিও গ্যালারি </h2>
                <?php while(have_posts()):the_post();?>
                    <div class="fix photogellary_image_caption">
                        <iframe 
                            src="<?php the_field('videlo_link');?>" frameborder="0" allowfullscreen>
                        </iframe>                                                
                        
                        <div class="fix captionBox"> <?php the_title();?> </div>                        
                    </div>
                <?php endwhile;?>    
                
                
                <div class="pagitation_donation">
                   <?php the_posts_pagination(array(
                        'prev_text'             =>  'আগের ভিডিও',
                        'next_text'             =>  'পরের ভিডিও',
                        'screen_reader_text'    =>  ' '
                    ))?>
                </div>                
        </div>

<?php get_footer();?>