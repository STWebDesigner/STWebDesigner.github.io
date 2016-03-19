// JavaScript Document
setInterval(function() {
  var randNum = Math.floor(Math.random() * $('.social-icons img').length) +1
  $('.social-icons img').eq(randNum).addClass('animated tada');
  setTimeout(function() {
    $('.social-icons img').removeClass('animated tada');
  }, 2000);
}, 4000);

setInterval(function() {
  $('.menu img').addClass('animated tada');
  setTimeout(function() {
    $('.menu img').removeClass('animated tada');
  }, 1500);
}, 10000);