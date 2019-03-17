class Menu {
  constructor(){
    this.container = $(".activemenu li a");
    this.secondContainer = $("#navigation2 li a");
    this.thirdContainer = $("#navigation2 div");
    this.container.on("click", this.activeFirstMenu(this));
    //avec .bind sa ne fonctionne pas alors qu'en enlecvant bind et en mettant this en parametre de la
    // fonction sa marche or this n'etait pas defintit en parametre de la methode explication??
    this.secondContainer.on("click", this.activeSecondMenu(this));
    this.thirdContainer.on("click", this.activeSecondMenuArrow(this));

  }

  activeFirstMenu(){
    this.container.on("click", function(){
     $(".activemenu li a").removeClass("activeFirstMenu");
     $(this).addClass("activeFirstMenu");

   })
  }

  activeSecondMenu(){
    this.secondContainer.on("click", function(){
      $("#navigation2 li a").removeClass("active2menu");
      $(this).addClass("active2menu");

    })

  }
  activeSecondMenuArrow(){
    this.thirdContainer.on("click", function(){
      $("#navigation2 div").removeClass("activeMenuArrow");
      $(this).next().addClass("activeMenuArrow");
    })
  }

}