// Initialisation du plugin AOS
document.addEventListener("DOMContentLoaded", function () {
  AOS.init();
});

// Image Comparaison Slider

function initComparisons() {
  var x, i;
  x = document.getElementsByClassName("img-comp-overlay");
  for (i = 0; i < x.length; i++) {
    compareImages(x[i]);
  }
  function compareImages(img) {
    var slider, img, clicked = 0, w, h;
    w = img.offsetWidth;
    h = img.offsetHeight;
    img.style.width = (w / 2) + "px";
    slider = document.createElement("DIV");
    slider.setAttribute("class", "img-comp-slider");
    img.parentElement.insertBefore(slider, img);
    slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
    slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
    slider.addEventListener("mousedown", slideReady);
    window.addEventListener("mouseup", slideFinish);
    slider.addEventListener("touchstart", slideReady);
    window.addEventListener("touchend", slideFinish);
    function slideReady(e) {
      e.preventDefault();
      clicked = 1;
      window.addEventListener("mousemove", slideMove);
      window.addEventListener("touchmove", slideMove);
    }
    function slideFinish() {
      clicked = 0;
    }
    function slideMove(e) {
      var pos;
      if (clicked == 0) return false;
      pos = getCursorPos(e)
      if (pos < 0) pos = 0;
      if (pos > w) pos = w;
      slide(pos);
    }
    function getCursorPos(e) {
      var a, x = 0;
      e = (e.changedTouches) ? e.changedTouches[0] : e;
      a = img.getBoundingClientRect();
      x = e.pageX - a.left;
      x = x - window.pageXOffset;
      return x;
    }
    function slide(x) {
      img.style.width = x + "px";
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

// Filtre des langages dans la page de tous les projets

document.addEventListener('DOMContentLoaded', function () {
  const filterButtons = document.querySelectorAll('.filter-buttons button');
  filterButtons.forEach(function (button) {
      button.addEventListener('click', function () {
          const filter = this.getAttribute('data-filter');
          filterProjects(filter);

          filterButtons.forEach(function (btn) {
              btn.classList.remove('selected');
          });
          
          this.classList.add('selected');
      });
  });

  function filterProjects(filter) {
      const projectBlocks = document.querySelectorAll('.project-block');
      projectBlocks.forEach(function (block) {
          block.style.display = 'none';
      });
      if (filter === 'all') {
          projectBlocks.forEach(function (block) {
              block.style.display = 'block';
          });
      } else {
          const filteredBlocks = document.querySelectorAll('.project-block.' + filter);
          filteredBlocks.forEach(function (block) {
              block.style.display = 'block';
          });
      }

      const container = document.querySelector('.projects-grid');
      const visibleProjects = document.querySelectorAll('.project-block[style="display: block;"]');
      const visibleProjectsArray = Array.from(visibleProjects);
      visibleProjectsArray.forEach(function (project) {
          container.appendChild(project);
      });
  }
});
