$(".tab_item").not(":first").hide();
$(".wrapper .tab").click(function() {
	$(".wrapper .tab").removeClass("active").eq($(this).index()).addClass("active");
	$(".tab_item").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("active");


$(".tab_item1").not(":first").hide();
$(".wrapper1 .tab1").click(function() {
	$(".wrapper1 .tab1").removeClass("active1").eq($(this).index()).addClass("active1");
	$(".tab_item1").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("active1");


$(".tab_item2").not(":first").hide();
$(".wrapper2 .tab2").click(function() {
	$(".wrapper2 .tab2").removeClass("active2").eq($(this).index()).addClass("active2");
	$(".tab_item2").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("active2");


$(".tab_item3").not(":first").hide();
$(".wrapper3 .tab3").click(function() {
	$(".wrapper3 .tab3").removeClass("active3").eq($(this).index()).addClass("active3");
	$(".tab_item3").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("active3");


$(".tab_item4").not(":first").hide();
$(".wrapper4 .tab4").click(function() {
	$(".wrapper4 .tab4").removeClass("active4").eq($(this).index()).addClass("active4");
	$(".tab_item4").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("active4");


$(".tab_item5").not(":first").hide();
$(".wrapper5 .tab5").click(function() {
	$(".wrapper5 .tab5").removeClass("active5").eq($(this).index()).addClass("active5");
	$(".tab_item5").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("active5");