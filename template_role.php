<?php
/*
    Template Name: নিয়ম ও প্রবিধান
*/
get_header();?>
        

        <div class="maincontent fix">
            
            <div class="amader_kotha fix">
                
                <h2 style='color:
                    <?php echo ot_get_option( 'backgrouncolor_id');?>; 
                    border-bottom:1px solid 
                    <?php echo ot_get_option( 'backgrouncolor_id');?>'> 
                    শিক্ষক, শিক্ষার্থী ও কর্মচারীদের নিয়মকানুন 
                </h2>                                                    
                   
                    <?php $teacherrule = new WP_Query(array(
                        'post_type'     =>  'teacherrule',
                        'order'         =>  'ASC'
                    ));?>
                    
                    <!--start box_for_border-->
                    <div class="fix school_role">
                        <h2> শিক্ষকদের জন্য নিয়ম-কানুন </h2>
                            <ul>
                               <?php while($teacherrule->have_posts()):$teacherrule->the_post();?>
                                    <li> <?php the_title();?> </li>
                                <?php endwhile;?>
                            </ul>
                    </div>
                    
                    
                    <?php $studentrule = new WP_Query(array(
                        'post_type'     =>  'studentrule',
                        'order'         =>  'ASC'
                    ));?>
                    <!--start box_for_border-->
                    <div class="fix school_role">
                        <h2> শিক্ষার্থীদের জন্য নিয়ম-কানুন </h2>
                            <ul>
                               <?php while($studentrule->have_posts()):$studentrule->the_post();?>
                                    <li> <?php the_title();?> </li>
                                <?php endwhile;?>
                            </ul>    
                     </div>
                    
                    <?php $peonrule = new WP_Query(array(
                        'post_type'     =>  'peonrule',
                        'order'         =>  'ASC'
                    ));?>
                    <!--start box_for_border-->
                    <div class="fix school_role">
                        <h2> কর্মচারীদের জন্য নিয়ম-কানুন </h2>
                            <ul>
                                <?php while($peonrule->have_posts()):$peonrule->the_post();?>
                                    <li> <?php the_title();?> </li>
                                <?php endwhile;?>
                            </ul>
                    </div>                                                            
            </div>
<?php get_footer();?>