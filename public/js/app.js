//loading screen after visiting site
const removeLoading = () => {
     const readyCheck = () => {
          if (document.body !== undefined) {
               window.clearInterval(intervalIndex);
               const loadingDiv = document.querySelector(".loading-screen");
               document.body.removeChild(loadingDiv);
               document.querySelector("html").removeAttribute("style");
          }
     }
     document.querySelector("html").style.overflow = "hidden";
     let intervalIndex = window.setInterval(readyCheck, 1000);
}
removeLoading();

//menu btn

const expandMenu = () => {
     const pageNav = document.querySelector(".page-nav");
     pageNav.classList.toggle("active");
}

document.querySelector(".nav-btn").addEventListener("click", expandMenu);

//scroll to element

const scrollToElement = e => {
     const pageNav = document.querySelector(".page-nav");
     pageNav.classList.remove("active");
     const destionationSection = document.querySelector(`${e.target.dataset.destination}`);
     const header = document.querySelector(".page-header");
     window.scrollTo({
          'behavior': 'smooth',
          'left': 0,
          'top': destionationSection.offsetTop - header.clientHeight
     })
}
document.querySelectorAll(".nav-list-items").forEach(item => {
     item.addEventListener("click", scrollToElement);
});

const scrollToTop = () => {
     window.scrollTo({
          'behavior': 'smooth',
          'left': 0,
          'top': 0
     })
}

document.querySelector("h1").addEventListener("click", scrollToTop);