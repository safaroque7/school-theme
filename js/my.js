(function($) {
      $(function() {
    $( "#datepicker" ).datepicker();
  });
    $("[name=className]").on("change", function(){
        var val = $(this).val();
        switch(val){
            case "৬ষ্ঠ": class6search(); break;           
            case "৭ম": class7search(); break;
            case "৮ম": class8search(); break;
            case "৯ম": class9search(); break;
            case "১০ম": class10search(); break;
      }
    });
    
    function class6search(){
        $('.jq_division_name').hide();
        $('#divisionName_6_8').removeAttr('required');
        $('.jq_section_name').show();
    };
    function class7search(){
        $('.jq_division_name').hide();
        $('#divisionName_6_8').removeAttr('required');
        $('.jq_section_name').show();
    };
    function class8search(){
        $('.jq_division_name').hide();
        $('#divisionName_6_8').removeAttr('required');
        $('.jq_section_name').show();
    };
    function class9search(){
        $('.jq_section_name').hide();
        $('#section_name_6_8').removeAttr('required');
        $('.jq_division_name').show();
    };
    function class10search(){
        $('.jq_section_name').hide();
        $('#section_name_6_8').removeAttr('required');
        $('.jq_division_name').show();
    };

/* slider js */
$('.bxslider').bxSlider({
	auto: true,
	pause: 1000,
	speed: 2000,
	mode: 'fade'
});

/* notish slider */
$('.notish1').bxSlider({
    minSlides: 2,
    maxSlides: 2,
    moveSlides: 1,
    slideMargin: 10,
	auto:true,
	controls: false,
    pager: true,
	speed: 8000,
    pause: 6000,
    mode:'vertical'
});

/* notish slider */
$('.notish2').bxSlider({
    minSlides: 1,
    maxSlides: 5,
    moveSlides: 1,
    slideMargin: 10,
	auto:true,
	speed: 1000,
    pause: 6000,
});

/* gallery */
  $('.slider5').bxSlider({
    slideWidth: 186,
    minSlides: 1,
    maxSlides: 5,
    moveSlides: 1,
    slideMargin: 10,
	auto: true,
	speed:1000,
    pager:false
  });
    
    $(".r_menu").click(function(){
        $(".school_menu").slideToggle()
    })
  
	$('.middle_news').bxSlider({
		slideWidth: 600,
		slideheight: 30,
		minSlides: 1,
		maxSlides: 1,
		moveSlides: 1,
		auto:true,
		controls:false,
		speed:12000,
		pause: 4000,
	});
    
    
    $(".plus").click(function(){
        $(this).hide();
        $(this).next().show();
        $(this).parent().parent().next(".routine").slideToggle();
    });
    
    $(".minus").click(function(){
        $(this).hide();
        $(this).prev().show();
        $(this).parent().parent().next(".routine").slideToggle();
    });
    
       
	   
function goToDate(){
    var monthLocation=document.forms["e_paper_form"]["month_field"].value;
    var yearLocation=document.forms["e_paper_form"]["year_field"].value;
    location.href="http://localhost/oxford/"+yearLocation+"/"+monthLocation+"/"+dayLocation+"/e_paper";
}	   
	   
})(jQuery);