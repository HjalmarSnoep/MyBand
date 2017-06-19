$(document).ready(function(){

	$('.mobile-icon').click( function() {
		$('nav ul').toggleClass("showing");
	});

});

function switchClass(i) {
   var lis = $('#home-news > div');
   lis.eq(i).removeClass('home_header_on');
   lis.eq(i).removeClass('home_header_out');
    lis.eq(i = ++i % lis.length).addClass('home_header_on');
    lis.eq(i = ++i % lis.length).addClass('home_header_out');
    setTimeout(function() {
        switchClass(i);
    }, 3500);
}

$(window).on('load', function(){
	   switchClass(-1);
});

//SCROLL TO TOP BUTTON
jQuery(document).ready(function($){
 var offset = 300,
	 offset_opacity = 1200,
	 scroll_top_duration = 700,
	 $back_to_top = $('.cd-top');

 $(window).scroll(function(){
	 ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
	 if( $(this).scrollTop() > offset_opacity ) {
		 $back_to_top.addClass('cd-fade-out');
	 }
 });

 $back_to_top.on('click', function(event){
	 event.preventDefault();
	 $('body,html').animate({
		 scrollTop: 0 ,
		 }, scroll_top_duration
	 );
 });

});
