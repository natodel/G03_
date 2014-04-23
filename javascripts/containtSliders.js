$(document).ready(function() {
    $("#featured #thumb").tabs({
        fx: [{
                opacity: "toggle",
                duration: 'normal'
            }, {
                opacity: "toggle",
                duration: 'normal'
            }],
        show: function(event, ui) {
        }
    }).tabs("rotate", 3500, true);
    $('#featured #thumb').hover(function() {
        $('#featured #thumb').tabs('rotate', 0, true);
    }, function() {
        $('#featured #thumb').tabs('rotate', 3500, true);
    });

    $(function() {
        var t = $("#thumb"),
                u = $("#thumb  ul"),
                l = $("#thumb ul li"),
                p = 0,
                s = 0;
        l.each(function() {
            s += $(this).width();
        });
        u.css({
            width: s
        });
        $("#leftArrow").click(function() {
            p = p > 0 ? p - 280 : u.width() - t.width();
            t.animate({
                scrollLeft: p
            }, 800);
        });
        $("#rightArrow").click(function() {
            p = p + t.width() < u.width() ? p + 280 : 0;
            t.animate({
                scrollLeft: p
            }, 800);
        });
    });

});