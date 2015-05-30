var SlideImageCount	=	0;
var imageObject='';
var pathArr	=	['Template/web/images/Advert/1.jpg','Template/web/images/Advert/2.jpg','Template/web/images/Advert/3.jpg'];
$(function(){
	$('.slider').each(function(){
		imageObject		=	$(this).find('img');
		changeSliderImage();
	})
});

var changeSliderImage	= function(){
	setTimeout(function(){
		$(imageObject).attr('src',pathArr[SlideImageCount]);
		SlideImageCount++;
		if(SlideImageCount == pathArr.length)
			SlideImageCount	=	0;
		changeSliderImage();
	},5000000);
};