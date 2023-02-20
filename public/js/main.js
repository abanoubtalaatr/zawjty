let thumbnails = document.getElementsByClassName("thumbnail");
let slider = document.getElementById("slider");

let buttonRight = document.getElementById("slide-right");
let buttonLeft = document.getElementById("slide-left");

buttonLeft.addEventListener("click", function () {
  slider.scrollLeft -= 125;
});

buttonRight.addEventListener("click", function () {
  slider.scrollLeft += 125;
});

const maxScrollLeft = slider.scrollWidth - slider.clientWidth;
// alert(maxScrollLeft);
// alert("Left Scroll:" + slider.scrollLeft);

//AUTO PLAY THE SLIDER
function autoPlay() {
  if (slider.scrollLeft > maxScrollLeft - 1) {
    slider.scrollLeft -= maxScrollLeft;
  } else {
    slider.scrollLeft += 1;
  }
}
let play = setInterval(autoPlay, 50);

// PAUSE THE SLIDE ON HOVER
for (var i = 0; i < thumbnails.length; i++) {
  thumbnails[i].addEventListener("mouseover", function () {
    clearInterval(play);
  });

  thumbnails[i].addEventListener("mouseout", function () {
    return (play = setInterval(autoPlay, 50));
  });
}
// creating love heart
$(document).ready(function () {
  $(".like-user").click(function () {
    $(this).toggleClass("heart-user");
  });
});

// Dark & Light Mode
var checkbox = document.querySelector("input[name=mode]");
checkbox.addEventListener("change", function () {
  if (this.checked) {
    trans();
    document.documentElement.setAttribute("data-theme", "dark");
  } else {
    trans();
    document.documentElement.setAttribute("data-theme", "light");
  }
});

let trans = () => {
  document.documentElement.classList.add("transition");
  window.setTimeout(() => {
    document.documentElement.classList.remove("transition");
  }, 1000);
};

$(".btn-slid").click(function () {
  $(this).toggleClass("click");
  $(".slidbar-menu").toggleClass("show");
});
