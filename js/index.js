var slideIndex = 0;
let slideDuration = 4000
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
  setTimeout(showSlides, slideDuration); // Change image every slideDuration seconds
}

function setLimit(v, target) {
  v = parseInt(v);
  v = Number.isNaN(v) ? 0 : v;
  target.value = v == 0 ? "" : v;
  document.getElementById('qty').value = v < 0 ? 1 : v;
}

function increase() {
  let element = document.getElementById('count');
  element.value = parseInt(element.value) + 1;
  document.getElementById('qty').value = element.value;
}

function decrease() {
  let element = document.getElementById('count');
  element.value = parseInt(element.value) - 1 <= 0 ? 1 : parseInt(element.value) - 1;
  document.getElementById('qty').value = element.value;
}

