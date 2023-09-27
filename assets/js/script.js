// Initialisation du plugin AOS
document.addEventListener("DOMContentLoaded", function () {
  AOS.init();
});

// Typewriter

let earthTypeWriterIndex = 0; // Variable pour suivre la position du texte de l'élément Terre
let waterTypeWriterIndex = 0; // Variable pour suivre la position du texte de l'élément Eau
let fireTypeWriterIndex = 0;
let earthTypeWriterTimeout; // Variable pour suivre le timeout de l'élément Terre
let waterTypeWriterTimeout; // Variable pour suivre le timeout de l'élément Eau
let fireTypeWriterTimeout;
let isEarthTyping = false; // Variable pour suivre l'état de l'animation de l'élément Terre
let isWaterTyping = false; // Variable pour suivre l'état de l'animation de l'élément Eau
let isFireTyping = false;

function createTypeWriter(text, speed, targetElementId, indexVariable, timeoutVariable, animationVariable) {
  const demoElement = document.getElementById(targetElementId);

  // Si l'animation est en cours, retournez sans rien faire
  if (animationVariable) {
    return;
  }

  if (demoElement) {
    demoElement.innerHTML = '';

    function addChar() {
      if (indexVariable < text.length) {
        demoElement.innerHTML += text.charAt(indexVariable);
        indexVariable++;

        if (indexVariable % 45 === 0) {
          demoElement.innerHTML += '<br>';
        }

        timeoutVariable = setTimeout(addChar, speed);
      } else {
        // L'animation est terminée
        animationVariable = false;
      }
    }

    animationVariable = true; // Marquez l'animation comme en cours
    addChar();
  }
}

  function EarthtypeWriter() {
    // Vérifiez si l'animation de l'élément Terre est déjà en cours
    if (isEarthTyping) {
      return;
    }
  
    const earthText =
    '"Je suis comme la Terre dans ma stabilité. Je reste calme et équilibré face aux défis de  la vie, et je peux compter sur ma constance   pour traverser les moments difficiles. Tout comme la Terre résiste aux secousses, je     résiste aux tempêtes émotionnelles et je     maintiens ma force intérieure."';
    const earthSpeed = 50;
  
    // Lancement de l'animation de l'élément Terre
    createTypeWriter(earthText, earthSpeed, 'demo', earthTypeWriterIndex, earthTypeWriterTimeout, isEarthTyping);
    isEarthTyping = true;
  }
  
  function WatertypeWriter() {
    // Vérifiez si l'animation de l'élément Eau est déjà en cours
    if (isWaterTyping) {
      return;
    }
  
    const waterText =
    '"Je suis comme l\'eau, fluide et adaptable.   Mon flux constant m\'aide à naviguer à travers les défis de la vie, tout comme l\'eau qui   suit son cours. Je suis doué pour m\'adapter  aux situations changeantes et maintenir ma    sérénité."';
    const waterSpeed = 50;
  
    // Lancement de l'animation de l'élément Eau
    createTypeWriter(waterText, waterSpeed, 'demo-water', waterTypeWriterIndex, waterTypeWriterTimeout, isWaterTyping);
    isWaterTyping = true;
  }

  function FiretypeWriter() {
    // Vérifiez si l'animation de l'élément Feu est déjà en cours
    if (isFireTyping) {
      return;
    }
  
    const fireText =
    '"Je suis comme le feu, passionné et énergique. Mon esprit ardent me pousse à poursuivre   mes objectifs avec une intensité inébranlable,  tout comme le feu qui brûle avec détermin-ation. Je suis capable de réchauffer les     cœurs des autres par ma présence chaleureuse et d\'insuffler de la vitalité dans toutes les situations."';    
    const fireSpeed = 50;
  
    // Lancement de l'animation de l'élément Eau
    createTypeWriter(fireText, fireSpeed, 'demo-fire', fireTypeWriterIndex, fireTypeWriterTimeout, isFireTyping);
    isFireTyping = true;
  }

  // Image Comparaison Slider

  function initComparisons() {
    var x, i;
    /* Find all elements with an "overlay" class: */
    x = document.getElementsByClassName("img-comp-overlay");
    for (i = 0; i < x.length; i++) {
      /* Once for each "overlay" element:
      pass the "overlay" element as a parameter when executing the compareImages function: */
      compareImages(x[i]);
    }
    function compareImages(img) {
      var slider, img, clicked = 0, w, h;
      /* Get the width and height of the img element */
      w = img.offsetWidth;
      h = img.offsetHeight;
      /* Set the width of the img element to 50%: */
      img.style.width = (w / 2) + "px";
      /* Create slider: */
      slider = document.createElement("DIV");
      slider.setAttribute("class", "img-comp-slider");
      /* Insert slider */
      img.parentElement.insertBefore(slider, img);
      /* Position the slider in the middle: */
      slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
      slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
      /* Execute a function when the mouse button is pressed: */
      slider.addEventListener("mousedown", slideReady);
      /* And another function when the mouse button is released: */
      window.addEventListener("mouseup", slideFinish);
      /* Or touched (for touch screens: */
      slider.addEventListener("touchstart", slideReady);
       /* And released (for touch screens: */
      window.addEventListener("touchend", slideFinish);
      function slideReady(e) {
        /* Prevent any other actions that may occur when moving over the image: */
        e.preventDefault();
        /* The slider is now clicked and ready to move: */
        clicked = 1;
        /* Execute a function when the slider is moved: */
        window.addEventListener("mousemove", slideMove);
        window.addEventListener("touchmove", slideMove);
      }
      function slideFinish() {
        /* The slider is no longer clicked: */
        clicked = 0;
      }
      function slideMove(e) {
        var pos;
        /* If the slider is no longer clicked, exit this function: */
        if (clicked == 0) return false;
        /* Get the cursor's x position: */
        pos = getCursorPos(e)
        /* Prevent the slider from being positioned outside the image: */
        if (pos < 0) pos = 0;
        if (pos > w) pos = w;
        /* Execute a function that will resize the overlay image according to the cursor: */
        slide(pos);
      }
      function getCursorPos(e) {
        var a, x = 0;
        e = (e.changedTouches) ? e.changedTouches[0] : e;
        /* Get the x positions of the image: */
        a = img.getBoundingClientRect();
        /* Calculate the cursor's x coordinate, relative to the image: */
        x = e.pageX - a.left;
        /* Consider any page scrolling: */
        x = x - window.pageXOffset;
        return x;
      }
      function slide(x) {
        /* Resize the image: */
        img.style.width = x + "px";
        /* Position the slider: */
        slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";
      }
    }
  }

  document.addEventListener("DOMContentLoaded", function () {
    initComparisons();
  });

// Script du Menu Burger
document.addEventListener("DOMContentLoaded", function () {
  const burger = document.querySelector(".burger");
  const nav = document.querySelector("nav");
  const menuLinks = document.querySelectorAll(".menu-link");

  burger.addEventListener("click", function () {
    nav.classList.toggle("nav-active");
    burger.classList.toggle("toggle");
  });

  menuLinks.forEach(function (link) {
    link.addEventListener("click", function () {
      nav.classList.remove("nav-active");
      burger.classList.remove("toggle");
    });
  });
});

// Swiper.js
const swiper = new Swiper(".mySwiper", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },
  autoplay: {
    delay: 2000,
    disableOnInteraction: true,
  },
});