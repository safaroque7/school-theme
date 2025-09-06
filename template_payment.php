<?php
/*
    Template Name: ই-পেমেন্ট
*/
get_header();?>
        

        <div class="maincontent fix">
            
            <div class="fix amader_kotha">
                <h2> ই-পেমেন্ট </h2>
            </div>
            
            <?php $bkash = new WP_Query(array('post_type'=>'bkash', 'posts_per_page'=>'1'));?>
            
            <div class="amader_kotha academic_calender no_top_border margin_bottom_20 fix">
                <h4> মোবিকাশ / মাইক্যাশ/ বিকাশ </h4>
                <?php while($bkash->have_posts()):$bkash->the_post();?>
                     <span class="phone_number"> <?php the_title();?>  </span>
                <?php endwhile;?>
                <?php wp_reset_query();?>
            </div>

                        
            <?php $bank = new WP_Query(array('post_type'=>'businessbank', 'posts_per_page'=>'1'));?>                                                                        
            <div class="amader_kotha academic_calender no_top_border margin_bottom_10 fix">
                <h4> বাণিজ্যিক ব্যাংক </h4>
                    <?php while($bank->have_posts()):$bank->the_post();?>
                        <?php the_content();?>
                    <?php endwhile;?>
                <?php wp_reset_query();?>    
            </div>
              
               
            <?php $rule = new WP_Query(array('post_type'=>'paymentrule'));?>                    
            
            <div class="amader_kotha academic_calender no_top_border margin_bottom_10 no_border fix">
                <h4> নিয়মাবলি </h4>
                    <ul>
                        <?php while($rule->have_posts()):$rule->the_post();?>
                            <li> <?php the_title();?> </li>
                        <?php endwhile;?>   
                        <?php wp_reset_query();?>
                    </ul>    
            </div>
            
            <?php get_footer();?>