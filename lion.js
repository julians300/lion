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