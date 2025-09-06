<?php
/*
    Template Name: ভর্তি বিজ্ঞপ্তি
*/
get_header();?>
        
    
        <?php            
            query_posts('post_type=admissionnotice&post_status=publish&order=asc&posts_per_page=5&paged='
            .get_query_var('paged'));
        ?>
        
        <div class="maincontent fix">
            
            <div class="fix amader_kotha">
                <h2> ভর্তি বিজ্ঞপ্তি </h2>
                    <!--start box_for_border-->
            </div>
            
            <div class="amader_kotha result fix">
               <?php while(have_posts()):the_post();?>
                    <h4> <a href="<?php the_field('link');?>" target="_blank"> <?php the_title();?> </a>  </h4>
                <?php endwhile;?>    
            
                <div class="pagitation_donation">
                    <?php the_posts_pagination(array(
                        'prev_text'             =>  'আগের বিজ্ঞপ্তি',
                        'next_text'             =>  'পরের বিজ্ঞপ্তি',
                        'screen_reader_text'    =>  ' '
                    ))?>
                </div>            
            </div>
            
<?php get_footer();?>