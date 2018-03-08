// Navigation
$(document).ready(function(){
	$( "nav.nav ul.menu" ).after( "<a href='javascript:;' class='expand'><span class='hamburger'><span class='line'></span><span class='line'></span><span class='line'></span></span></a>" );
});
$(document).ready(function(){
  $("a.expand").click(function(){
    $(this).parent().toggleClass('expanded');
  });
});

$(document).ready(function(){
  $(".navbar-item.hamburger").click(function(){
    $(this).toggleClass('expanded');
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
//dropdown
$(document).ready(function(){
  // If a link has a dropdown, add sub menu toggle.
  $('nav.nav ul li a:not(:only-child)').click(function(e) {
    $(this).siblings('ul').toggleClass('visable')
    // Close one dropdown when selecting another
    $('ul.visable').not($(this).siblings()).removeClass('visable');
    e.stopPropagation();
    e.preventDefault();
  });
  // Clicking away from dropdown will remove the dropdown class
  $('html').click(function() {
    $('ul.visable').removeClass('visable');
  });
});