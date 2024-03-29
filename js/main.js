window.myspace = window.myspace || {}

//This uses the data-detail-select from #apartment_details ul
// to activate the content below it that is related to that tab
window.myspace.enableDetailsSwapEffect = function() {
    $(document).on('click', '#apartment_details ul li', function() {
        self = $(this);

        //Remove active from everything
        $('#apartment_details ul li, #apartment_details .details').removeClass('active');
        self.addClass('active');

        //Activate details
        details_selector = '#' + self.data('detail-select');
        $(details_selector).addClass('active');
    });
}

//
window.myspace.enableSidebarEffect = function() {
	$(document).on('click', '#sidebar .fa-bars', function() {
		console.log('keith');
		$('#sidebar').toggleClass('active');
	});
}

window.myspace.enableFrontTileEffect = function() {
	$(document).on('click', '.apartment_type', function() {
        self = $(this);
        
        $('.apartment_type').removeClass('active');

        self.addClass('active');
        $('#apartment_types').addClass('active');
    });
    $(document).on('click', '#footer', function() {
        $('.apartment_type, #apartment_types').removeClass('active');
    });

}