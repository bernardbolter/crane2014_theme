$(function(){
	 
	    // Configure the Spectragram plugin. Follow the instructions
	    // in the tutorial on how to generate an access token
	    jQuery.fn.spectragram.accessData = {
	        accessToken: '1642562.0d9946a.19cc93367c90426abb2418201de2bea3',
	        clientID: '0d9946a6e25c4fdfbbac0068972c629e'
	    };
 
	    // Run a search about 'coffee' on instagram
	    // and display the results
	    $('#gallery').spectragram('getUserFeed',{
	        query: 'evanzcrane',
	        max: 12,
	        size: 'big',
	        wrapEachWith: '<div class="instaBox"></div>'
    });
});

$( function(){
		$(".swipebox").swipebox({
		useCSS : true, // false will force the use of jQuery for animations
		hideBarsDelay : 0, // 0 to always show caption and action bar
	});
});

$( function(){
	var craneRand = Math.floor(Math.random()*5);

	function test() {
	console.log(craneRand);
	}

	test();
});