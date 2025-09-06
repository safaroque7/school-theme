<?php
/*
    Template Name: কন্টেন্ট ও প্রকাশনা
*/
get_header();?>
        

        <div class="maincontent fix">
            
            <div class="fix amader_kotha">
                <h2> কন্টেন্ট ও প্রকাশনা </h2>
                    <!--start box_for_border-->
            </div>
            
            <div class="clear"></div>
            
            <div class="amader_kotha result fix">
                <ul>
                    <?php            
                        query_posts('post_type=contentp&post_status=publish&order=dsc&posts_per_page=10&paged='
                        .get_query_var('paged'));
                    ?>                                                                      
                    
                    
                    <?php while(have_posts()):the_post();?>
                        <li>
                           <a href="<?php the_permalink();?>"> <?php the_title();?> </a>
                        </li>
                    <?php endwhile;?>  
                      
                <div class="pagitation_donation">
                   <?php the_posts_pagination(array(
                        'prev_text'             =>  'আগের',
                        'next_text'             =>  'পরের',
                        'screen_reader_text'    =>  ' '
                    ))?>
                </div>      
            </ul>                    
                    
            </div>
            
                                    
<?php get_footer();?>