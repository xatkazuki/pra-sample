/**
 * Created by xearts on 2019/01/20.
 */

$(function() {
    var dropdown = $('.dropdown');
    $('li', dropdown)
        .mouseover(function(e) {
            $('ul', this).stop().slideDown('fast');
        })
        .mouseout(function(e) {
            $('ul', this).stop().slideUp('fast');
        });
});
