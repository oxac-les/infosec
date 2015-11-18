$(function(){
	  
		/* these divs are hidden by javascript rather than css so that they remain visible if javascript is disabled  */
		$(".hideme").hide(); 
		
	  $.viewMap1 = {
		'0' : $([]),
		'adminstaff' : $('#adminstaff'),
		'nonadminstaff' : $('#nonadminstaff')	
	  };
	  	
	  $('#selectPers').change(function() {
          
		// hide all
		$.each($.viewMap1, function() { this.hide();
        });
          
		// show selected
		$.viewMap1[$(this).val()].show();
          
	  });
	  
	});


$(function(){
	  
		/* these divs are hidden by javascript rather than css so that they remain visible if javascript is disabled  */
		$(".hideme").hide(); 
		
	  $.viewMap2 = {
		'0' : $([]),
		'group1' : $('#group1'),
		'group2' : $('#group2'),
		'group3' : $('#group3'),
		'group4' : $('#group4'),
		'group5' : $('#group5'),
		'group6' : $('#group6'),	
		'group7' : $('#group7')	
	  };
	  	
	  $('#selectType').change(function() {
          
            // hide all
            $.each($.viewMap2, function() { this.hide();
            });

            // show selected
            $.viewMap2[$(this).val()].show();
            if($(this).val() !== 'group7') {
              $('#commonpart').show();
            } else {
              $('#commonpart').hide();
            }

          });
	  
        // show thank you
        $('.submitbutton').click(function(){
        $('#thanks').show();
		});
	});

