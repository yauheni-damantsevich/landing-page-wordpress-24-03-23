// import Swiper from "../node_modules/swiper/swiper-bundle.esm.browser.js";

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
});

// Videos

window.addEventListener("load", () => {
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

  function hoverVideo(event) {
    const target = event.currentTarget;

    if (target.tagName.toLowerCase() === "button") {
      target.classList.remove("inProcess");
    } else {
      target.classList.add("inProcess");
    }
  }
  addEvents();
});

// Popup

window.addEventListener("load", () => {
  const appointmentButton = document.querySelector("#appointment");
  const body = document.querySelector("body");
  appointmentButton.addEventListener("click", openPopup);

  function openPopup(event) {
    let popupContainer = document.createElement("div");
    popupContainer.classList.add("popup-container");
    body.append(popupContainer);
    let popup = document.createElement("div");
    popup.classList.add("popup");
    popupContainer.append(popup);
    let closeButton = document.createElement("button");
    closeButton.classList.add("close-button");
    popup.append(closeButton);
    let img = document.createElement("img");
    img.src = "./assets/close.svg";
    img.alt = "Close";
    closeButton.append(img);
    let title = document.createElement("h2");
    title.textContent = "Онлайн запись";
    popup.append(title);
    let text = document.createElement("p");
    text.textContent =
      "оставьте свой номер телефона и мы свяжемся с Вами в ближайшее время";
    popup.append(text);
    let form = document.createElement("form");
    popup.append(form);
    let inputName = document.createElement("input");
    inputName.type = "text";
    inputName.placeholder = "Имя";
    form.append(inputName);
    let inputTel = document.createElement("input");
    inputTel.type = "tel";
    inputTel.placeholder = "Телефон";
    form.append(inputTel);
    let submitButton = document.createElement("button");
    submitButton.type = "submit";
    submitButton.textContent = "Отправить";
    submitButton.classList.add("secondary-button");
    form.append(submitButton);
    popupContainer.addEventListener("click", closePopupWithBackground);
    closeButton.addEventListener("click", closePopup);
    submitButton.addEventListener("click", (event) => {});
  }

  function closePopup(event) {
    const target = event.currentTarget;
    const popupContainer = target.closest(".popup-container");
    const closeButton = target.closest(".close-button");
    closeButton.removeEventListener("click", closePopup);
    popupContainer.remove();
  }

  function closePopupWithBackground(event) {
    let result = event
      .composedPath()
      .find((element) => element.className === "popup");
    const target = event.currentTarget;
    const popupContainer = document.querySelector(".popup-container");
    if (!result) {
      event.preventDefault();
      popupContainer.remove();
    }
  }

  function postRequest(event) {
    event.preventDefault();
    let form = document.querySelector("form");
    let formData = new FormData(form);
    let formDataObject = {};
    formData.forEach((value, key) => {
      formDataObject[key] = value;
    });
    console.log(formDataObject);
    closePopup();
    // fetch
    showMessage();
  }
});

function showMessage() {}

// fetch page for section 2

// window.addEventListener("load", () => {
//   function getDataForSection2Placeholder() {
//     fetch("https://dev-27-03-front-end.pantheonsite.io/wp-json/wp/v2/pages/9")
//       .then((response) => response.json())
//       .then((data) => {
//         console.log(data);
//         const section2Placeholder = document.querySelector(
//           ".section2-wrapper .description-wrapper"
//         );
//         let title = document.createElement("h2");
//         title.textContent = data.title.rendered;
//         section2Placeholder.innerHTML = data.content.rendered;
//         section2Placeholder.prepend(title);
//       });
//   }
//   getDataForSection2Placeholder();
// });
