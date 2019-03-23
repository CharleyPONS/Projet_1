
//Part who manage the image who gonna be display or not in fonction of the active tab 
$(".nav-display-all-works").on("click", function(){

  $(".portfolio .boximage1").css("display", "block");
});

$(".nav-display-creative").on("click", function(){

  $(".creative-item").css("display", "block");
  $(".corporate-item, .portfoliofolio-item ").css("display", "none");

});

$(".nav-display-corporate").on("click", function(){

  $(".corporate-item").css("display", "block");
  $(".creative-item, .portfoliofolio-item ").css("display", "none");

});

$(".nav-display-portfolio").on("click", function(){

  $(".portfoliofolio-item").css("display", "block");
  $(".corporate-item, .creative-item ").css("display", "none");

});
