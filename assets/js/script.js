
var asideTogglr = $('a#asidetogglr');
var sidemenu = $('#sidemenu');

var portWidth = document.documentElement.clientWidth;
var portHeight = document.documentElement.clientHeight;

$(document).ready(function(){
  if(portWidth <= 768){
    console.log(portWidth)
    sidemenu.addClass('collapsed');
  }
});

asideTogglr.on('click', function () {
  sidemenu.toggleClass('collapsed');
  if(sidemenu.hasClass('collapsed')){
    $('li.dd>ul').hide();
    $('.powered-text').hide();
    $('.powered-logo').addClass('collapsed');
  } else{
    $('.powered-text').show();
    $('.powered-logo').removeClass('collapsed');
  }
})