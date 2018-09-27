
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#topBtn').fadeIn();
    } else {
        $('#topBtn').fadeOut();
    }
});
$(document).ready(function() {
    $("#topBtn").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});


$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#bottomBtn').fadeOut();
    } else {
        $('#bottomBtn').show();
    }
});
$(document).ready(function() {
    $("#bottomBtn").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: $("section.b_section").offset().top }, "slow");
        return false;
    });

});

