/**
 * Created by xearts on 2019/01/20.
 */
$(function(){
    var footernav = $('.footer-nav');
    var footerbutton = $('#fadeInFix_AnchorTopButton');
    $(footernav).hide();

    //buttonをmouseoverしたとき、mouseoutしたときの指定
    $(footerbutton).mouseover(function () {
        $(footernav).show();
    });
    $(footerbutton).mouseout(function () {
        $(footernav).hide();
    });

    //navメニューをmouseoverしたとき、mouseoutしたときの指定
    $(footernav).mouseover(function(e) {
        $(footernav).show();
    });
    $(footernav).mouseout(function(e) {
        $(footernav).hide();
    });

});
