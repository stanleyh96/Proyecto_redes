$('ul.tabs li a:first').addClass('active');
	$('.container-registros article').hide();
	$('.container-registros article:first').show();

	$('ul.tabs li a').click(function(){
		$('ul.tabs li a').removeClass('active');
		$(this).addClass('active');
		$('.container-registros article').hide();

		var activeTab = $(this).attr('href');
		$(activeTab).show();
		return false;
	});