var app = {};

app.hamburger = function () {
$('.btn-open').on('click', function (e) {
  e.preventDefault();
  $('.overlayMenu').fadeIn(400).show();
});
$('.fa-times').on('click', function (e) {
  e.preventDefault();
  $('.overlayMenu').fadeOut(400).hide();
});
};

app.init = function() {
	app.hamburger();
};

$(function(){
	app.init();
	console.log("It's working");


});