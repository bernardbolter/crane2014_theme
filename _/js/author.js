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