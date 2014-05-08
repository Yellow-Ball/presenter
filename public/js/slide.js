var Presenter = {

	// Default Options
	lastUpdate: {
		slideCount: 0,
		client_id: 0
	},

	initiatePoll: function(){
		Presenter.getResponse( Presenter.handleRequest );
	},

	/**
	 * Make the request to the server and then pass the result to the data handler
	 */
	getResponse: function( callback ){
		var cb = callback;
		$.ajax({
			url: '/slides',
			type: 'GET',
			success: function( data ){
				if( typeof cb === "function" )
				{
					cb(data);
				}
				else
				{
					alert('Issue with application, pleaase contact a developer');
				}

				// Request a new set of slide data every 10 seconds
				setTimeout( Presenter.initiatePoll, 5000 );
			},
			dataType: 'json'
		})
	},

	/**
	 * Handle the data being passed back from the ajax request
	 */
	handleRequest: function( data ){
		if( Presenter.isNewerData( data ) )
		{
			Presenter.updateSlides(data);
			Presenter.updateLast(data);
		}
		else
		{
			console.log('No Newer Data Found');
		}
	},

	/**
	 * Check if the slide data is newer than data from before
	 */
	updateSlides: function( data ){
		var images = data.images;
		var newContainer = $('<div class="slides"></div>');

		// Append the new container to the body.
		newContainer.appendTo('.reveal').hide();

		// Inject the new slides into our container
		$(images).each(function(index, item){
			newContainer.append('<section data-background="' + item.filepath + '">&nbsp;</section>');
		});

		// Fade out the old slides
		$('.slides:first').fadeOut(1000, function(){
			Presenter.terminateReveal();

			// When the fadeOut is complete
			$('.slides:first').remove();

			// fadeIn our new slides
			$('.slides').fadeIn(1000, function(){

				// Initiate Reveal on our new set of slides
				Presenter.initiateReveal();
			});
		});
	},

	/**
	 * Update latest slide data information
	 */
	isNewerData: function( data ){

		if( data.images.length != Presenter.lastUpdate.slideCount )
		{
			return true;
		}

		if( data.client_id != Presenter.lastUpdate.client_id )
		{
			return true;
		}
	},

	/**
	 * Update the lastUpdate variable to check next time
	 */
	updateLast: function( data ){
		Presenter.lastUpdate.slideCount = data.images.length;
		Presenter.lastUpdate.client_id = data.client_id;
	},

	/**
	 * Initiate Reveal
	 */
	initiateReveal: function( ){
		Reveal.initialize({

		    // The "normal" size of the presentation, aspect ratio will be preserved
		    // when the presentation is scaled to fit different resolutions. Can be
		    // specified using percentage units.
		    width: '100%',
		    height: '100%',

		    // Factor of the display size that should remain empty around the content
		    margin: 0.0,

		    // Bounds for smallest/largest possible scale to apply to content
		    minScale: 0.2,
		    maxScale: 1.0,

		    controls: false,
		    slideNumber: false,
		    progress: false,
		    loop: true,

			autoSlide: 5000,
			autoSlideStoppable: false
		});
	},

	/**
	 * Terminate reveal.js as to enable it again
	 */
	terminateReveal: function( ){
		if( Reveal.loaded )
		{
			Reveal.removeEventListeners();
		}
	},
};

Presenter.initiateReveal();
Presenter.initiatePoll();