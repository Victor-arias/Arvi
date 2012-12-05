var _rys = jQuery.noConflict();
_rys("document").ready(function(){
    _rys(window).scroll(function () {
        if (_rys(this).scrollTop() > 335) {
            _rys('body').addClass("f-nav");
        } else {
            _rys('body').removeClass("f-nav");
        }
    });

});