$(document).ready(function() {
	$('.img').on('click', function () {
		$('#slider').toggleClass('active');
		$('#all').toggleClass('active');
	})
	$(document).ready(function() {
			$('.slider').slick({
				arrows: false,
			});
	});
	$('#all').on('click', function () {
		$('#slider').toggleClass('active');
		$('#all').toggleClass('active');
	})
})