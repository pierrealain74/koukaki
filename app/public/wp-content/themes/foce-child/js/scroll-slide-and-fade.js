//Animations de fade pour les section et les slide des titres
//avec scroll

var fadeSections = document.querySelectorAll(".fade-in-section");
var slideH2 = document.querySelectorAll(".toSlide");
const bigcloud = document.querySelector(".big-cloud");
const littlecloud = document.querySelector(".little-cloud");

////////////////////////////////
function checkFadeSections() {
  fadeSections.forEach(function (section) {
    var sectionTop = section.getBoundingClientRect().top;

    var windowHeight = window.innerHeight;

    if (sectionTop < windowHeight * 0.8) {
      section.classList.add("show");
    }
  });
}
///////////////////////////
function checkSlideH2() {
  slideH2.forEach(function (slide) {
    var slideTop = slide.getBoundingClientRect().top;

    var windowHeight = window.innerHeight;

    if (slideTop < windowHeight * 0.8) {
      slide.classList.add("slide-in");
    } else {
      slide.classList.remove("slide-in");
    }
  });
}
function checkClouds() {
  var cloudsTop = bigcloud.getBoundingClientRect().top;

  var cloudXpos = bigcloud.getBoundingClientRect().x;

  console.log("posx : ", cloudXpos);

  var windowHeight = window.innerHeight;

  if (cloudsTop < windowHeight * 0.8) {
    //console.log('posx : ', cloudXpos);
    //console.log('cloud top : ', cloudsTop);

    var scrollPercentage = cloudsTop / windowHeight;
    var decal = -300 + 300 * scrollPercentage;

    //console.log('decal : ', decal)

    bigcloud.style.transform = "translateX(" + decal + "px)";
    littlecloud.style.transform = "translateX(" + decal + "px)";
  } else {
    console.log("fin nuage");
    //bigcloud.classList.remove('slide-left');
  }
}

window.addEventListener("scroll", function () {
  checkFadeSections();
  checkSlideH2();
  checkClouds();
});
