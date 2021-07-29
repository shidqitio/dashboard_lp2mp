var tableOffset = $("#bawah").offset().top;
var $header = $("#bawah > thead").clone();
var $fixedHeader = $("#fixed-header").append($header);

$(window).bind("scroll", function() {
    var offset = $(this).scrollTop();
    
    if (offset >= tableOffset && $fixedHeader.is(":hidden")) {
        $fixedHeader.show();
    }
    else if (offset < tableOffset) {
        $fixedHeader.hide();
    }
});