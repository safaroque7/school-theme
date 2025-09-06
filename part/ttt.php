<!--start dynamic_result-->
        <div class="dynamic_result amader_kotha result fix">
            <div class="fix d_r_part">
                <h3> <b class="d_r_title"> শিক্ষার্থীর নাম &nbsp; : </b> <?php the_title();?>  </h3>
                <h3> <b class="d_r_title"> পিতার নাম &nbsp; : </b> <span class="d_r_distance"> 
                    <?php the_field('father_name');?> </span>  </h3>
                <h3> <b class="d_r_title"> মাতার নাম &nbsp; : </b> <span class="d_r_distance"> 
                    <?php the_field('mother_name');?> </span>  </h3>
                <h3> <b class="d_r_title"> জন্ম তারিখ &nbsp; : </b> <?php the_field('birth_date');?> </h3>
                <h3> <b class="d_r_title"> শ্রেণী &nbsp; : </b> <?php the_field('class_for_result');?> </h3>
                <h3> <b class="d_r_title"> সাল &nbsp; : </b> <?php the_field('result_year');?> </h3>
                <h3> <b class="d_r_title"> রোল নং &nbsp; : </b> <?php the_field('roolNo');?> </h3>


                <?php $sectionName = get_post_meta(get_the_id(), "sectionName", true);?>
                    <?php if(!empty($sectionName)){?> 
                        <h3> <b class="d_r_title"> শাখা &nbsp; : </b> <?php echo $sectionName;?> </h3>
                    <?php } ?>


                <?php $oneGroup = get_post_meta(get_the_id(), "oneGroup", true);?>
                    <?php if(!empty($oneGroup)){?>
                        <h3> <b class="d_r_title"> বিভাগ &nbsp; : </b> <?php the_field('oneGroup');?> </h3>
                    <?php } ?>    



                <?php $type_of_result = get_post_meta(get_the_id(), "type_of_result", true);?>
                    <?php if(!empty($type_of_result)){?>
                        <h3> <b class="d_r_title"> পরীক্ষার ধরণ &nbsp; : </b> <?php echo $type_of_result;?> </h3>
                    <?php } ?>
                    

                </div>
                    <!--start d_r_part-->
                    <div class="fix d_r_part">
                        <div class="fix mark_title">
                            <span class="mark_range"> <b> মার্কের সীমানা (শতাংশ) </b> </span>
                            <span class="mark_range"> <b> গ্রেড </b> </span>
                            <span class="mark_range"> <b> পয়েন্ট </b> </span>
                        </div>

                        <div class="fix mark_title">
                            <span class="mark_range"> ৮০ এবং তার উপরে </span>
                            <span class="mark_range"> এ+ </span>
                            <span class="mark_range"> 5.0 </span>
                        </div>

                        <div class="fix mark_title">
                            <span class="mark_range"> ৭০ থেকে ৭৯ </span>
                            <span class="mark_range"> এ </span>
                            <span class="mark_range"> 4.0 </span>
                        </div>

                        <div class="fix mark_title">
                            <span class="mark_range"> ৬০ থেকে ৬৯ </span>
                            <span class="mark_range"> এ- </span>
                            <span class="mark_range"> 3.5 </span>
                        </div>

                        <div class="fix mark_title">
                            <span class="mark_range"> ৫০ থেকে ৫৯ </span>
                            <span class="mark_range"> বি </span>
                            <span class="mark_range"> 3.0 </span>
                        </div>

                        <div class="fix mark_title">
                            <span class="mark_range"> ৪০ থেকে ৪৯ </span>
                            <span class="mark_range"> সি </span>
                            <span class="mark_range"> 2.0 </span>
                        </div>

                        <div class="fix mark_title">
                            <span class="mark_range"> ৩৩ থেকে ৩৯ </span>
                            <span class="mark_range"> ডি </span>
                            <span class="mark_range"> 1.0 </span>
                        </div>

                        <div class="fix mark_title">
                            <span class="mark_range"> ০ থেকে ৩২ </span>
                            <span class="mark_range"> এফ </span>
                            <span class="mark_range"> 00 </span>
                        </div>


                    </div>
                    <!--.end d_r_part-->
            </div>
            <!--.end dynamic_result-->

                        <div class="clear"></div>

                        <!--start result_sheet-->
                <div class="fix result_sheet">

                        <!--start result_sheet_per_subject-->
                        <div class="fix result_sheet_per_subject">
                            <div class="fix result_sheet_title"><b> বিষয়ের নাম </b></div>
                            <div class="fix result_sheet_title"><b> লেটার গ্রেড </b></div>
                            <div class="fix result_sheet_title"><b> গ্রেড পয়েন্ট </b></div>
                        </div>
                        <!--.end result_sheet_per_subject-->


                        <!--------------------- বাংলা ১ম পত্র --------------------->

                        <!--start result_sheet_per_subject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> বাংলা ১ম পত্র </span>
                            <span class="fix result_sheet_title"> 
                                <?php $bangla1 = get_field('bangla1'); 
                                    echo $bangla1;
                                ?> 
                            </span>
                            <span class="fix result_sheet_title"> 

                            <?php
                                if($bangla1=='এ+'){
                                    $bangla1_result = '5.0';
                                        echo $bangla1_result;
                                }elseif($bangla1=='এ'){
                                    $bangla1_result = '4.0';
                                        echo $bangla1_result;
                                }elseif($bangla1=='এ-'){
                                    $bangla1_result = '3.5';
                                        echo $bangla1_result;
                                }elseif($bangla1=='বি'){
                                    $bangla1_result = '3.0';
                                        echo $bangla1_result;    
                                }elseif($bangla1=='সি'){
                                    $bangla1_result = '2.0';
                                        echo $bangla1_result;
                                }elseif($bangla1=='ডি'){
                                    $bangla1_result = '1.0';
                                        echo $bangla1_result;
                                }elseif($bangla1=='এফ'){ 
                                    $bangla1_result = '00';
                                        echo $bangla1_result; 
                                }elseif($bangla1=='অনুপস্থিত'){ 
                                    $bangla1_result = '00';
                                        echo $bangla1_result; 
                                } 
                            ?> 
                            </span>
                        </div>
                        <!--.end result_sheet_per_subject-->


                        <!--------------------- বাংলা ২য় পত্র --------------------->

                        <!--start result_sheet_per_subject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> বাংলা ২য় পত্র </span>
                            <span class="fix result_sheet_title"> 
                                <?php $bangla2 = get_field('bangla2'); 
                                    echo $bangla2;
                                ?> 
                            </span>
                            <span class="fix result_sheet_title"> 

                            <?php
                                if($bangla2=='এ+'){
                                    $bangla1_result2 = '5.0';
                                        echo $bangla1_result2;
                                }elseif($bangla2=='এ'){
                                    $bangla1_result2 = '4.0';
                                        echo $bangla1_result2;
                                }elseif($bangla2=='এ-'){
                                    $bangla1_result2 = '3.5';
                                        echo $bangla1_result2;
                                }elseif($bangla2=='বি'){
                                    $bangla1_result2 = '3.0';
                                        echo $bangla1_result2;    
                                }elseif($bangla2=='সি'){
                                    $bangla1_result2 = '2.0';
                                        echo $bangla1_result2;
                                }elseif($bangla2=='ডি'){
                                    $bangla1_result2 = '1.0';
                                        echo $bangla1_result2;
                                }elseif($bangla2=='এফ'){ 
                                    $bangla1_result2 = '00';
                                        echo $bangla1_result2; 
                                }elseif($bangla2=='অনুপস্থিত'){ 
                                    $bangla1_result2 = '00';
                                        echo $bangla1_result2; 
                                } 
                            ?> 
                            </span>
                        </div>
                        <!--.end result_sheet_per_subject-->


                        <!--------------------- ইংরেজি ১ম পত্র --------------------->

                        <!--start result_sheet_per_subject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> ইংরেজি ১ম পত্র </span>
                            <span class="fix result_sheet_title"> 
                                <?php $english1 = get_field('english1'); 
                                    echo $english1;
                                ?> 
                            </span>
                            <span class="fix result_sheet_title"> 

                            <?php
                                if($english1=='এ+'){
                                    $english_result1 = '5.0';
                                        echo $english_result1;
                                }elseif($english1=='এ'){
                                    $english_result1 = '4.0';
                                        echo $english_result1;
                                }elseif($english1=='এ-'){
                                    $english_result1 = '3.5';
                                        echo $english_result1;
                                }elseif($english1=='বি'){
                                    $english_result1 = '3.0';
                                        echo $english_result1;    
                                }elseif($english1=='সি'){
                                    $english_result1 = '2.0';
                                        echo $english_result1;
                                }elseif($english1=='ডি'){
                                    $english_result1 = '1.0';
                                        echo $english_result1;
                                }elseif($english1=='এফ'){ 
                                    $english_result1 = '00';
                                        echo $english_result1; 
                                }elseif($english1=='অনুপস্থিত'){ 
                                    $english_result1 = '00';
                                        echo $bangla1_result2; 
                                } 
                            ?> 
                            </span>
                        </div>
                        <!--.end result_sheet_per_subject-->


                        <!--------------------- ইংরেজি ২য় পত্র --------------------->

                        <!--start result_sheet_per_subject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> ইংরেজি ২য় পত্র </span>
                            <span class="fix result_sheet_title"> 
                                <?php $english2 = get_field('english2'); 
                                    echo $english2;
                                ?> 
                            </span>
                            <span class="fix result_sheet_title"> 

                            <?php
                                if($english2=='এ+'){
                                    $english_result2 = '5.0';
                                        echo $english_result2;
                                }elseif($english2=='এ'){
                                    $english_result2 = '4.0';
                                        echo $english_result2;
                                }elseif($english2=='এ-'){
                                    $english_result2 = '3.5';
                                        echo $english_result2;
                                }elseif($english2=='বি'){
                                    $english_result2 = '3.0';
                                        echo $english_result2;    
                                }elseif($english2=='সি'){
                                    $english_result2 = '2.0';
                                        echo $english_result2;
                                }elseif($english2=='ডি'){
                                    $english_result2 = '1.0';
                                        echo $english_result2;
                                }elseif($english2=='এফ'){ 
                                    $english_result2 = '00';
                                        echo $english_result2; 
                                }elseif($english2=='অনুপস্থিত'){ 
                                    $english_result2 = '00';
                                        echo $english_result2; 
                                } 
                            ?> 
                            </span> 
                            </span>
                        </div>
                        <!--.end result_sheet_per_subject-->


                        <!--------------------- গণিত --------------------->

                        <!--start result_sheet_per_subject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> গণিত </span>
                            <span class="fix result_sheet_title"> 
                                <?php $math = get_field('math'); 
                                    echo $math;
                                ?> 
                            </span>
                            <span class="fix result_sheet_title"> 

                            <?php
                                if($math=='এ+'){
                                    $math_result = '5.0';
                                        echo $math_result;
                                }elseif($math=='এ'){
                                    $math_result = '4.0';
                                        echo $math_result;
                                }elseif($math=='এ-'){
                                    $math_result = '3.5';
                                        echo $math_result;
                                }elseif($math=='বি'){
                                    $math_result = '3.0';
                                        echo $math_result;    
                                }elseif($math=='সি'){
                                    $math_result = '2.0';
                                        echo $math_result;
                                }elseif($math=='ডি'){
                                    $math_result = '1.0';
                                        echo $math_result;
                                }elseif($math=='এফ'){ 
                                    $math_result = '00';
                                        echo $math_result; 
                                }elseif($math=='অনুপস্থিত'){ 
                                    $math_result = '00';
                                        echo $math_result; 
                                } 
                            ?> 
                            </span>
                        </div>
                        <!--.end result_sheet_per_subject-->
                        
                        
                        <!--------------------- সাধারণ বিজ্ঞান --------------------->
                        
                        <?php $className = get_post_meta(get_the_id(), "class_for_result", true);?>
                            <?php if($className == '৬ষ্ঠ' || $className == '৭ম' ||  $className == '৮ম'){?>
                        

                        <!--start result_sheet_per_subject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> সাধারণ বিজ্ঞান </span>
                            <span class="fix result_sheet_title"> 
                                <?php $general_science = get_field('general_science'); 
                                    echo $general_science;
                                ?> 
                            </span>
                            <span class="fix result_sheet_title"> 

                            <?php
                                if($general_science=='এ+'){
                                    $general_science_result = '5.0';
                                        echo $general_science_result;
                                }elseif($general_science=='এ'){
                                    $general_science_result = '4.0';
                                        echo $general_science_result;
                                }elseif($general_science=='এ-'){
                                    $general_science_result = '3.5';
                                        echo $general_science_result;
                                }elseif($general_science=='বি'){
                                    $general_science_result = '3.0';
                                        echo $general_science_result;    
                                }elseif($general_science=='সি'){
                                    $general_science_result = '2.0';
                                        echo $general_science_result;
                                }elseif($general_science=='ডি'){
                                    $general_science_result = '1.0';
                                        echo $general_science_result;
                                }elseif($general_science=='এফ'){ 
                                    $general_science_result = '00';
                                        echo $general_science_result; 
                                }elseif($general_science=='অনুপস্থিত'){ 
                                    $general_science_result = '00';
                                        echo $general_science_result; 
                                } 
                            ?> 
                            </span>
                        </div>
                        <!--.end result_sheet_per_subject-->
                        <?php } ?>
                        
                        
                        <!---------------------পদার্থ বিজ্ঞান--------------------->

                        <?php $oneGroup_name = get_post_meta(get_the_id(), "oneGroup", true);?>
                            <?php if($oneGroup_name == 'বিজ্ঞান'){?>

                        <!--start result_sheet_per_subject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> পদার্থ বিজ্ঞান </span>
                            <span class="fix result_sheet_title"> 
                                <?php $physics = get_field('physics'); 
                                    echo $physics;
                                ?> 
                            </span>
                            <span class="fix result_sheet_title"> 

                            <?php
                                if($physics=='এ+'){
                                    $physics_result = '5.0';
                                        echo $physics_result;
                                }elseif($physics=='এ'){
                                    $physics_result = '4.0';
                                        echo $physics_result;
                                }elseif($physics=='এ-'){
                                    $physics_result = '3.5';
                                        echo $physics_result;
                                }elseif($physics=='বি'){
                                    $physics_result = '3.0';
                                        echo $physics_result;    
                                }elseif($physics=='সি'){
                                    $physics_result = '2.0';
                                        echo $physics_result;
                                }elseif($physics=='ডি'){
                                    $physics_result = '1.0';
                                        echo $physics_result;
                                }elseif($physics=='এফ'){ 
                                    $physics_result = '00';
                                        echo $physics_result; 
                                }elseif($physics=='অনুপস্থিত'){ 
                                    $physics_result = '00';
                                        echo $physics_result; 
                                } 
                            ?>
                            </span>
                        </div>
                        <!--.end result_sheet_per_subject-->

                        <?php } ?>
                        
                        
                        
                        <!--------------------- রসায়ন --------------------->

                        <?php $oneGroup_name = get_post_meta(get_the_id(), "oneGroup", true);?>
                            <?php if($oneGroup_name == 'বিজ্ঞান'){?>

                        <!--start result_sheet_per_subject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> রসায়ন </span>
                            <span class="fix result_sheet_title"> 
                                <?php $chemistry = get_field('chemistry'); 
                                    echo $chemistry;
                                ?> 
                            </span>
                            <span class="fix result_sheet_title"> 

                            <?php
                                if($chemistry=='এ+'){
                                    $chemistry_result = '5.0';
                                        echo $chemistry_result;
                                }elseif($chemistry=='এ'){
                                    $chemistry_result = '4.0';
                                        echo $chemistry_result;
                                }elseif($chemistry=='এ-'){
                                    $chemistry_result = '3.5';
                                        echo $chemistry_result;
                                }elseif($chemistry=='বি'){
                                    $chemistry_result = '3.0';
                                        echo $chemistry_result;    
                                }elseif($chemistry=='সি'){
                                    $chemistry_result = '2.0';
                                        echo $chemistry_result;
                                }elseif($chemistry=='ডি'){
                                    $chemistry_result = '1.0';
                                        echo $chemistry_result;
                                }elseif($chemistry=='এফ'){ 
                                    $chemistry_result = '00';
                                        echo $chemistry_result; 
                                }elseif($chemistry=='অনুপস্থিত'){ 
                                    $chemistry_result = '00';
                                        echo $chemistry_result; 
                                } 
                            ?> 
                            </span>
                        </div>
                        <!--.end result_sheet_per_subject-->

                        <?php } ?>



                        <!--------------------- জীব বিজ্ঞান / উচ্চতর গণিত / কৃষি শিক্ষা --------------------->

                        <?php $oneGroup_name = get_post_meta(get_the_id(), "oneGroup", true);?>
                            <?php if($oneGroup_name == 'বিজ্ঞান'){?>

                        <!--start result_sheet_per_sub495ject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> 

                                <?php 
                                    $b_h_a = get_post_meta(get_the_id(), "b_h_a", true);
                                                                  echo $b_h_a;
                                ?>

                            </span>
                            <span class="fix result_sheet_title"> 
                                <?php $b_h_a_grade = get_field('b_h_a_grade'); 
                                    echo $b_h_a_grade;
                                ?> 
                            </span>
                            <span class="fix result_sheet_title"> 

                            <?php
                                if($b_h_a_grade=='এ+'){
                                    $b_h_a_grade_result = '5.0';
                                        echo $b_h_a_grade_result;
                                }elseif($b_h_a_grade=='এ'){
                                    $b_h_a_grade_result = '4.0';
                                        echo $b_h_a_grade_result;
                                }elseif($b_h_a_grade=='এ-'){
                                    $b_h_a_grade_result = '3.5';
                                        echo $b_h_a_grade_result;
                                }elseif($b_h_a_grade=='বি'){
                                    $b_h_a_grade_result = '3.0';
                                        echo $b_h_a_grade_result;    
                                }elseif($b_h_a_grade=='সি'){
                                    $b_h_a_grade_result = '2.0';
                                        echo $b_h_a_grade_result;
                                }elseif($b_h_a_grade=='ডি'){
                                    $b_h_a_grade_result = '1.0';
                                        echo $b_h_a_grade_result;
                                }elseif($b_h_a_grade=='এফ'){ 
                                    $b_h_a_grade_result = '00';
                                        echo $b_h_a_grade_result; 
                                }elseif($chemistry=='অনুপস্থিত'){ 
                                    $b_h_a_grade_result = '00';
                                        echo $b_h_a_grade_result; 
                                } 
                            ?> 
                            </span>
                        </div>
                        <!--.end result_sheet_per_subject-->

                        <?php } ?>
                        
                        
                        
                        
                        <!--------------------- হিসাব বিজ্ঞান--------------------->

                        <?php $oneGroup_name = get_post_meta(get_the_id(), "oneGroup", true);?>
                            <?php if($oneGroup_name == 'বাণিজ্য'){?>

                        <!--start result_sheet_per_subject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> হিসাব বিজ্ঞান </span>
                            <span class="fix result_sheet_title"> 
                                <?php $accounting = get_field('accounting'); 
                                    echo $accounting;
                                ?> 
                            </span>
                            <span class="fix result_sheet_title"> 

                            <?php
                                if($accounting=='এ+'){
                                    $accounting_result = '5.0';
                                        echo $accounting_result;
                                }elseif($accounting=='এ'){
                                    $accounting_result = '4.0';
                                        echo $accounting_result;
                                }elseif($accounting=='এ-'){
                                    $accounting_result = '3.5';
                                        echo $accounting_result;
                                }elseif($accounting=='বি'){
                                    $accounting_result = '3.0';
                                        echo $accounting_result;    
                                }elseif($accounting=='সি'){
                                    $accounting_result = '2.0';
                                        echo $accounting_result;
                                }elseif($accounting=='ডি'){
                                    $accounting_result = '1.0';
                                        echo $accounting_result;
                                }elseif($accounting=='এফ'){ 
                                    $accounting_result = '00';
                                        echo $accounting_result; 
                                }elseif($accounting=='অনুপস্থিত'){ 
                                    $accounting_result = '00';
                                        echo $accounting_result; 
                                } 
                            ?>
                            </span>
                        </div>
                        <!--.end result_sheet_per_subject-->

                        <?php } ?>
                        
                        
                        
                        <!--------------------- ফিন্যান্স, ব্যাংকিং ও বীমা --------------------->

                        <?php $oneGroup_name = get_post_meta(get_the_id(), "oneGroup", true);?>
                            <?php if($oneGroup_name == 'বাণিজ্য'){?>

                        <!--start result_sheet_per_subject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> ফিন্যান্স, ব্যাংকিং ও বীমা </span>
                            <span class="fix result_sheet_title"> 
                                <?php $finance_banking = get_field('finance_banking'); 
                                    echo $finance_banking;
                                ?> 
                            </span>
                            <span class="fix result_sheet_title"> 

                            <?php
                                if($finance_banking=='এ+'){
                                    $finance_banking_result = '5.0';
                                        echo $finance_banking_result;
                                }elseif($finance_banking=='এ'){
                                    $finance_banking_result = '4.0';
                                        echo $finance_banking_result;
                                }elseif($finance_banking=='এ-'){
                                    $finance_banking_result = '3.5';
                                        echo $finance_banking_result;
                                }elseif($finance_banking=='বি'){
                                    $finance_banking_result = '3.0';
                                        echo $finance_banking_result;    
                                }elseif($finance_banking=='সি'){
                                    $finance_banking_result = '2.0';
                                        echo $finance_banking_result;
                                }elseif($finance_banking=='ডি'){
                                    $finance_banking_result = '1.0';
                                        echo $finance_banking_result;
                                }elseif($finance_banking=='এফ'){ 
                                    $finance_banking_result = '00';
                                        echo $finance_banking_result; 
                                }elseif($finance_banking=='অনুপস্থিত'){ 
                                    $finance_banking_result = '00';
                                        echo $finance_banking_result; 
                                } 
                            ?>
                            </span>
                        </div>
                        <!--.end result_sheet_per_subject-->

                        <?php } ?>
                        
                        
                        <!--------------------- ব্যবসা উদ্যোগ --------------------->

                        <?php $oneGroup_name = get_post_meta(get_the_id(), "oneGroup", true);?>
                            <?php if($oneGroup_name == 'বাণিজ্য'){?>

                        <!--start result_sheet_per_subject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> ব্যবসা উদ্যোগ </span>
                            <span class="fix result_sheet_title"> 
                                <?php $business_enterprenior = get_field('business_enterprenior'); 
                                    echo $business_enterprenior;
                                ?> 
                            </span>
                            <span class="fix result_sheet_title"> 

                            <?php
                                if($business_enterprenior=='এ+'){
                                    $business_enterprenior_result = '5.0';
                                        echo $business_enterprenior_result;
                                }elseif($business_enterprenior=='এ'){
                                    $business_enterprenior_result = '4.0';
                                        echo $business_enterprenior_result;
                                }elseif($business_enterprenior=='এ-'){
                                    $business_enterprenior_result = '3.5';
                                        echo $business_enterprenior_result;
                                }elseif($business_enterprenior=='বি'){
                                    $business_enterprenior_result = '3.0';
                                        echo $business_enterprenior_result;    
                                }elseif($business_enterprenior=='সি'){
                                    $business_enterprenior_result = '2.0';
                                        echo $business_enterprenior_result;
                                }elseif($business_enterprenior=='ডি'){
                                    $business_enterprenior_result = '1.0';
                                        echo $business_enterprenior_result;
                                }elseif($business_enterprenior=='এফ'){ 
                                    $business_enterprenior_result = '00';
                                        echo $business_enterprenior_result; 
                                }elseif($business_enterprenior=='অনুপস্থিত'){ 
                                    $business_enterprenior_result = '00';
                                        echo $business_enterprenior_result; 
                                } 
                            ?>
                            </span>
                        </div>
                        <!--.end result_sheet_per_subject-->

                        <?php } ?>
                        
                        
                        <!--------------------- ইতিহাস --------------------->

                        <?php $oneGroup_name = get_post_meta(get_the_id(), "oneGroup", true);?>
                            <?php if($oneGroup_name == 'মানবিক'){?>

                        <!--start result_sheet_per_subject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> ইতিহাস </span>
                            <span class="fix result_sheet_title"> 
                                <?php $history = get_field('history'); 
                                    echo $history;
                                ?> 
                            </span>
                            <span class="fix result_sheet_title"> 

                            <?php
                                if($history=='এ+'){
                                    $history_result = '5.0';
                                        echo $history_result;
                                }elseif($history=='এ'){
                                    $history_result = '4.0';
                                        echo $history_result;
                                }elseif($history=='এ-'){
                                    $history_result = '3.5';
                                        echo $history_result;
                                }elseif($history=='বি'){
                                    $history_result = '3.0';
                                        echo $history_result;    
                                }elseif($history=='সি'){
                                    $history_result = '2.0';
                                        echo $history_result;
                                }elseif($history=='ডি'){
                                    $history_result = '1.0';
                                        echo $history_result;
                                }elseif($history=='এফ'){ 
                                    $history_result = '00';
                                        echo $history_result; 
                                }elseif($history=='অনুপস্থিত'){ 
                                    $history_result = '00';
                                        echo $history_result; 
                                } 
                            ?> 
                            </span>
                        </div>
                        <!--.end result_sheet_per_subject-->
                    <?php } ?>
                        
                        
                        
                        <!--------------------- ভুগোল ও পরিবেশ --------------------->

                        <?php $oneGroup_name = get_post_meta(get_the_id(), "oneGroup", true);?>
                            <?php if($oneGroup_name == 'মানবিক'){?>

                        <!--start result_sheet_per_subject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> ভুগোল ও পরিবেশ </span>
                            <span class="fix result_sheet_title"> 
                                <?php $geography_and_environment = 
                                    get_field('geography_and_environment'); 
                                    echo $geography_and_environment;
                                ?> 
                            </span>
                            <span class="fix result_sheet_title"> 

                            <?php
                                if($geography_and_environment=='এ+'){
                                    $geography_and_environment_result = '5.0';
                                        echo $geography_and_environment_result;
                                }elseif($geography_and_environment=='এ'){
                                    $geography_and_environment_result = '4.0';
                                        echo $geography_and_environment_result;
                                }elseif($geography_and_environment=='এ-'){
                                    $geography_and_environment_result = '3.5';
                                        echo $geography_and_environment_result;
                                }elseif($geography_and_environment=='বি'){
                                    $geography_and_environment_result = '3.0';
                                        echo $geography_and_environment_result;    
                                }elseif($geography_and_environment=='সি'){
                                    $geography_and_environment_result = '2.0';
                                        echo $geography_and_environment_result;
                                }elseif($geography_and_environment=='ডি'){
                                    $geography_and_environment_result = '1.0';
                                        echo $geography_and_environment_result;
                                }elseif($geography_and_environment=='এফ'){ 
                                    $geography_and_environment_result = '00';
                                        echo $geography_and_environment_result; 
                                }elseif($geography_and_environment=='অনুপস্থিত'){ 
                                    $geography_and_environment_result = '00';
                                        echo $geography_and_environment_result; 
                                } 
                            ?>
                            </span>
                        </div>
                        <!--.end result_sheet_per_subject-->

                        <?php } ?>
                        
                        
                        
                        
                        <!--------------------- পৌরনীতি এবং নাগরিকতা / অর্থনীতি --------------------->

                        <?php $oneGroup_name = get_post_meta(get_the_id(), "oneGroup", true);?>
                            <?php if($oneGroup_name == 'মানবিক'){?>

                        <!--start result_sheet_per_sub495ject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> 

                                <?php 
                                    $civics_or_economic = get_post_meta(get_the_id(), 
                                                                        "civics_or_economic", true);
                                                                  echo $civics_or_economic;
                                ?>

                            </span>
                            <span class="fix result_sheet_title"> 
                                <?php $civics_or_economic_grade = get_field('civics_or_economic_grade'); 
                                    echo $civics_or_economic_grade;
                                ?> 
                            </span>
                            <span class="fix result_sheet_title"> 

                            <?php
                                if($civics_or_economic_grade=='এ+'){
                                    $civics_or_economic_grade_result = '5.0';
                                        echo $civics_or_economic_grade_result;
                                }elseif($civics_or_economic_grade=='এ'){
                                    $civics_or_economic_grade_result = '4.0';
                                        echo $civics_or_economic_grade_result;
                                }elseif($civics_or_economic_grade=='এ-'){
                                    $civics_or_economic_grade_result = '3.5';
                                        echo $civics_or_economic_grade_result;
                                }elseif($civics_or_economic_grade=='বি'){
                                    $civics_or_economic_grade_result = '3.0';
                                        echo $civics_or_economic_grade_result;    
                                }elseif($civics_or_economic_grade=='সি'){
                                    $civics_or_economic_grade_result = '2.0';
                                        echo $civics_or_economic_grade_result;
                                }elseif($civics_or_economic_grade=='ডি'){
                                    $civics_or_economic_grade_result = '1.0';
                                        echo $civics_or_economic_grade_result;
                                }elseif($civics_or_economic_grade=='এফ'){ 
                                    $civics_or_economic_grade_result = '00';
                                        echo $civics_or_economic_grade_result; 
                                }elseif($civics_or_economic_grade=='অনুপস্থিত'){ 
                                    $civics_or_economic_grade_result = '00';
                                        echo $civics_or_economic_grade_result; 
                                } 
                            ?> 
                            </span>
                        </div>
                        <!--.end result_sheet_per_subject-->

                        <?php } ?>
                        
                        
                        


                          
                                
                                
                                
                        
                        <!--------------------- ইসলাম শিক্ষা/হিন্দু ধর্ম--------------------->

                        <!--start result_sheet_per_subject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> 
                                <?php $religion_subject = get_field('religion_subject'); 
                                        echo $religion_subject; 
                                ?>
                            </span>
                            <span class="fix result_sheet_title"> 
                                <?php $religion_subject_grade = get_field('religion_subject_grade'); 
                                    echo $religion_subject_grade;
                                ?> 
                            </span>
                            <span class="fix result_sheet_title"> 

                            <?php
                                if($religion_subject_grade=='এ+'){
                                    $religion_subject_grade_result = '5.0';
                                        echo $religion_subject_grade_result;
                                }elseif($religion_subject_grade=='এ'){
                                    $religion_subject_grade_result = '4.0';
                                        echo $religion_subject_grade_result;
                                }elseif($religion_subject_grade=='এ-'){
                                    $religion_subject_grade_result = '3.5';
                                        echo $religion_subject_grade_result;
                                }elseif($religion_subject_grade=='বি'){
                                    $religion_subject_grade_result = '3.0';
                                        echo $religion_subject_grade_result;    
                                }elseif($religion_subject_grade=='সি'){
                                    $religion_subject_grade_result = '2.0';
                                        echo $religion_subject_grade_result;
                                }elseif($religion_subject_grade=='ডি'){
                                    $religion_subject_grade_result = '1.0';
                                        echo $religion_subject_grade_result;
                                }elseif($religion_subject_grade=='এফ'){ 
                                    $religion_subject_grade_result = '00';
                                        echo $religion_subject_grade_result; 
                                }elseif($religion_subject_grade=='অনুপস্থিত'){ 
                                    $religion_subject_grade_result = '00';
                                        echo $religion_subject_grade_result; 
                                } 
                            ?>
                            </span>
                        </div>
                        <!--.end result_sheet_per_subject-->
                        
                        
                        
                        
                        <!--------------------- কৃষি শিক্ষা / গার্হস্থ্য অর্থনীতি --------------------->
                        <?php $className = get_post_meta(get_the_id(), "class_for_result", true);?>
                            <?php if($className == '৬ষ্ঠ' || $className == '৭ম' ||  $className == '৮ম'){?>
                        
                                                
                                                                        
                       <!--start result_sheet_per_sub495ject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> 

                                <?php 
                                    $agriculture_or_home_economic = get_post_meta(get_the_id(), 
                                    "agriculture_or_home_economic", true);
                                        echo $agriculture_or_home_economic;
                                ?>

                            </span>
                            <span class="fix result_sheet_title"> 
                                <?php $agriculture_or_home_eco_grade = 
                                    get_field('agriculture_or_home_eco_grade'); 
                                    echo $agriculture_or_home_eco_grade;
                                ?> 
                            </span>
                            <span class="fix result_sheet_title"> 

                            <?php
                                if($agriculture_or_home_eco_grade=='এ+'){
                                    $agriculture_or_home_eco_grade_result = '5.0';
                                        echo $agriculture_or_home_eco_grade_result;
                                }elseif($agriculture_or_home_eco_grade=='এ'){
                                    $agriculture_or_home_eco_grade_result = '4.0';
                                        echo $agriculture_or_home_eco_grade_result;
                                }elseif($agriculture_or_home_eco_grade=='এ-'){
                                    $agriculture_or_home_eco_grade_result = '3.5';
                                        echo $agriculture_or_home_eco_grade_result;
                                }elseif($agriculture_or_home_eco_grade=='বি'){
                                    $agriculture_or_home_eco_grade_result = '3.0';
                                        echo $agriculture_or_home_eco_grade_result;    
                                }elseif($agriculture_or_home_eco_grade=='সি'){
                                    $agriculture_or_home_eco_grade_result = '2.0';
                                        echo $agriculture_or_home_eco_grade_result;
                                }elseif($agriculture_or_home_eco_grade=='ডি'){
                                    $agriculture_or_home_eco_grade_result = '1.0';
                                        echo $agriculture_or_home_eco_grade_result;
                                }elseif($agriculture_or_home_eco_grade=='এফ'){ 
                                    $agriculture_or_home_eco_grade_result = '00';
                                        echo $agriculture_or_home_eco_grade_result; 
                                }elseif($agriculture_or_home_eco_grade=='অনুপস্থিত'){ 
                                    $agriculture_or_home_eco_grade_result = '00';
                                        echo $agriculture_or_home_eco_grade_result; 
                                } 
                            ?> 
                            </span>
                        </div>
                        <!--.end result_sheet_per_subject-->                                                                     <?php } ?>    
                                                                                                                        
                        
                        <!--------------------- বাংলাদেশ ও বিশ্বপরিচয় --------------------->

                        <!--start result_sheet_per_subject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> বাংলাদেশ ও বিশ্বপরিচয় </span>
                            <span class="fix result_sheet_title"> 
                                <?php $bangladesh_and_world = get_field('bangladesh_and_world'); 
                                    echo $bangladesh_and_world;
                                ?> 
                            </span>
                            <span class="fix result_sheet_title"> 

                            <?php
                                if($bangladesh_and_world=='এ+'){
                                    $bangladesh_and_world_result = '5.0';
                                        echo $bangladesh_and_world_result;
                                }elseif($bangladesh_and_world=='এ'){
                                    $bangladesh_and_world_result = '4.0';
                                        echo $bangladesh_and_world_result;
                                }elseif($bangladesh_and_world=='এ-'){
                                    $bangladesh_and_world_result = '3.5';
                                        echo $bangladesh_and_world_result;
                                }elseif($bangladesh_and_world=='বি'){
                                    $bangladesh_and_world_result = '3.0';
                                        echo $bangladesh_and_world_result;    
                                }elseif($bangladesh_and_world=='সি'){
                                    $bangladesh_and_world_result = '2.0';
                                        echo $bangladesh_and_world_result;
                                }elseif($bangladesh_and_world=='ডি'){
                                    $bangladesh_and_world_result = '1.0';
                                        echo $bangladesh_and_world_result;
                                }elseif($bangladesh_and_world=='এফ'){ 
                                    $bangladesh_and_world_result = '00';
                                        echo $bangladesh_and_world_result; 
                                }elseif($bangladesh_and_world=='অনুপস্থিত'){ 
                                    $bangladesh_and_world_result = '00';
                                        echo $bangladesh_and_world_result; 
                                } 
                            ?> 
                            </span>
                        </div>
                        <!--.end result_sheet_per_subject-->
                            

                       <!-------------------- চারু ও কারুকলা -------------------->
                       <?php $className = get_post_meta(get_the_id(), "class_for_result", true);?>
                            <?php if($className == '৬ষ্ঠ' || $className == '৭ম' ||  $className == '৮ম'){?>
                        
                            <!--start result_sheet_per_subject-->
                            <div class="fix result_sheet_per_subject">
                                <span class="fix result_sheet_title"> চারু ও কারুকলা </span>
                                <span class="fix result_sheet_title"> 
                                    <?php $art_and_craft = get_field('art_and_craft'); 
                                        echo $art_and_craft;
                                    ?> 
                                </span>
                                <span class="fix result_sheet_title"> 

                                <?php
                                    if($art_and_craft=='এ+'){
                                        $art_and_craft_result = '5.0';
                                            echo $art_and_craft_result;
                                    }elseif($art_and_craft=='এ'){
                                        $art_and_craft_result = '4.0';
                                            echo $art_and_craft_result;
                                    }elseif($art_and_craft=='এ-'){
                                        $art_and_craft_result = '3.5';
                                            echo $art_and_craft_result;
                                    }elseif($art_and_craft=='বি'){
                                        $art_and_craft_result = '3.0';
                                            echo $art_and_craft_result;    
                                    }elseif($art_and_craft=='সি'){
                                        $art_and_craft_result = '2.0';
                                            echo $art_and_craft_result;
                                    }elseif($art_and_craft=='ডি'){
                                        $art_and_craft_result = '1.0';
                                            echo $art_and_craft_result;
                                    }elseif($art_and_craft=='এফ'){ 
                                        $art_and_craft_result = '00';
                                            echo $art_and_craft_result; 
                                    }elseif($art_and_craft=='অনুপস্থিত'){ 
                                        $art_and_craft_result = '00';
                                            echo $art_and_craft_result; 
                                    } 
                                ?> 
                                </span>
                            </div>
                            <!--.end result_sheet_per_subject-->
                            <?php }?>
                        
                        
                        
                        <!-------------------- শারীরিক শিক্ষা -------------------->
                        
                        <!--start result_sheet_per_subject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> শারীরিক শিক্ষা </span>
                            <span class="fix result_sheet_title"> 
                                <?php $physical_education_and_health = 
                                    get_field('physical_education_and_health'); 
                                    echo $physical_education_and_health;
                                ?> 
                            </span>
                            <span class="fix result_sheet_title"> 

                            <?php
                                if($physical_education_and_health=='এ+'){
                                    $physical_education_and_health_result = '5.0';
                                        echo $physical_education_and_health_result;
                                }elseif($physical_education_and_health=='এ'){
                                    $physical_education_and_health_result = '4.0';
                                        echo $physical_education_and_health_result;
                                }elseif($physical_education_and_health=='এ-'){
                                    $physical_education_and_health_result = '3.5';
                                        echo $physical_education_and_health_result;
                                }elseif($physical_education_and_health=='বি'){
                                    $physical_education_and_health_result = '3.0';
                                        echo $physical_education_and_health_result;    
                                }elseif($physical_education_and_health=='সি'){
                                    $physical_education_and_health_result = '2.0';
                                        echo $physical_education_and_health_result;
                                }elseif($physical_education_and_health=='ডি'){
                                    $physical_education_and_health_result = '1.0';
                                        echo $physical_education_and_health_result;
                                }elseif($physical_education_and_health=='এফ'){ 
                                    $physical_education_and_health_result = '00';
                                        echo $physical_education_and_health_result; 
                                }elseif($physical_education_and_health=='অনুপস্থিত'){ 
                                    $physical_education_and_health_result = '00';
                                        echo $physical_education_and_health_result; 
                                } 
                            ?> 
                            </span>
                        </div>
                        <!--.end result_sheet_per_subject-->
                        
                        
                        <!-------------------- তথ্য ও যোগাযোগ প্রযুক্তি -------------------->
                        
                        <!--start result_sheet_per_subject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> তথ্য ও যোগাযোগ প্রযুক্তি </span>
                            <span class="fix result_sheet_title"> 
                                <?php $ict =  get_field('ict'); 
                                    echo $ict;
                                ?> 
                            </span>
                            <span class="fix result_sheet_title"> 

                            <?php
                                if($ict=='এ+'){
                                    $ict_result = '5.0';
                                        echo $ict_result;
                                }elseif($ict=='এ'){
                                    $ict_result = '4.0';
                                        echo $ict_result;
                                }elseif($ict=='এ-'){
                                    $ict_result = '3.5';
                                        echo $ict_result;
                                }elseif($ict=='বি'){
                                    $ict_result = '3.0';
                                        echo $ict_result;    
                                }elseif($ict=='সি'){
                                    $ict_result = '2.0';
                                        echo $ict_result;
                                }elseif($ict=='ডি'){
                                    $ict_result = '1.0';
                                        echo $ict_result;
                                }elseif($ict=='এফ'){ 
                                    $ict_result = '00';
                                        echo $ict_result; 
                                }elseif($ict=='অনুপস্থিত'){ 
                                    $ict_result = '00';
                                        echo $ict_result; 
                                } 
                            ?> 
                            </span>
                        </div>
                        <!--.end result_sheet_per_subject-->
                        
                        
                        
                        
                        
                        
                        <!-------------------- কর্ম ও জীবনমুখী শিক্ষা -------------------->
                        
                        <?php $className = get_post_meta(get_the_id(), "class_for_result", true);?>
                            <?php if($className == '৬ষ্ঠ' || $className == '৭ম' ||  $className == '৮ম'){?>
                        
                        <!--start result_sheet_per_subject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> কর্ম ও জীবনমুখী শিক্ষা </span>
                            <span class="fix result_sheet_title"> 
                                <?php $work_and_life = get_field('work_and_life'); 
                                    echo $work_and_life;
                                ?> 
                            </span>
                            <span class="fix result_sheet_title"> 

                            <?php
                                if($work_and_life=='এ+'){
                                    $work_and_life_result = '5.0';
                                        echo $work_and_life_result;
                                }elseif($work_and_life=='এ'){
                                    $work_and_life_result = '4.0';
                                        echo $work_and_life_result;
                                }elseif($work_and_life=='এ-'){
                                    $work_and_life_result = '3.5';
                                        echo $work_and_life_result;
                                }elseif($work_and_life=='বি'){
                                    $work_and_life_result = '3.0';
                                        echo $work_and_life_result;    
                                }elseif($work_and_life=='সি'){
                                    $work_and_life_result = '2.0';
                                        echo $work_and_life_result;
                                }elseif($work_and_life=='ডি'){
                                    $work_and_life_result = '1.0';
                                        echo $work_and_life_result;
                                }elseif($work_and_life=='এফ'){ 
                                    $work_and_life_result = '00';
                                        echo $work_and_life_result; 
                                }elseif($work_and_life=='অনুপস্থিত'){ 
                                    $work_and_life_result = '00';
                                        echo $work_and_life_result; 
                                } 
                            ?> 
                            </span>
                        </div>
                        <!--.end result_sheet_per_subject-->
                        
                        <?php } ?>
                        
                        
                        <!-------------------- ক্যারিয়ার শিক্ষা -------------------->
                        
                        <?php $className = get_post_meta(get_the_id(), "class_for_result", true);?>
                            <?php if($className == '৯ম' || $className == '১০ম'){?>
                        
                        <!--start result_sheet_per_subject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> ক্যারিয়ার শিক্ষা </span>
                            <span class="fix result_sheet_title"> 
                                <?php $carrier_education = get_field('carrier_education'); 
                                    echo $carrier_education;
                                ?> 
                            </span>
                            <span class="fix result_sheet_title"> 

                            <?php
                                if($carrier_education=='এ+'){
                                    $carrier_education_result = '5.0';
                                        echo $carrier_education_result;
                                }elseif($carrier_education=='এ'){
                                    $carrier_education_result = '4.0';
                                        echo $carrier_education_result;
                                }elseif($carrier_education=='এ-'){
                                    $carrier_education_result = '3.5';
                                        echo $carrier_education_result;
                                }elseif($carrier_education=='বি'){
                                    $carrier_education_result = '3.0';
                                        echo $carrier_education_result;    
                                }elseif($carrier_education=='সি'){
                                    $carrier_education_result = '2.0';
                                        echo $carrier_education_result;
                                }elseif($carrier_education=='ডি'){
                                    $carrier_education_result = '1.0';
                                        echo $carrier_education_result;
                                }elseif($carrier_education=='এফ'){ 
                                    $carrier_education_result = '00';
                                        echo $carrier_education_result; 
                                }elseif($carrier_education=='অনুপস্থিত'){ 
                                    $carrier_education_result = '00';
                                        echo $carrier_education_result; 
                                } 
                            ?> 
                            </span>
                        </div>
                        <!--.end result_sheet_per_subject-->
                        
                        <?php } ?>


                    </div> <!--.end result_sheet-->    

                        <!--start root_result-->
                        <div class="fix root_result">
                            
                            
                            <!------------  মোট জিপিএ ------------>
                            
                            <!--start without_optional_result-->
                            <div class="without_optional_result">
                               
                              <?php
                                $without_optional_result = 
                                    $bangla1_result+
                                    $bangla1_result2+
                                    $english_result1+
                                    $english_result2+
                                    $math_result+
                                    $general_science_result+
                                    $bangladesh_and_world_result+
                                    $religion_subject_grade_result+
                                    $physics_result+
                                    $chemistry_result+
                                    $b_h_a_grade_result+
                                    $history_result+
                                    $geography_and_environment_result+
                                    $civics_or_economic_grade_result+
                                    $art_and_craft_result+
                                    $agriculture_or_home_eco_grade_result+
                                    $accounting_result+
                                    $finance_banking_result+
                                    $ict_result+
                                    $work_and_life_result+
                                    $business_enterprenior_result+
                                    $carrier_education_result+
                                    $physical_education_and_health_result;

                    
                            
                                $total_without_optional_result = $without_optional_result/13;

                            ?>
                               
                                <h4> <?php 
                                    if($total_without_optional_result == 5){
                                        echo '5.0';
                                    }elseif($total_without_optional_result == 4){
                                        echo '4.0';
                                    }elseif($total_without_optional_result == 3){
                                        echo '3.0';
                                    }elseif($total_without_optional_result == 2){
                                        echo '1.0';
                                    }elseif($total_without_optional_result == 1){
                                        echo '1.0';
                                    }elseif($total_without_optional_result == 0){
                                        echo '00';
                                    }else{
                                        echo round($total_without_optional_result, 2); }?> </h4>
                            </div>
                            <!--.end without_optional_result-->
                            
                            
                               
                               <!--start without_optional_result-->
                                <div class="without_optional_result_title">
                                    <p>
                                    
                                    <?php $class_for_pass_fail = get_post_meta(get_the_id(), 
                                                                            "class_for_result", true);?>

                                    <?php if($class_for_pass_fail == '৬ষ্ঠ' || $class_for_pass_fail == '৭ম' 
                                             || $class_for_pass_fail == '৮ম'){?>
                                      জিপিএ </p>
                                    <?php } else {?> 
                                        ঐচ্ছিক বিষয় ছাড়া জিপিএ
                                    <?php  }?>  
                                    
                                </div>
                            <!--.end without_optional_result-->    
                            
                        </div>
                        <!--.end root_result-->
                        
                        
                        
            
            <!--start root_result-->
            <div class="fix root_result">
              
              
                <?php $result_date_creator_signature = new WP_Query(
                    array(
                        'post_type'         =>  'r_date_creator',
                        'posts_per_page'    =>  -1,
                        'order'             =>  'DESC'
                        )
                );?>
            
              
                
                  
            <!-------- ঐচ্ছিক বিষয় -------->
                        

             <?php $className = get_post_meta(get_the_id(), "class_for_result", true);?>
                            <?php if($className == '৯ম' || $className == '১০ম'){?>
             
             
                 <div class="fix optional_subject">
                        <div class="fix optional_subject_title"><b> ঐচ্ছিক বিষয় </b></div>
                        
                        
                
                        
                                
                    <!----- জীব বিজ্ঞান / উচ্চতর গণিত / কৃষি শিক্ষা / গার্হস্থ্য অর্থনীতি / কম্পিউটার ----->

                        <?php $oneGroup_name = get_post_meta(get_the_id(), "oneGroup", true);?>
                            <?php if($oneGroup_name == 'বিজ্ঞান' || $oneGroup_name == 'বাণিজ্য' || $oneGroup_name == 'মানবিক'){?>

                        <!--start result_sheet_per_sub495ject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> 

                                <?php 
                                    $b_h_a_e = get_post_meta(get_the_id(), "b_h_a_e", true);
                                                                  echo $b_h_a_e;
                                ?>

                            </span>
                            <span class="fix result_sheet_title"> 
                                <?php $b_h_a_e_grade = get_field('b_h_a_e_grade'); 
                                    echo $b_h_a_e_grade;
                                ?> 
                            </span>
                            <span class="fix result_sheet_title"> 

                            <?php
                                if($b_h_a_e_grade=='এ+'){
                                    $b_h_a_e_grade_result = '5.0';
                                        echo $b_h_a_e_grade_result;
                                }elseif($b_h_a_e_grade=='এ'){
                                    $b_h_a_e_grade_result = '4.0';
                                        echo $b_h_a_e_grade_result;
                                }elseif($b_h_a_e_grade=='এ-'){
                                    $b_h_a_e_grade_result = '3.5';
                                        echo $b_h_a_e_grade_result;
                                }elseif($b_h_a_e_grade=='বি'){
                                    $b_h_a_e_grade_result = '3.0';
                                        echo $b_h_a_e_grade_result;    
                                }elseif($b_h_a_e_grade=='সি'){
                                    $b_h_a_e_grade_result = '2.0';
                                        echo $b_h_a_e_grade_result;
                                }elseif($b_h_a_e_grade=='ডি'){
                                    $b_h_a_e_grade_result = '1.0';
                                        echo $b_h_a_e_grade_result;
                                }elseif($b_h_a_e_grade=='এফ'){ 
                                    $b_h_a_e_grade_result = '00';
                                        echo $b_h_a_e_grade_result; 
                                }elseif($b_h_a_e_grade=='অনুপস্থিত'){ 
                                    $b_h_a_e_grade_result = '00';
                                        echo $b_h_a_e_grade_result; 
                                } 
                            ?>
                            </span>
                        </div>
                        <!--.end result_sheet_per_subject-->

                        <?php } ?>                             
                        
                        
                        

                </div>
                <!--.end result_sheet_per_subject-->
                
                
                
                <!--start without_optional_result-->
                <div class="without_optional_result">
                    
                    
                    <div class="without_optional_result">
                               
                              <?php
                                $without_optional_result = 
                                    $bangla1_result+
                                    $bangla1_result2+
                                    $english_result1+
                                    $english_result2+
                                    $math_result+
                                    $general_science_result+
                                    $bangladesh_and_world_result+
                                    $religion_subject_grade_result+
                                    $physics_result+
                                    $chemistry_result+
                                    $b_h_a_grade_result+
                                    $history_result+
                                    $geography_and_environment_result+
                                    $civics_or_economic_grade_result+
                                    $art_and_craft_result+
                                    $agriculture_or_home_eco_grade_result+
                                    $accounting_result+
                                    $finance_banking_result+
                                    $ict_result+
                                    $work_and_life_result+
                                    $business_enterprenior_result+
                                    $carrier_education_result+
                                    $b_h_a_e_grade_result+
                                    $physical_education_and_health_result;

                    
                            
                                $total_without_optional_result = $without_optional_result/14;

                            ?>
                               
                                <h4> <?php 
                                    if($total_without_optional_result == 5){
                                        echo '5.0';
                                    }elseif($total_without_optional_result == 4){
                                        echo '4.0';
                                    }elseif($total_without_optional_result == 3){
                                        echo '3.0';
                                    }elseif($total_without_optional_result == 2){
                                        echo '1.0';
                                    }elseif($total_without_optional_result == 1){
                                        echo '1.0';
                                    }elseif($total_without_optional_result == 0){
                                        echo '00';
                                    }else{
                                        echo round($total_without_optional_result, 2); }?> 
                                </h4>
                            </div>
                            <!--.end without_optional_result-->
                    
                </div>
                <!--.end without_optional_result-->
                
                
                <!--start without_optional_result-->
                    <div class="without_optional_result_title">
                        <p> ঐচ্ছিক বিষয়সহ জিপিএ </p>
                    </div>
                <!--.end without_optional_result--> 
                
                <?php } ?>
                

                <!--start without_optional_result-->
                    <div class="print">
                        <button onclick="print()">
                            প্রিন্ট করুন
                        </button>
                    </div>
                <!--.end without_optional_result-->                                 
                
                
                
            <!---------- ৬ষ্ঠ-৮ম শ্রেণীর ফলাফল ---------->

            <?php $class_for_pass_fail = get_post_meta(get_the_id(), "class_for_result", true);?>

            <?php if($class_for_pass_fail == '৬ষ্ঠ' || $class_for_pass_fail == '৭ম' || $class_for_pass_fail == '৮ম'){?>                 
             
                 <div class="fix optional_subject last_result">
                        <div class="fix optional_subject_title"><b> ফলাফল </b></div>

                        <!--start result_sheet_per_sub495ject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> 
                                                        
                        <?php if(
                            $bangla1_result == 0 ||                         // বাংলা ১ম পত্র 
                            $bangla1_result2 == 0 ||                        // বাংলা ২য় পত্র 
                            $english_result1 == 0 ||                        // ইংরেজি ১ম পত্র   
                            $english_result2 == 0 ||                        // ইংরেজি ২য় পত্র
                            $math_result == 0 ||                            // গণিত
                            $general_science_result == 0 ||                 // সাধারণ বিজ্ঞান 
                            $religion_subject_grade_result == 0 ||          // ইসলাম শিক্ষা/হিন্দু ধর্ম...
                            $agriculture_or_home_eco_grade_result == 0 ||   //  কৃষি শিক্ষা / গার্হস্থ্য অর্থনীতি
                            $bangladesh_and_world_result == 0 ||            // বাংলাদেশ ও বিশ্ব পরিচয়
                            $art_and_craft_result == 0 ||                   // চারু ও কারুকলা 
                            $physical_education_and_health_result == 0 ||   // শারীরিক শিক্ষা
                            $ict_result == 0 ||                             // তথ্য ও যোগাযোগ প্রযুক্তি
                            $work_and_life_result == 0                      // কর্ম ও জীবনমুখী শিক্ষা  
                                        
                            ){
                                echo 'অনুত্তীর্ণ';
                            }else{
                            echo 'উত্তীর্ণ';
                            } 
                        ?>
                            </span>
                            
                            
                            <span class="fix result_sheet_title"> 
                                <?php
                                    $without_optional_result = 
                                        $bangla1_result+
                                        $bangla1_result2+
                                        $english_result1+
                                        $english_result2+
                                        $math_result+
                                        $general_science_result+
                                        $bangladesh_and_world_result+
                                        $religion_subject_grade_result+
                                        $physics_result+
                                        $chemistry_result+
                                        $b_h_a_grade_result+
                                        $history_result+
                                        $geography_and_environment_result+
                                        $civics_or_economic_grade_result+
                                        $art_and_craft_result+
                                        $agriculture_or_home_eco_grade_result+
                                        $accounting_result+
                                        $finance_banking_result+
                                        $ict_result+
                                        $work_and_life_result+
                                        $business_enterprenior_result+
                                        $b_h_a_e_grade_result+
                                        $physical_education_and_health_result;

                                    $total_without_optional_result = $without_optional_result/13;

                                ?>          
                            
                                <h4>
                                    <?php 
                                        if($total_without_optional_result == 5){
                                            echo "5.0";
                                        }elseif($total_without_optional_result == 4){
                                            echo "4.0";
                                        }elseif($total_without_optional_result == 3){
                                            echo "3.0";
                                        }elseif($total_without_optional_result == 2){
                                            echo "1.0";
                                        }elseif($total_without_optional_result == 1){
                                            echo "1.0";
                                        }elseif($total_without_optional_result == 0){
                                            echo "0.0";
                                        }else{
                                            echo round($total_without_optional_result, 2); 
                                    }?> 
                                </h4> 
                                                                  
                            </span>
                            
                            
                            <span class="fix result_sheet_title"> 
                                <?php
                                    if($total_without_optional_result>=5){
                                        echo 'এ+';
                                    }elseif($total_without_optional_result>=4){
                                        echo 'এ';
                                    }elseif($total_without_optional_result>=3.5){
                                        echo 'এ-';
                                    }elseif($total_without_optional_result>=3.0){
                                        echo 'বি';
                                    }elseif($total_without_optional_result>=2.0){
                                        echo 'সি';
                                    }elseif($total_without_optional_result>=1.0){
                                        echo 'ডি';
                                    }
                                ?> 
                            </span>
                            
                            
                            
                        </div>
                        <!--.end result_sheet_per_subject-->
                </div>
                <!--.end result_sheet_per_subject-->
            <?php } ?>            
                
                
            <!---------- ৯ম-১০ম শ্রেণীর বিজ্ঞান বিভাগের ফলাফল ---------->

            <?php $class_for_pass_fail = get_post_meta(get_the_id(), "class_for_result", true);?>
            <?php $group_for_pass_fail = get_post_meta(get_the_id(), "oneGroup", true);?>  

            <?php if($class_for_pass_fail == '৯ম' || $class_for_pass_fail == '১০ম' &&  
                     $group_for_pass_fail == 'বিজ্ঞান' ){?>                 
             
                 <div class="fix optional_subject last_result">
                        <div class="fix optional_subject_title"><b> ফলাফল </b></div>

                        <!--start result_sheet_per_sub495ject-->
                        <div class="fix result_sheet_per_subject">
                            <span class="fix result_sheet_title"> 
                                                        
                        <?php if(
                            $bangla1_result == 0 ||                     // বাংলা ১ম পত্র 
                            $bangla1_result2 == 0 ||                    // বাংলা ২য় পত্র 
                            $english_result1 == 0 ||                    // ইংরেজি ১ম পত্র   
                            $english_result2 == 0 ||                    // ইংরেজি ২য় পত্র
                            $math_result == 0 ||                        // গণিত
                            $physics_result == 0 ||                     // পদার্থ বিজ্ঞান
                            $chemistry_result == 0 ||                   // রসায়ন 
                            $b_h_a_grade_result == 0 ||                 // জীব বিজ্ঞান / উচ্চতর গণিত / কৃষি শিক্ষা
                            $religion_subject_grade_result == 0 ||      // ইসলাম শিক্ষা/হিন্দু ধর্ম...
                            $bangladesh_and_world_result == 0 ||        // বাংলাদেশ ও বিশ্ব পরিচয়
                            $physical_education_and_health_result == 0 ||  // শারীরিক শিক্ষা
                            $ict_result == 0 ||                         // তথ্য ও যোগাযোগ প্রযুক্তি
                            $carrier_education_result == 0              // ক্যারিয়ার শিক্ষা 
                                        
                            ){
                                echo 'অনুত্তীর্ণ';
                            }else{
                            echo 'উত্তীর্ণ';
                            } 
                        ?>
                            </span>
                            
                            
                            
                            <span class="fix result_sheet_title"> 
                                <?php
                                    $without_optional_result = 
                                        $bangla1_result +
                                        $bangla1_result2 +
                                        $english_result1 +
                                        $english_result2 +
                                        $math_result +
                                        $physics_result +
                                        $chemistry_result +
                                        $b_h_a_grade_result +
                                        $religion_subject_grade_result +
                                        $bangladesh_and_world_result +
                                        $physical_education_and_health_result +
                                        $ict_result +
                                        $carrier_education_result;

                                    $total_without_optional_result = $without_optional_result/13;

                                ?>          
                            
                                <h4>
                                    <?php 
                                        if($total_without_optional_result == 5){
                                            echo "5.0";
                                        }elseif($total_without_optional_result == 4){
                                            echo "4.0";
                                        }elseif($total_without_optional_result == 3){
                                            echo "3.0";
                                        }elseif($total_without_optional_result == 2){
                                            echo "1.0";
                                        }elseif($total_without_optional_result == 1){
                                            echo "1.0";
                                        }elseif($total_without_optional_result == 0){
                                            echo "0.0";
                                        }else{
                                            echo round($total_without_optional_result, 2); 
                                    }?> 
                                </h4> 
                                                                  
                            </span>
                            
                            
                            <span class="fix result_sheet_title"> 
                                <?php
                                    if($total_without_optional_result>=5){
                                        echo 'এ+';
                                    }elseif($total_without_optional_result>=4){
                                        echo 'এ';
                                    }elseif($total_without_optional_result>=3.5){
                                        echo 'এ-';
                                    }elseif($total_without_optional_result>=3.0){
                                        echo 'বি';
                                    }elseif($total_without_optional_result>=2.0){
                                        echo 'সি';
                                    }elseif($total_without_optional_result>=1.0){
                                        echo 'ডি';
                                    }
                                ?> 
                            </span>
                            
                            
                            
                            
                        </div>
                        <!--.end result_sheet_per_subject-->
                </div>
                <!--.end result_sheet_per_subject-->
            <?php } ?>            
                
                
            <!---------- ৯ম-১০ম শ্রেণীর বাণিজ্য বিভাগের ফলাফল ---------->

            <?php $class_for_pass_fail = get_post_meta(get_the_id(), "class_for_result", true);?>
            <?php $group_for_pass_fail = get_post_meta(get_the_id(), "oneGroup", true);?>  

            <?php if($class_for_pass_fail == '৯ম' || $class_for_pass_fail == '১০ম' &&  
                     $group_for_pass_fail == 'বাণিজ্য' ){?>                 

             <div class="fix optional_subject last_result">
                    <div class="fix optional_subject_title"><b> ফলাফল </b></div>

                    <!--start result_sheet_per_sub495ject-->
                    <div class="fix result_sheet_per_subject">
                        <span class="fix result_sheet_title"> 

                    <?php if(
                        $bangla1_result == 0 ||                     // বাংলা ১ম পত্র 
                        $bangla1_result2 == 0 ||                    // বাংলা ২য় পত্র 
                        $english_result1 == 0 ||                    // ইংরেজি ১ম পত্র   
                        $english_result2 == 0 ||                    // ইংরেজি ২য় পত্র
                        $math_result == 0 ||                        // গণিত
                        $accounting_result == 0 ||                  // হিসাব বিজ্ঞান 
                        $finance_banking_result == 0 ||             // ফিন্যান্স, ব্যাংকিং ও বীমা 
                        $business_enterprenior_result == 0 ||       // ব্যবসা উদ্যোগ 
                        $religion_subject_grade_result == 0 ||      // ইসলাম শিক্ষা/হিন্দু ধর্ম...
                        $bangladesh_and_world_result == 0 ||        // বাংলাদেশ ও বিশ্ব পরিচয়
                        $physical_education_and_health_result == 0 ||  // শারীরিক শিক্ষা
                        $ict_result == 0 ||                         // তথ্য ও যোগাযোগ প্রযুক্তি
                        $carrier_education_result == 0              // ক্যারিয়ার শিক্ষা 

                        ){
                            echo 'অনুত্তীর্ণ';
                        }else{
                        echo 'উত্তীর্ণ';
                        } 
                    ?>
                        </span>
                        
                        
                        
                        <span class="fix result_sheet_title"> 
                                <?php
                                    $without_optional_result = 
                                        $bangla1_result +
                                        $bangla1_result2 +
                                        $english_result1 +
                                        $english_result2 +
                                        $math_result +
                                        $accounting_result +
                                        $finance_banking_result +
                                        $business_enterprenior_result +
                                        $religion_subject_grade_result +
                                        $bangladesh_and_world_result +
                                        $physical_education_and_health_result +
                                        $ict_result +
                                        $carrier_education_result;
                                        

                                    $total_without_optional_result = $without_optional_result/13;

                                ?>          
                            
                                <h4>
                                    <?php 
                                        if($total_without_optional_result == 5){
                                            echo "5.0";
                                        }elseif($total_without_optional_result == 4){
                                            echo "4.0";
                                        }elseif($total_without_optional_result == 3){
                                            echo "3.0";
                                        }elseif($total_without_optional_result == 2){
                                            echo "1.0";
                                        }elseif($total_without_optional_result == 1){
                                            echo "1.0";
                                        }elseif($total_without_optional_result == 0){
                                            echo "0.0";
                                        }else{
                                            echo round($total_without_optional_result, 2); 
                                    }?> 
                                </h4> 
                                                                  
                            </span>
                            
                            
                            <span class="fix result_sheet_title"> 
                                <?php
                                    if($total_without_optional_result>=5){
                                        echo 'এ+';
                                    }elseif($total_without_optional_result>=4){
                                        echo 'এ';
                                    }elseif($total_without_optional_result>=3.5){
                                        echo 'এ-';
                                    }elseif($total_without_optional_result>=3.0){
                                        echo 'বি';
                                    }elseif($total_without_optional_result>=2.0){
                                        echo 'সি';
                                    }elseif($total_without_optional_result>=1.0){
                                        echo 'ডি';
                                    }
                                ?> 
                            </span>
                        
                        
                        
                    </div>
                    <!--.end result_sheet_per_subject-->
            </div>
            <!--.end result_sheet_per_subject-->
        <?php } ?>            
               
                
            <!---------- ৯ম-১০ম শ্রেণীর মানবিক বিভাগের ফলাফল ---------->

            <?php $class_for_pass_fail = get_post_meta(get_the_id(), "class_for_result", true);?>
            <?php $group_for_pass_fail = get_post_meta(get_the_id(), "oneGroup", true);?>  

            <?php if($class_for_pass_fail == '৯ম' || $class_for_pass_fail == '১০ম' &&  
                     $group_for_pass_fail == 'মানবিক' ){?>                 

             <div class="fix optional_subject last_result">
                    <div class="fix optional_subject_title"><b> ফলাফল </b></div>

                    <!--start result_sheet_per_sub495ject-->
                    <div class="fix result_sheet_per_subject">
                        <span class="fix result_sheet_title"> 

                    <?php if(
                        $bangla1_result == 0 ||                     // বাংলা ১ম পত্র 
                        $bangla1_result2 == 0 ||                    // বাংলা ২য় পত্র 
                        $english_result1 == 0 ||                    // ইংরেজি ১ম পত্র   
                        $english_result2 == 0 ||                    // ইংরেজি ২য় পত্র
                        $math_result == 0 ||                        // গণিত
                        $history_result == 0 ||                     // ইতিহাস
                        $geography_and_environment_result == 0 ||   // ভুগোল ও পরিবেশ 
                        $civics_or_economic_grade_result == 0 ||    // পৌরনীতি এবং নাগরিকতা 
                        $religion_subject_grade_result == 0 ||      // ইসলাম শিক্ষা/হিন্দু ধর্ম...
                        $bangladesh_and_world_result == 0 ||        // বাংলাদেশ ও বিশ্ব পরিচয়
                        $physical_education_and_health_result == 0 ||  // শারীরিক শিক্ষা
                        $ict_result == 0 ||                         // তথ্য ও যোগাযোগ প্রযুক্তি
                        $carrier_education_result == 0              // ক্যারিয়ার শিক্ষা 

                        ){
                            echo 'অনুত্তীর্ণ';
                        }else{
                        echo 'উত্তীর্ণ';
                        } 
                    ?>
                        </span>
                        
                        <span class="fix result_sheet_title"> 
                                <?php
                                    $without_optional_result = 
                                        $bangla1_result +
                                        $bangla1_result2 +
                                        $english_result1 +
                                        $english_result2 +
                                        $math_result +
                                        $history_result +
                                        $geography_and_environment_result +
                                        $civics_or_economic_grade_result +
                                        $religion_subject_grade_result +
                                        $bangladesh_and_world_result +
                                        $physical_education_and_health_result +
                                        $ict_result +
                                        $carrier_education_result;

                                    $total_without_optional_result = $without_optional_result/13;

                                ?>          
                            
                                <h4>
                                    <?php 
                                        if($total_without_optional_result == 5){
                                            echo "5.0";
                                        }elseif($total_without_optional_result == 4){
                                            echo "4.0";
                                        }elseif($total_without_optional_result == 3){
                                            echo "3.0";
                                        }elseif($total_without_optional_result == 2){
                                            echo "1.0";
                                        }elseif($total_without_optional_result == 1){
                                            echo "1.0";
                                        }elseif($total_without_optional_result == 0){
                                            echo "0.0";
                                        }else{
                                            echo round($total_without_optional_result, 2); 
                                    }?> 
                                </h4> 
                                                                  
                            </span>
                            
                            
                            <span class="fix result_sheet_title"> 
                                <?php
                                    if($total_without_optional_result>=5){
                                        echo 'এ+';
                                    }elseif($total_without_optional_result>=4){
                                        echo 'এ';
                                    }elseif($total_without_optional_result>=3.5){
                                        echo 'এ-';
                                    }elseif($total_without_optional_result>=3.0){
                                        echo 'বি';
                                    }elseif($total_without_optional_result>=2.0){
                                        echo 'সি';
                                    }elseif($total_without_optional_result>=1.0){
                                        echo 'ডি';
                                    }
                                ?> 
                            </span>
                        
                        
                        
                        
                    </div>
                    <!--.end result_sheet_per_subject-->
            </div>
            <!--.end result_sheet_per_subject-->
        <?php } ?>        
               
                   
               
              <div class="clear"></div> 
              
              
                <!--start result_date_creator_head_sign-->
                <div class="fix result_date_creator_head_sign">
                    <!--start published_date_info-->
                    <div class="published_date_info">

                        <div class="fix date_of_publishing">
                           <?php the_field('result_published_date'); ?>
                        </div>
                        <div class="fix result_published_date">
                            <p> ফলাফর প্রকাশের তারিখ   </p>
                        </div><!--.end result_published_date-->

                    </div>
                    <!--.end published_date_info-->

                    <!--start published_date_info-->
                    <div class="published_date_info result_creator">

                        <div class="fix date_of_publishing">
                           <p> <?php the_field('result_creator');?>  </p>
                        </div>
                        <div class="fix result_published_date">
                            <p> ফলাফল তৈরি করেছেন   </p>
                        </div><!--.end result_published_date-->

                    </div>
                    <!--.end published_date_info-->

                    <!--start published_date_info-->
                    <div class="published_date_info head_signature">

                        <div class="fix date_of_publishing">
                          
                          <?php $sign_image = get_field('institure_head_sign'); ?>
                            <img src="<?php echo $sign_image['url']?>" alt="<?php echo $sign_image['alt']?>">

                        </div>
                        <div class="fix result_published_date">
                            <p> প্রধান শিক্ষকের স্বাক্ষর  </p>
                        </div><!--.end result_published_date-->

                    </div>
                    <!--.end published_date_info-->
                <!--.end result_date_creator_head_sign-->

            </div><!--.end result_date_creator_head_sign-->
        </div><!--.emd root_result-->
                       
                        
                