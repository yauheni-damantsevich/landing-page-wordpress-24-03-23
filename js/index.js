import Swiper from "../node_modules/swiper/swiper-bundle.esm.browser.js";

const swiper1 = new Swiper(".swiper1", {
  slidesPerView: 4,
  loop: true,
  // loopedSlides: 50,
  navigation: {
    nextEl: ".swiper-button-next1",
    prevEl: ".swiper-button-prev1",
  },
});

const swiper2 = new Swiper(".swiper2", {
  slidesPerView: 4,
  loop: true,
  // loopedSlides: 50,
  navigation: {
    nextEl: ".swiper-button-next2",
    prevEl: ".swiper-button-prev2",
  },
});

const swiper3 = new Swiper(".swiper3", {
  slidesPerView: 2,
  loop: true,
  // loopedSlides: 50,
  navigation: {
    nextEl: ".swiper-button-next3",
    prevEl: ".swiper-button-prev3",
  },
});

window.addEventListener("load", () => {
  let tabs = document.querySelectorAll("ul.tabs > li");
  function tabClicks(tabClickEvent) {
    for (let i = 0; i < tabs.length; i++) {
      tabs[i].classList.remove("active");
    }
    let clickedTab = tabClickEvent.currentTarget;
    clickedTab.classList.add("active");
    tabClickEvent.preventDefault();
    let tabContent = document.querySelectorAll(".tabs-content-item");
    console.log(tabContent);
    for (let i = 0; i < tabContent.length; i++) {
      tabContent[i].classList.remove("active");
    }
    let anchorReference = tabClickEvent.target;
    let activePaneId = anchorReference.getAttribute("href");
    let activeItem = document.querySelector(activePaneId);
    activeItem.classList.add("active");
  }
  for (let i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener("click", tabClicks);
  }
  addEvents();
});

const allPlayButtons = document.querySelectorAll(".play");
const allVideos = document.querySelector(".swiper2");

const addEvents = () => {
  for (let i = 0; i < allPlayButtons.length; i++) {
    allPlayButtons[i].addEventListener("click", togglePlay);
  }
  allVideos.addEventListener("mouseover", hoverVideo);
};

function togglePlay(event) {
  const playButton = event.currentTarget;
  const video = event.currentTarget.parentNode.parentNode.children[0];

  if (video.paused || video.ended) {
    playButton.classList.add("inProcess");
    video.play();
  } else {
    video.pause();
    playButton.classList.remove("inProcess");
  }
}

// playButton.addEventListener("click", togglePlay);

function hoverVideo(event) {
  const target = event.currentTarget;

  if (target.tagName.toLowerCase() === "button") {
    target.classList.remove("inProcess");
  } else {
    target.classList.add("inProcess");
  }
}

// video.addEventListener("mouseover", hoverVideo);
