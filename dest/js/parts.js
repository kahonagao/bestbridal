//------------------------------------------
//  accordion
//------------------------------------------

$('.accordion .inner:first-child dt').addClass('active').next().show();
$(".accordion dt").click(function () {
  $(this).toggleClass('active')
  $('+ dd', this).slideToggle();
});


//------------------------------------------
//  scroll top
//------------------------------------------

$(function () {
  var topBtn = $('#pageTop');
  topBtn.hide();

  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });

  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 500);
    return false;
  });
});

//------------------------------------------
//  tab
//------------------------------------------

$(function () {
  $('.tabPanel').hide();
  $('.tabPanel').eq(0).show();
  $('.tabBtn').eq(0).addClass('tabActive');

  $('.tabBtn').each(function () {
    $(this).on('click', function () {
      var index = $('.tabBtn').index(this);
      $('.tabBtn').removeClass('tabActive');
      $(this).addClass('tabActive');
      $('.tabPanel').hide();
      $('.tabPanel').eq(index).show();
    });
  });

});


//------------------------------------------
//  viewport
//------------------------------------------

(function () {
  var ua = {
    iPhone: navigator.userAgent.indexOf('iPhone') != -1,
    iPad: navigator.userAgent.indexOf('iPad') != -1,
    iPod: navigator.userAgent.indexOf('iPod') != -1,
    android: navigator.userAgent.indexOf('Android') != -1,
    windows: navigator.userAgent.indexOf('Windows Phone') != -1
  }
  if (ua.iPhone || ua.iPod || ua.android || ua.windows) {
    document.write('<meta name="viewport" content="width=320, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0,">\n');

  } else {}
}());


//------------------------------------------
//  img hover
//------------------------------------------


$('.imgHover').hover(function () {
  if (winWidth_qs >= 3) {
    $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
  }
}, function () {
  if (!$(this).hasClass('current')) {
    $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
  }
});
