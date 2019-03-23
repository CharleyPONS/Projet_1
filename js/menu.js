class Menu //Change the style of the active tab of the menu
{
  constructor(){
    this.container = $(".activemenu li a");
    this.secondContainer = $("#navigation2 li a");
    this.thirdContainer = $("#navigation2 li a");
    this.container.on("click", this.activeFirstMenu(this));
    this.secondContainer.on("click", this.activeSecondMenu(this));
    this.thirdContainer.on("click", this.activeSecondMenuArrow(this));

  }

  activeFirstMenu()//Mangage the style of the header menu
  {
    this.container.on("click", function(){
     $(".activemenu li a").removeClass("activeFirstMenu");
     $(this).addClass("activeFirstMenu");

   })
  }

  activeSecondMenu()//Manage the style of the portfolio menu
  {
    this.secondContainer.on("click", function(){
      $("#navigation2 li a").removeClass("active2menu");
      $(this).addClass("active2menu");

    })

  }
  activeSecondMenuArrow()//Manage the adding of the arrow behind the menu
  {
    this.thirdContainer.on("click", function(){
      $("#navigation2 li div").removeClass("arrowdown");
      $(this).next().addClass("arrowdown");//We use next() for cibling the next element of the current object
    })
  }

}