var foreground = document.querySelectorAll(".fg");

function hide(hbHeight) {
  for (i = 0; i < foreground.length; i++) {
    foreground[i].style.transition = "transform 0.5s ease";
    foreground[i].style.transform = `translateY(0px)`;
  }
}
function show(hbHeight) {
  for (i = 0; i < foreground.length; i++) {
    foreground[i].style.transition = "transform 0.5s ease";
    foreground[i].style.transform = `translateY(${hbHeight}px)`;
  }
}
function sliderHB() {
  var hbHeight = document.getElementById("hb").clientHeight;
  // hide hamburger menu
  if (foreground[0].style.transform == `translateY(${hbHeight}px)`) {
    hide(hbHeight);
    document.getElementById("topLine").classList.add("topLine");
    document.getElementById("topLine").classList.remove("topLineActive");
    document.getElementById("middleLine").classList.remove("middleLine");
    document.getElementById("bottomLine").classList.add("bottomLine");
    document.getElementById("bottomLine").setAttribute("x1", `25`);
    document.getElementById("bottomLine").classList.remove("bottomLineActive");
    // show hamburger menu
  } else {
    show(hbHeight);
    document.getElementById("topLine").classList.remove("topLine");
    document.getElementById("topLine").classList.add("topLineActive");
    document.getElementById("middleLine").classList.add("middleLine");
    document.getElementById("bottomLine").classList.remove("bottomLine");
    document.getElementById("bottomLine").setAttribute("x1", `3`);
    document.getElementById("bottomLine").classList.add("bottomLineActive");
  }
}

// Slider on index
/* variables */
const slideContainer = document.querySelector(".slides");
const slides = slideContainer.querySelectorAll(".slide");

let slideCount = 0;
slides.forEach((slide) => {
  slideCount = slideCount + 1;
});

const slide = document.getElementById("slide-1");
const nextBtn = document.getElementById("next-btn");
const prevBtn = document.getElementById("prev-btn");
let slideWith = 0;
index = 0;

if (window.innerWidth > 742.5) {
  slideWidth = slide.clientWidth + 12;
} else {
  slideWidth = Math.max(
    document.documentElement.clientWidth || 0,
    window.innerWidth || 0
  );
}

/* Moving the slides with an ease or not */
function moveSlides(ease) {
  slideContainer.style.transform = `translate3d(${
    -slideWidth * index
  }px, 0, 0)`;
  if (ease == "none") {
    slideContainer.style.transition = "none";
  } else {
    slideContainer.style.transition = "0.5s ease";
  }
}

function prevInactive() {
  document.getElementById("arrow-prev-line").style.stroke = "#F2ECDE";
  document.getElementById("arrow-prev-path").style.stroke = "#F2ECDE";
  prevBtn.classList.remove("hover");
}
function prevActive() {
  document.getElementById("arrow-prev-line").style.stroke = "#6734B7";
  document.getElementById("arrow-prev-path").style.stroke = "#6734B7";
  prevBtn.classList.add("hover");
}
function nextInactive() {
  document.getElementById("arrow-next-line").style.stroke = "#F2ECDE";
  document.getElementById("arrow-next-path").style.stroke = "#F2ECDE";
  nextBtn.classList.remove("hover");
}
function nextActive() {
  document.getElementById("arrow-next-line").style.stroke = "#6734B7";
  document.getElementById("arrow-next-path").style.stroke = "#6734B7";
  nextBtn.classList.add("hover");
}

if (index <= 0) {
  prevInactive();
  nextActive();
}

const moveToNextSlide = () => {
  prevActive();
  if (window.innerWidth > 742.5) {
    if (index >= slideCount - 3) {
      nextInactive();
    }
    if (index == slideCount - 2) {
      return;
    } else {
      index++;
      moveSlides("ease");
    }
  } else {
    if (index >= slideCount - 2) {
      nextInactive();
    }
    if (index == slideCount - 1) {
      return;
    } else {
      index++;
      moveSlides("ease");
    }
  }
};

const moveToPreviousSlide = () => {
  nextActive();
  if (index <= 1) {
    prevInactive();
  }
  if (index <= 0) {
    return;
  } else {
    index--;
    moveSlides("ease");
  }
};

/* couple buttons to functions */
nextBtn.addEventListener("click", moveToNextSlide);
prevBtn.addEventListener("click", moveToPreviousSlide);

// Slider on mogelijkheden/about
/* variables */
const anymigoslideContainer = document.querySelector(".anymigoslides");

const anymigoSlides = anymigoslideContainer.querySelectorAll(".anymigoslide");

let anymigoSlideCount = 0;
anymigoSlides.forEach((slide) => {
  anymigoSlideCount = anymigoSlideCount + 1;
});

const anymigoslide = document.getElementById("anymigoslide-1");
const anymigonextBtn = document.getElementById("anymigonext-btn");
const anymigoprevBtn = document.getElementById("anymigoprev-btn");
let anymigoslideWidth = 0;
anymigoindex = 0;

anymigoslideWidth = anymigoslide.clientWidth + 12;

/* Moving the slides with an ease or not */
function anymigomoveSlides(ease) {
  anymigoslideContainer.style.transform = `translate3d(${
    -anymigoslideWidth * anymigoindex
  }px, 0, 0)`;
  if (ease == "none") {
    anymigoslideContainer.style.transition = "none";
  } else {
    anymigoslideContainer.style.transition = "0.5s ease";
  }
}

function anymigoprevInactive() {
  document.getElementById("anymigoarrow-prev-line").style.stroke = "#F2ECDE";
  document.getElementById("anymigoarrow-prev-path").style.stroke = "#F2ECDE";
  anymigoprevBtn.classList.remove("hover");
}
function anymigoprevActive() {
  document.getElementById("anymigoarrow-prev-line").style.stroke = "#6734B7";
  document.getElementById("anymigoarrow-prev-path").style.stroke = "#6734B7";
  anymigoprevBtn.classList.add("hover");
}
function anymigonextInactive() {
  document.getElementById("anymigoarrow-next-line").style.stroke = "#F2ECDE";
  document.getElementById("anymigoarrow-next-path").style.stroke = "#F2ECDE";
  anymigonextBtn.classList.remove("hover");
}
function anymigonextActive() {
  document.getElementById("anymigoarrow-next-line").style.stroke = "#6734B7";
  document.getElementById("anymigoarrow-next-path").style.stroke = "#6734B7";
  anymigonextBtn.classList.add("hover");
}

if (anymigoindex <= 0) {
  anymigoprevInactive();
  anymigonextActive();
}

const anymigomoveToNextSlide = () => {
  anymigoprevActive();
  if (window.innerWidth > 1293) {
    if (anymigoindex >= anymigoSlideCount - 4) {
      anymigonextInactive();
    }
    if (anymigoindex == anymigoSlideCount - 3) {
      return;
    } else {
      anymigoindex++;
      anymigomoveSlides("ease");
    }
  } else if (window.innerWidth > 742.5) {
    if (anymigoindex >= anymigoSlideCount - 3) {
      anymigonextInactive();
    }
    if (anymigoindex == anymigoSlideCount - 2) {
      return;
    } else {
      anymigoindex++;
      anymigomoveSlides("ease");
    }
  } else {
    if (anymigoindex >= anymigoSlideCount - 2) {
      anymigonextInactive();
    }
    if (anymigoindex == anymigoSlideCount - 1) {
      return;
    } else {
      anymigoindex++;
      anymigomoveSlides("ease");
    }
  }
};

const anymigomoveToPreviousSlide = () => {
  anymigonextActive();
  if (window.innerWidth > 742.5) {
    if (anymigoindex <= 1) {
      anymigoprevInactive();
    }
    if (anymigoindex == 0) {
      return;
    } else {
      anymigoindex--;
      anymigomoveSlides("ease");
    }
  } else {
    if (anymigoindex <= 1) {
      anymigoprevInactive();
    }
    if (anymigoindex == 0) {
      return;
    } else {
      anymigoindex--;
      anymigomoveSlides("ease");
    }
  }
};

/* couple buttons to functions */
anymigonextBtn.addEventListener("click", anymigomoveToNextSlide);
anymigoprevBtn.addEventListener("click", anymigomoveToPreviousSlide);

function checkWidth() {
  if (document.getElementById("slide-1")) {
    if (window.innerWidth > 742.5) {
      slideWidth = slide.clientWidth + 12;
    } else {
      slideWidth = Math.max(
        document.documentElement.clientWidth || 0,
        window.innerWidth || 0
      );
    }
    moveSlides("none");
    var hbHeight = document.getElementById("hb").clientHeight;
    if (window.innerWidth > 742.5) {
      hide(hbHeight);
      if (index == slideCount - 1) {
        moveToPreviousSlide();
      }
      if (index == slideCount - 2) {
        nextInactive();
      }
    } else {
      if (index == slideCount - 2) {
        nextActive();
      }
    }
  } else {
    if (window.innerWidth > 742.5) {
      hide(hbHeight);
    }
  }

  if (document.getElementById("anymigoslide-1")) {
    anymigoslideWidth = anymigoslide.clientWidth + 12;
    anymigomoveSlides("none");
    var hbHeight = document.getElementById("hb").clientHeight;
    if (window.innerWidth > 742.5) {
      hide(hbHeight);
      if (anymigoindex == anymigoSlideCount - 1) {
        anymigomoveToPreviousSlide();
        anymigonextInactive();
      }
      if (anymigoindex == anymigoSlideCount - 3) {
        anymigonextActive();
      }
    }
    if (window.innerWidth <= 742.5) {
      if (anymigoindex == anymigoSlideCount - 2) {
        anymigonextActive();
      }
    }
    if (window.innerWidth > 1293) {
      if (anymigoindex == anymigoSlideCount - 2) {
        anymigomoveToPreviousSlide();
      }
      if (anymigoindex == anymigoSlideCount - 3) {
        anymigonextInactive();
      }
    }
  } else {
    if (window.innerWidth > 742.5) {
      hide(hbHeight);
    }
  }
}
