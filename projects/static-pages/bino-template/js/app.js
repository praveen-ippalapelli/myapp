/*window.onscroll = function() {header_scroll()};
function header_scroll() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
  	alert("kdjfkj");
  } else {

  }
}*/

let rc_all_html = document.querySelectorAll('.rc');
let rc_print_html = document.querySelectorAll('.rc-print'); 
let rc_animation_html = document.querySelectorAll('.rc-animation'); 
let rc_art_html = document.querySelectorAll('.rc-art'); 
let rc_webdesign_html = document.querySelectorAll('.rc-webdesign'); 
let rc_photography_html = document.querySelectorAll('.rc-photography'); 
let rc_video_html = document.querySelectorAll('.rc-video'); 

$('#pills-all-tab').click( () => {
	$('.rc-row-all').html(rc_all_html);
});
$('#pills-print-tab').click( () => {
	$('.rc-row-print').html(rc_print_html);
});
$('#pills-animation-tab').click( () => {
	$('.rc-row-animation').html(rc_animation_html);
});
$('#pills-art-tab').click( () => {
	$('.rc-row-art').html(rc_art_html);
});
$('#pills-webdesign-tab').click( () => {
	$('.rc-row-webdesign').html(rc_webdesign_html);
});
$('#pills-photography-tab').click( () => {
	$('.rc-row-photography').html(rc_photography_html);
});
$('#pills-video-tab').click( () => {
	$('.rc-row-video').html(rc_video_html);
});


window.onscroll = function() {scrollFunction()};
scroll_no = 3000;
function scrollFunction() {
  if (document.body.scrollTop > scroll_no || document.documentElement.scrollTop > scroll_no) {
  	console.log('more than 20');
  } else {
    /*console.log('less than 20');*/
  }
}
start_social_count();
function start_social_count(){
	let count_no1 = 0, count_no2 = 0, count_no3 = 0, count_no4 = 0, count_no5 = 0;
	let count_no1_limit = 200, count_no2_limit = 190, count_no3_limit = 300, count_no4_limit = 150, count_no5_limit = 250;
	$( document ).ready(function() {
		setInterval(function(){
			if (count_no1 <= count_no1_limit) {
				$('.count_no1').text(count_no1++);
			}
			if (count_no2 <= count_no2_limit) {
				$('.count_no2').text(count_no2++);
			}
			if (count_no3 <= count_no3_limit) {
				$('.count_no3').text(count_no3++);
			}
			if (count_no4 <= count_no4_limit) {
				$('.count_no4').text(count_no4++);
			}
			if (count_no5 <= count_no5_limit) {
				$('.count_no5').text(count_no5++);
			}
		}, 10);
	});
}





