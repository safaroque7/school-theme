<?php
function change_default_title( $title ){
    $screen = get_current_screen();

    // For notice
    if  ( 'notice' == $screen->post_type ) {
        $title = 'এখানে নোটিশের হেডিং লিখুন...';

    // For mainslider
    } elseif ( 'mainslider' == $screen->post_type ) {
        $title = 'এখানে স্লাইডারের হেডিং লিখুন...';

    // For newsevent
    } elseif ( 'newsevent' == $screen->post_type ) {
        $title = 'এখানে নিউজ ও ইভেন্টের হেডিং লিখুন...';
    
    // For donation
    } elseif ( 'donation' == $screen->post_type ) {
        $title = 'এখানে আজীবন দাতা সদস্যের নাম লিখুন...';
        
    // For presidentlist
    } elseif ( 'presidentlist' == $screen->post_type ) {
        $title = 'এখানে সভাপতি সাহেবের নাম লিখুন...';
        
    // For committeelist
    } elseif ( 'committeelist' == $screen->post_type ) {
        $title = 'এখানে কমিটির সভাপতি/সাধারণ সম্পাদক/সম্পাদক/সদস্যদের নাম লিখুন...';
        
    // For teacherinformation
    } elseif ( 'teacherinformation' == $screen->post_type ) {
        $title = 'এখানে শিক্ষকের নাম লিখুন...';
        
    // For officeassistance
    } elseif ( 'officeassistance' == $screen->post_type ) {
        $title = 'এখানে কর্মচারীর নাম লিখুন...';
        
    // For Vacancies
    } elseif ( 'vacancies' == $screen->post_type ) {
        $title = 'এখানে শূন্যপদের নাম লিখুন...';
        
    // For teacher rule
    } elseif ( 'teacherrule' == $screen->post_type ) {
        $title = 'এখানে শিক্ষকদের জন্য নিয়ম-কানুন লিখুন...';
        
    // For student rule
    } elseif ( 'studentrule' == $screen->post_type ) {
        $title = 'এখানে শিক্ষার্থীদের জন্য নিয়ম-কানুন লিখুন...';
        
    // For student rule
    } elseif ( 'peonrule' == $screen->post_type ) {
        $title = 'এখানে কর্মচারীদের জন্য নিয়ম-কানুন লিখুন...';
        
    // For student rule
    } elseif ( 'headmasterlist' == $screen->post_type ) {
        $title = 'এখানে প্রধান শিক্ষকের নাম লিখুন......';
        
    // For class 6
    } elseif ( 'class6' == $screen->post_type ) {
        $title = 'এখানে ষষ্ঠ শ্রেণির শিক্ষার্থীর নাম লিখুন...';
        
    // For class 7
    } elseif ( 'class7' == $screen->post_type ) {
        $title = 'এখানে সপ্তম শ্রেণীর শিক্ষার্থীর নাম লিখুন...';
        
    // For class 8
    } elseif ( 'class8' == $screen->post_type ) {
        $title = 'এখানে অষ্টম শ্রেণির শিক্ষার্থীর নাম লিখুন...';
        
    // For class 9
    } elseif ( 'class9' == $screen->post_type ) {
        $title = 'এখানে নবম শ্রেণির শিক্ষার্থীর নাম লিখুন...';
        
    // For class 10
    } elseif ( 'class10' == $screen->post_type ) {
        $title = 'এখানে দশম শ্রেণির শিক্ষার্থীর নাম লিখুন...';
        
    // For admissionnotice
    } elseif ( 'admissionnotice' == $screen->post_type ) {
        $title = 'এখানে ভর্তি বিজ্ঞপ্তির শিরোনাম লিখুন...';
        
    // For prospectus
    } elseif ( 'prospectus' == $screen->post_type ) {
        $title = 'এখানে প্রসপেক্টাসের হেডিং লিখুন...';
        
    // For admission from
    } elseif ( 'admissionfrom' == $screen->post_type ) {
        $title = 'এখানে ভর্তি ফরম ডাউনলোডের লিংক দিন...';
        
    // For otherform
    } elseif ( 'otherform' == $screen->post_type ) {
        $title = 'এখানে অন্যান্য ফরমের নাম লিখুন...'; 
        
    // For academicresult half annual 
    } elseif ( 'academicresult' == $screen->post_type ) {
        $title = 'এখানে শ্রেণির নাম লিখুন...'; 
        
    // For academicresult annual 
    } elseif ( 'academicresultannul' == $screen->post_type ) {
        $title = 'এখানে শ্রেণির নাম লিখুন...'; 
        
    // For admission result
    } elseif ( 'admissionresult' == $screen->post_type ) {
        $title = 'এখানে শ্রেণির নাম লিখুন...'; 
        
    // For text kink
    } elseif ( 'textlink' == $screen->post_type ) {
        $title = 'এখানে ওয়েবসাইটের নাম লিখুন...'; 
    
    // For founder
    } elseif ( 'founder' == $screen->post_type ) {
        $title = 'এখানে প্রতিষ্ঠাতার নাম লিখুন'; 
        
    // For start school time
    } elseif ( 'startschooltime' == $screen->post_type ) {
        $title = 'এখানে শিরোনাম লিখুন'; 
        
    // For name of exam
    } elseif ( 'exammonth' == $screen->post_type ) {
        $title = 'এখানে শিরোনাম লিখুন'; 
        
    // For name of exam
    } elseif ( 'exammonth10' == $screen->post_type ) {
        $title = 'এখানে শিরোনাম লিখুন'; 
        
    // For class 6 text book
    } elseif ( 'class6textbook' == $screen->post_type ) {
        $title = 'এখানে লিখুন ষষ্ঠ শ্রেণি'; 
        
    // For class 7 text book
    } elseif ( 'class7textbook' == $screen->post_type ) {
        $title = 'এখানে লিখুন সপ্তম শ্রেণি'; 
        
    // For class 8 text book
    } elseif ( 'class8textbook' == $screen->post_type ) {
        $title = 'এখানে লিখুন অষ্টম শ্রেণি'; 
        
    // For class 9 text book
    } elseif ( 'class9textbook' == $screen->post_type ) {
        $title = 'এখানে লিখুন নবম শ্রেণি'; 
    
    // For class 10 text book
    } elseif ( 'class10textbook' == $screen->post_type ) {
        $title = 'এখানে লিখুন দশম শ্রেণি'; 
        
    // For headmaster
    } elseif ( 'headmaster' == $screen->post_type ) {
        $title = 'এখানে শিরোনাম লিখুন'; 
        
    // For class routine for 6
    } elseif ( 'classroutine6' == $screen->post_type ) {
        $title = 'এখানে বারের নাম লিখুন'; 
        
    // For class routine for 7
    } elseif ( 'classroutine7' == $screen->post_type ) {
        $title = 'এখানে বারের নাম লিখুন'; 
        
    // For class routine for 8
    } elseif ( 'classroutine8' == $screen->post_type ) {
        $title = 'এখানে বারের নাম লিখুন'; 
        
    // For class routine for 9 science
    } elseif ( 'class9science' == $screen->post_type ) {
        $title = 'এখানে বারের নাম লিখুন'; 
        
    // For class routine for 9 business
    } elseif ( 'class9business' == $screen->post_type ) {
        $title = 'এখানে বারের নাম লিখুন'; 
        
    // For class routine for 9 business
    } elseif ( 'class9business' == $screen->post_type ) {
        $title = 'এখানে বারের নাম লিখুন'; 
        
    // For class routine for 9 arts
    } elseif ( 'class9arts' == $screen->post_type ) {
        $title = 'এখানে বারের নাম লিখুন'; 
        
    // For class routine for 10 science
    } elseif ( 'class10science' == $screen->post_type ) {
        $title = 'এখানে বারের নাম লিখুন'; 
        
    // For class routine for 10 business
    } elseif ( 'class10business' == $screen->post_type ) {
        $title = 'এখানে বারের নাম লিখুন'; 
        
    // For class routine for 10 arts
    } elseif ( 'class10arts' == $screen->post_type ) {
        $title = 'এখানে বারের নাম লিখুন'; 
        
    // For present
    } elseif ( 'present' == $screen->post_type ) {
        $title = 'এখানে ইংরেজিতে তারিখ লিখুন এভাবে--- 28/12/2015'; 
        
    // For present
    } elseif ( 'contentp' == $screen->post_type ) {
        $title = 'এখানে কনটেন্ট/প্রকাশনার হেডিং লিখুন'; 
        
    // For bkash
    } elseif ( 'bkash' == $screen->post_type ) {
        $title = 'এখানে বিকাশ/মাইকেশ/মোবিকেশের নাম্বার লিখুন। যেমন ০১৯১৫-***** (বিকাশ), ০১৯১৫-******(মাইেকেশ) '; 
    
    // For paymentrule
    } elseif ( 'paymentrule' == $screen->post_type ) {
        $title = 'এখানে নিয়ম-কানুন লিখুন'; 
        
    // For photogellary
    } elseif ( 'photogellary' == $screen->post_type ) {
        $title = 'এখানে ফটোগ্যালারির অ্যালবামের ক্যাপশন লিখুন'; 
        
    // For videogellary
    } elseif ( 'videogellary' == $screen->post_type ) {
        $title = 'এখানে ভিডিও গ্যালারির নাম লিখুন'; 
        
    // For videogellary
    } elseif ( 'featured' == $screen->post_type ) {
        $title = 'এখানে সুবিধা বিভাগের শিরোনাম লিখুন'; 
        
    // For videogellary
    } elseif ( 'fee' == $screen->post_type ) {
        $title = 'এখানে ফী এর নাম লিখুন... যেমন মাসিক ফী, বিভিন্ন পরীক্ষার ফী...'; 
    
    // For videogellary
    } elseif ( 'successfullStudent' == $screen->post_type ) {
        $title = 'এখানে কৃতি শিক্ষার্থীর নাম লিখুন...'; 
        
    }
    return $title;
}

add_filter( 'enter_title_here', 'change_default_title' );
?>