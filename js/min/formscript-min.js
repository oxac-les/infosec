$(function(){$(".hideme").hide(),$.viewMap1={0:$([]),adminstaff:$("#adminstaff"),nonadminstaff:$("#nonadminstaff")},$("#selectPers").change(function(){$.each($.viewMap1,function(){this.hide()}),$.viewMap1[$(this).val()].show()})}),$(function(){$(".hideme").hide(),$.viewMap2={0:$([]),group1:$("#group1"),group2:$("#group2"),group3:$("#group3"),group4:$("#group4"),group5:$("#group5"),group6:$("#group6"),group7:$("#group7")},$("#selectType").change(function(){$.each($.viewMap2,function(){this.hide()}),$.viewMap2[$(this).val()].show(),"group7"!==$(this).val()?$("#commonpart").show():$("#commonpart").hide()}),$(".submitbutton").click(function(){$("#thanks").show()})});