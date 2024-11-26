<div class="slideshow-container border">
<div class="mySlides fade">
  <img src= "{{asset('images/output-6.jpg')}}"  style="width:100%"  height="100%" alt="1">
</div>

<div class="mySlides fade">
  <img src="{{asset('images/output-4.jpg') }}" style="width:100%" height="100%"  alt="2">
</div>

<div class="mySlides fade">
  <img src="{{asset('images/output-5.jpg') }}" style="width:100%" height="100%"  alt="3">
</div>

<div style="text-align:center;padding-top:10px;">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>

<script>
    let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" actives", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " actives";
  setTimeout(showSlides, 1650); // Change image every 2 seconds
}
    </script>