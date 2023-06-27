
//Si le Dom est chargé : lancer les script de skroll, fade et slide
document.addEventListener('DOMContentLoaded', function () {
    
    var fadeSections = document.querySelectorAll('.fade-in-section');

    var slideH2 = document.querySelectorAll('.slide-in'); // Prend tous les "slide-in"

    const clouds = document.querySelector('.big-cloud');

  
    var skrollrInstance = skrollr.init();//Skroll.js pour parallax sur les nuages (se deplacent sur la gauche)
  
  
    function checkFadeSections() {

      fadeSections.forEach(function(section) {

        var sectionTop = section.getBoundingClientRect().top;

        var windowHeight = window.innerHeight;
  
        if (sectionTop < windowHeight * 0.8) {

          section.classList.add('show');
        }
      });
    }
  
    function checkSlideH2() {

      slideH2.forEach(function(slide) {

        var slideTop = slide.getBoundingClientRect().top;
  
        var windowHeight = window.innerHeight;
   
        if (slideTop < windowHeight * 0.8) {

          slide.classList.add('slide-in');

        } else {

          slide.classList.remove('slide-in');
        }
      });
    }
  
    function checkClouds(){
  
    const clouds = document.querySelector('.big-cloud');
  
    var cloudsTop = clouds.getBoundingClientRect().top;
  
    var windowHeight = window.innerHeight;
  
    /*console.log(cloudsTop, windowHeight); */

    }
  
    // Appeler les fonctions checkFadeSections et checkSlideH2 lorsque la page est chargée
    checkFadeSections();
  
    // Appeler les fonctions checkFadeSections et checkSlideH2 lorsque la page est défilée
    window.addEventListener('scroll', function() {

      checkFadeSections();

      checkSlideH2();

      checkClouds();
  
    });
  });