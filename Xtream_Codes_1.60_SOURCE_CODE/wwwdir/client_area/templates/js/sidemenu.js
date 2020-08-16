function launchFullscreen(element) {
  if(element.requestFullscreen) {
    element.requestFullscreen();
  } else if(element.mozRequestFullScreen) {
    element.mozRequestFullScreen();
  } else if(element.webkitRequestFullscreen) {
    element.webkitRequestFullscreen();
  } else if(element.msRequestFullscreen) {
    element.msRequestFullscreen();
  }
}

		$( document ).on( "pageinit", "#demo-page", function() {

			$( document ).on( "swipeleft swiperight", "#demo-page", function( e ) {
				// We check if there is no open panel on the page because otherwise
				// a swipe to close the left panel would also open the right panel (and v.v.).
				// We do this by checking the data that the framework stores on the page element (panel: open).
				if ( $.mobile.activePage.jqmData( "panel" ) !== "open" ) {
					if ( e.type === "swipeleft"  ) {
						$( "#right-panel" ).panel( "open" );
					} else if ( e.type === "swiperight" ) {
						$( "#left-panel" ).panel( "open" );
					}
				}
			});
		});
