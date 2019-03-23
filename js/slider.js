class Slider //Slider top of home page
 {
 constructor(){
  this.i =  0;
  this.items = $('.first-container div'); //retreive the image from the DOM
  this.progress = $('#progress progress');
  this.itemLength = this.items.length;
  this.autoSlideId = undefined;
  $(document).ready(this.autoSlide.bind(this));  //call the function when the page is ready
  $('.after').on("click", this.nextImage.bind(this));
  $('.before').on("click", this.previousImage.bind(this));
}

cycleItems(){
  var item = $('.first-container div').eq(this.i);//An indice is defined, we get i (=0 so the first image) into the var item
  this.items.hide();  //hide the other image
  item.css('display','inline-block');//Display the image we've retreived
}

changeImage() //There are two image a simple changing in the value of the progress bar is enough for get the result of a progress bar 
{
  this.i += 1; //increment the indice of 1 until the last picture
  this.progress.attr('value', '100');


  if (this.i > this.itemLength - 1) {
    this.i = 0;  //return at the beginning when we've called of all of the image
    this.progress.attr('value', '50');
  }
  this.cycleItems();

}

autoSlide() {
  if(!this.autoSlideId)//We call the set interval only if the slider isn't activate (avoid double click on play)
  {
    this.autoSlideId = setInterval(this.changeImage.bind(this), 3000);
  }
}

nextImage() //There are two image a simple changing in the value of the progress bar is enough for get the result of a progress bar
{
  clearInterval(this.autoSlideId);
  this.i += 1;
  this.progress.attr('value', '100');


  if (this.i > this.itemLength - 1) {
    this.i = 0;
    this.progress.attr('value', '50');
  }
  this.cycleItems();

  this.autoSlideId = undefined; //returns undefined to stop the slider

}

previousImage() {
  clearInterval(this.autoSlideId);
  this.i -= 1;
  this.progress.attr('value', '50');


  if (this.i < 0) {
    this.i = this.itemLength - 1;
        this.progress.attr('value', '100');

  }
  this.cycleItems();

  this.autoSlideId = undefined; //returns undefined to stop the slider

}

}

