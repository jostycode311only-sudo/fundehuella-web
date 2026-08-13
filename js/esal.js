$(document).ready(function () {
    $(window).resize(function () {
//        if ($(window).width() > 767) {
//            $('embed').height($(window).height() - 152);
////            $('body').css({'margin-bottom': '50px'});
//        } else {
//            $('embed').height($(window).height() - 90);
////            $('body').css({'margin-bottom': '0px'});
//        }
        $('embed').height($(window).height() - 90);
    });
    $(window).trigger("resize");
});