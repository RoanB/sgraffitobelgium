// Toggle the advanced filtering
function toggle_advanced(e) {
	$('#filter-card').toggleClass('d-none');
	$('#small-search').toggleClass('d-none');
	$('#result-card').toggleClass('col-12');
	$('#result-card').toggleClass('col-lg-9');

	advanced = false;
	if ($('#filter-card').hasClass('d-none') == false) {
		advanced = true;
	}

	$.post("/?action=set_advanced", {advanced: advanced}, function () {},
		"json"
	);
}

