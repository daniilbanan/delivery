function hideFooter () {
    var header = $('.header')
    if($('header').scrollTop >=100) {
        $('header').css("opacity", "0");
    } else {
        $('header').css("opacity", "1");
    }
}