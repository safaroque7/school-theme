<div class="clear"></div>

<div class="fix footer" style='background:<?php echo ot_get_option( 'backgrouncolor_id' ); ?>'>
                <!--footer_three_part start from here-->
                <div class="fix footer_three_part">
                    <!--footer_part start from here-->
                    <?php get_template_part('part/footer_address');?>
                    <!--footer_part start from here-->
                    <div class="fix footer_part">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29216.624901496925!2d91.13569025!3d23.744593750000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37547359bf07a83f%3A0xf95cf76fb41d83e8!2z4KaV4Ka44Kas4Ka-!5e0!3m2!1sbn!2sbd!4v1437071265768" allowfullscreen></iframe>         
                    </div><!--footer_part end from here-->
                    <!--footer_part start from here-->
                    <?php dynamic_sidebar('calender');?>
                    
                </div><!--footer_three_part end from here-->
                <div class="fix single_footer2">
                    <ul>
                        <li>
                            design &amp; development by: <a href="http://webnewsdesign.com" 
                            target="_blank">webnewsdesign.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer();?>
</body>

</html>