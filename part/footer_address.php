<div class="fix footer_part">
   
   <?php
        if(function_exists('get_option_tree')):
        if(get_option_tree('address_id')):
    ?>
    <h2> যোগাযোগ </h2>
    <p> <?php get_option_tree('address_id', '', true); ?> </p>
    
    <?php else:?>
    <h2 style='color: 
                   <?php echo ot_get_option( 'backgrouncolor_id');?>; 
                   border-bottom: 1px solid <?php echo ot_get_option( 'backgrouncolor_id');?>;' > 
                যোগাযোগ 
    </h2>
    
    
    <p> এখানে স্কুল/কলেজের নাম হবে  <br/>
    <p> ঠিকানা, ঠিকানা, ঠিকানা <br/>
    <p> ফোন : ০১৫৭৮-**** <br/>
    <p> ই-মেইল : test@gmail.com  <br/>
    
<?php endif; endif;?>    
</div><!--footer_part end from here-->