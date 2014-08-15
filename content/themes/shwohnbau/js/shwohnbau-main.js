//general scripts and functions available on global scope
function initHomeScreen(){
   var height = $(window).height();
    $('.home-header-section').css("height",height+"px");     
}

jQuery(document).ready(function ($) {
    initHomeScreen();
    //preload imgs and attach them
    $.preloadImgs($(".preload-img"));
    //register resize event
    var resize;
    $(window).resize(function() {
        clearTimeout(resize);
        resize = setTimeout(initHomeScreen(), 50);
    });
});