$( function(){
		$(".swipebox").swipebox({
		useCSS : true, // false will force the use of jQuery for animations
		hideBarsDelay : 0, // 0 to always show caption and action bar
	});
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

$( function(){
	var craneRand = Math.floor(Math.random() * 6);

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