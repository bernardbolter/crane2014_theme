$(document).ready(function(){
		$(".swipebox").swipebox({
		useCSS : true, // false will force the use of jQuery for animations
		hideBarsDelay : 0, // 0 to always show caption and action bar
	});
});

$(document).ready(function(){
	if ($(window).width() > 400 ) {
		$(".press_link").mouseover(function() {
			$( '.press_image', this ).css('opacity', '1');
			$( '.press_link_wrap', this ).css('opacity', '0');
			$( '.press_link_label', this ).css('opacity', '1');
		});

		$(".press_link").mouseout(function() {
			$( '.press_image', this ).css('opacity', '0.6');
			$( '.press_link_wrap', this ).css('opacity', '1');
			$( '.press_link_label', this ).css('opacity', '0.6');
		});
	}
});

$(document).ready(function(){
	var userFeed = new Instafeed({
        get: 'user',
        userId: 283821243,
        accessToken: '283821243.467ede5.d9009ee57fc943abbb9d0eaad27642dd',
        limit: 12,
        resolution: 'low_resolution',
        template: '<div class="instafeed_image"><a href="{{link}}" class="insta_link_img"><img src="{{image}}" /></a></div>'
    });
    userFeed.run();
 });