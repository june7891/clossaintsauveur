window.onscroll = function() {scrollFunction()};



function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-120px";
  }
}


//collapse navbar onClick a href
$('.navbar-nav>li>a').on('click', function(){
  $('.navbar-collapse').collapse('hide');
  });