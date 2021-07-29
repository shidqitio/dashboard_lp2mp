//for adjusting gap between table header and table content, other wise the thead and tbody text not align with properly because '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom.
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  var scrollWidth = $('.tbl-content-1').width() - $('.tbl-content-1 table').width();
  var scrollWidth = $('.tbl-content-2').width() - $('.tbl-content-2 table').width();
  var scrollWidth = $('.tbl-content-4').width() - $('.tbl-content-4 table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
  $('.tbl-header-1').css({'padding-right':scrollWidth});
  $('.tbl-header-2').css({'padding-right':scrollWidth});
  $('.tbl-header-4').css({'padding-right':scrollWidth});
}).resize();



