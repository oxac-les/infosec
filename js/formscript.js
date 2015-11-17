      $(function(){
	  
		/* these divs are hidden by javascript rather than css so that they remain visible if javascript is disabled  */
		$(".hideme").hide(); 
		
	  $.viewMap = {
		'0' : $([]),
		'group1' : $('#group1'),
		'group2' : $('#group2'),
		'group3' : $('#group3'),
		'group4' : $('#group4'),
		'group5' : $('#group5'),
		'group6' : $('#group6')		
	  };
	  	
	  $('#selectType').change(function() {
		// hide all
		$.each($.viewMap, function() { this.hide(); });
		// show current
		$.viewMap[$(this).val()].show();
	  });
	  
	  // show thank you
	  $('.submitbutton').click(function(){
			$('#thanks').show();
		});
	});