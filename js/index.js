var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

function setLimit(v, target) {
  console.log(v)
  v = parseInt(v)
  console.log(v)
  if(v<0){
    target.value=0;
  }
}

function increase() {
  let element = document.getElementById('count');
  element.value = parseInt(element.value) + 1;
}

function decrease() {
  let element = document.getElementById('count');
  element.value = parseInt(element.value) - 1 < 0 ? 0 : parseInt(element.value) - 1;
}