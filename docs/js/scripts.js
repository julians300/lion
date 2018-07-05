$('.table-of-contents ul li a, #hero .navbar-menu .navbar-dropdown a').click(function(e){
    var location = $(this).attr('href');
    $("html, body").animate({ scrollTop: $(location).offset().top }, 300);
    e.preventDefault();
});
