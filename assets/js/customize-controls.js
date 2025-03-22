( function( api ) {

	// Extends our custom "lawn-care" section.
	api.sectionConstructor['lawn-care'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );