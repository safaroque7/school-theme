<div class="name fix">
   <?php if(function_exists('get_option_tree')):
        if(get_option_tree('institue_name')):
    ?>
        <h1> <a href="<?php echo esc_url(home_url('/'));?>" style='color:<?php echo ot_get_option( 'backgrouncolor_id' ); ?>'> <?php get_option_tree('institue_name', '', true);?></a> </h1>
            <?php else :?>
        <h1> <a href="<?php echo esc_url(home_url('/'));?>" style='color:<?php echo ot_get_option( 'backgrouncolor_id' ); ?>'> এখানে স্কুল/কলেজের নাম হবে </a> </h1>
    <?php endif; endif;?>    
    
    
<!-- ******************* স্থাপিত কত সালে EIIN নাম্বার কত এবং Inst. Number নাম্বার ******************* -->
    <?php if(function_exists('get_option_tree')):
        if(get_option_tree('eeiiin_number_and_address')):    
    ?>
        
            
    <h4> <?php get_option_tree('eeiiin_number_and_address', '', true);?> </h4>
    
    <?php else: ?>
        <h4>
            স্থাপিত: 0 নভেম্বর 0000 খ্রি. EIIN: 000000, Inst. Number: 0000000000 <br/>
            ঠিকানা, ঠিকানা, ঠিকানা, ফোন : ০১৫৭৮-****, ই-মেইল : test@gmail.com
        </h4>
    <?php endif; endif;?>    
</div>