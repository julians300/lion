// Navigation
$(document).ready(function(){
	$( "nav>ul,nav.bar>ul" ).after( "<a href='javascript:;' class='expand'><span class='hamburger'><span class='line'></span><span class='line'></span><span class='line'></span></span></a>" );
});
$(document).ready(function(){
  $("a.expand").click(function(){
    $(this).parent().toggleClass('expanded');
  });
});
// Alerts
$(document).ready(function(){
	$( ".alert" ).append( "<button class='close'></button>" );
});
$(document).ready(function(){
  $(".alert button.close").click(function(){
    // $(this).parent().toggleClass('closed');
    $(this).parent().fadeOut();
  });
});
// switches
$(document).ready(function(){
	$('.switch').not('.switch-disabled').click(function() {
		$(this).toggleClass('checked');
	});
});
// Tabs
$(document).ready(function(){


  $('.tabs-wrap .tabs .tab:first-child').addClass('current');
  $('.tabs-wrap .tabs-panes .tab-pane:first-child').addClass('current');

  $('.tabs-wrap .tabs .tab').click(function (){
    var dataTab = $(this).attr('data-tab');

    $('.tabs-wrap .tabs .tab').removeClass('current');
    $('.tabs-wrap .tabs-panes .tab-pane').removeClass('current');

    $(this).addClass('current');
    $('.tabs-wrap .tabs-panes .tab-pane[data-tab-pane="' + dataTab + '"]').addClass('current');
  });

});
