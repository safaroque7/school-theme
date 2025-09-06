<?php
/*
    Template Name: যোগাযোগ
*/
get_header();?>
        
<!-- **************************** এখান থেকে নতুন পেইজের কাজ শুরু করতে হবে ****************************-->
    <div class="maincontent fix">
        <!--start google_map_school-->
        <div class="fix google_map_school">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29216.624901496925!2d91.13569025!3d23.744593750000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37547359bf07a83f%3A0xf95cf76fb41d83e8!2z4KaV4Ka44Kas4Ka-!5e0!3m2!1sbn!2sbd!4v1437071265768" allowfullscreen></iframe> 
        </div>
        
            <?php echo do_shortcode('[contact-form-7 id="462" title="যোগাযোগ"]');?>
        
<?php get_footer();?>