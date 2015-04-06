$(function(){
  $("#js-pageTop").click(function(){
    $("body,html").animate({
      scrollTop:0
    },300);
    return false;
  });
});

$(function(){
  $('#js-navOpen').click(function(){
    $('.globalNav__list').animate({
      'marginRight':'0',
      'marginLeft':'-100%'
    });
  });
  $('#js-navClose').click(function(){
    $('.globalNav__list').animate({
      'marginLeft':'100%',
      'marginRight':'0'
    });
  });
});