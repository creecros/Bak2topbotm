/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#scrollBtn').fadeIn();
    } else {
        $('#scrollBtn').fadeOut();
    }
});
$(document).ready(function() {
    $("#scrollBtn").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
 /*Scroll to top when arrow up clicked END*/
