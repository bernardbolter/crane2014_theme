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

// pruduction code for random image homepage

$(document).ready(function(){
	var craneRand = Math.floor(Math.random() * 10);

	if(craneRand === 0) {
		$(".homepage_right").replaceWith( ('<div class="homepage_right">
				<a href="http://evanzcrane.com/six-legs-bench">
				<p class="home_image_text">SIX LEGS BENCH</p>
				<div class="home_image_hr"></div>
				<img src="http://evanzcrane.com/wp-content/themes/crane2014_theme/gfx/gallery/six-legs-bench/bench_square_lg.jpg" />
				</a>
				</div>') );
	}

	else if(craneRand === 1) {
		$(".homepage_right").replaceWith( ('<div class="homepage_right">
				<a href="http://evanzcrane.com/captains-chair">
				<p class="home_image_text">CAPTAIN\'S CHAIR</p>
				<div class="home_image_hr"></div>
				<img src="http://evanzcrane.com/wp-content/themes/crane2014_theme/gfx/gallery/captains-chair/captains-chair_square.jpg" />
				</a>
				</div>') );
	}

	else if(craneRand === 2) {
		$(".homepage_right").replaceWith( ('<div class="homepage_right">
				<a href="http://evanzcrane.com/splayed-star-table">
				<p class="home_image_text">SPLAYED STAR TABLE</p>
				<div class="home_image_hr"></div>
				<img src="http://evanzcrane.com/wp-content/themes/crane2014_theme/gfx/gallery/splayed-star-table/splayed-star-table_square.jpg" />
				</a>
				</div>') );
	}

	else if(craneRand === 3) {
		$(".homepage_right").replaceWith( ('<div class="homepage_right">
				<a href="http://evanzcrane.com/column-bench">
				<p class="home_image_text">COLUMN BENCH</p>
				<div class="home_image_hr"></div>
				<img src="http://evanzcrane.com/wp-content/themes/crane2014_theme/gfx/gallery/column-bench/column-bench_square.jpg" />
				</a>
				</div>') );
	}

	else if(craneRand === 4) {
		$(".homepage_right").replaceWith( ('<div class="homepage_right">
				<a href="http://evanzcrane.com/column-table">
				<p class="home_image_text">COLUMN TABLE</p>
				<div class="home_image_hr"></div>
				<img src="http://evanzcrane.com/wp-content/themes/crane2014_theme/gfx/gallery/column-table/column-table_square.jpg" />
				</a>
				</div>') );
	}

	else if(craneRand === 5) {
		$(".homepage_right").replaceWith( ('<div class="homepage_right">
				<a href="http://evanzcrane.com/high-back-chair">
				<p class="home_image_text">HIGH BACK CHAIR</p>
				<div class="home_image_hr"></div>
				<img src="http://evanzcrane.com/wp-content/themes/crane2014_theme/gfx/gallery/high-back-chair/high-back-chair_square.jpg" />
				</a>
				</div>') );
	}

	else if(craneRand === 6) {
		$(".homepage_right").replaceWith( ('<div class="homepage_right">
				<a href="http://evanzcrane.com/creature-credenza">
				<p class="home_image_text">CREATURE CREDENZA</p>
				<div class="home_image_hr"></div>
				<img src="http://evanzcrane.com/wp-content/themes/crane2014_theme/gfx/gallery/creature-credenza/creature-credenza_square.jpg" />
				</a>
				</div>') );
	}

	else if(craneRand === 7) {
		$(".homepage_right").replaceWith( ('<div class="homepage_right">
				<a href="http://evanzcrane.com/fuzzy-captain">
				<p class="home_image_text">THE FUZZY CAPTAIN</p>
				<div class="home_image_hr"></div>
				<img src="http://evanzcrane.com/wp-content/themes/crane2014_theme/gfx/gallery/fuzzy-captain/fuzzy-captain_square.jpg" />
				</a>
				</div>') );
	}

	else if(craneRand === 8) {
		$(".homepage_right").replaceWith( ('<div class="homepage_right">
				<a href="http://evanzcrane.com/big-smile-chair">
				<p class="home_image_text">BIG SMILE CHAIR</p>
				<div class="home_image_hr"></div>
				<img src="http://evanzcrane.com/wp-content/themes/crane2014_theme/gfx/gallery/big-smile-chair/big-smile-chair_square.jpg" />
				</a>
				</div>') );
	}

	else if(craneRand === 9) {
		$(".homepage_right").replaceWith( ('<div class="homepage_right">
				<a href="http://evanzcrane.com/ball-nose-coffee-table">
				<p class="home_image_text">BALL NOSE COFFEE TABLE</p>
				<div class="home_image_hr"></div>
				<img src="http://evanzcrane.com/wp-content/themes/crane2014_theme/gfx/gallery/ball-nose-coffee-table/ball-nose-coffee-table_square.jpg" />
				</a>
				</div>') );
	}
});

/*  random image, local testing

$( function(){
	var craneRand = Math.floor(Math.random() * 6);

	if(craneRand === 0) {
		$(".homepage_right").replaceWith( ('<div class="homepage_right">
				<a href="/evanzcrane/six-legs-bench">
				<p class="home_image_text">SIX LEGS BENCH</p>
				<div class="home_image_hr"></div>
				<img src="/evanzcrane/wp-content/themes/crane2014_theme/gfx/gallery/six-legs-bench/bench_square_lg.jpg" />
				</a>
				</div>') );
	}

	else if(craneRand === 1) {
		$(".homepage_right").replaceWith( ('<div class="homepage_right">
				<a href="/evanzcrane/captains-chair">
				<p class="home_image_text">CAPTAIN\'S CHAIR</p>
				<div class="home_image_hr"></div>
				<img src="/evanzcrane/wp-content/themes/crane2014_theme/gfx/gallery/captains-chair/captains-chair_square.jpg" />
				</a>
				</div>') );
	}

	else if(craneRand === 2) {
		$(".homepage_right").replaceWith( ('<div class="homepage_right">
				<a href="/evanzcrane/splayed-star-table">
				<p class="home_image_text">SPLAYED STAR TABLE</p>
				<div class="home_image_hr"></div>
				<img src="/evanzcrane/wp-content/themes/crane2014_theme/gfx/gallery/splayed-star-table/splayed-star-table_square.jpg" />
				</a>
				</div>') );
	}

	else if(craneRand === 3) {
		$(".homepage_right").replaceWith( ('<div class="homepage_right">
				<a href="/evanzcrane/column-bench">
				<p class="home_image_text">COLUMN BENCH</p>
				<div class="home_image_hr"></div>
				<img src="/evanzcrane/wp-content/themes/crane2014_theme/gfx/gallery/column-bench/column-bench_square.jpg" />
				</a>
				</div>') );
	}

	else if(craneRand === 4) {
		$(".homepage_right").replaceWith( ('<div class="homepage_right">
				<a href="/evanzcrane/column-table">
				<p class="home_image_text">COLUMN TABLE</p>
				<div class="home_image_hr"></div>
				<img src="/evanzcrane/wp-content/themes/crane2014_theme/gfx/gallery/column-table/column-table_square.jpg" />
				</a>
				</div>') );
	}

	else if(craneRand === 5) {
		$(".homepage_right").replaceWith( ('<div class="homepage_right">
				<a href="/evanzcrane/high-back-chair">
				<p class="home_image_text">HIGH BACK CHAIR</p>
				<div class="home_image_hr"></div>
				<img src="/evanzcrane/wp-content/themes/crane2014_theme/gfx/gallery/high-back-chair/high-back-chair_square.jpg" />
				</a>
				</div>') );
	}

	function test() {
	console.log(craneRand);
	}

	test();
});

*/