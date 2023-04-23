import.meta.glob(["../image/**"]);

AOS.init()


window.addEventListener("DOMContentLoaded", function () {
    const theme = localStorage.getItem("theme") ?? localStorage.setItem("theme", "light");

    if (theme === "light") {
        document.documentElement.className = "light";
        document.documentElement.setAttribute("data-theme", "light");
    } else if (theme === "dark") {
        document.documentElement.className = "dark";
        document.documentElement.setAttribute("data-theme", "dark");
    }
    document.getElementById("loader").style.display = "none";
});

// window.onload = () => {
//     setTimeout(()=> {

//      },300)
// }



new Swiper(".testimonial", {
  slidesPerView: 1,
  grabCursor: true,
  loop: true,
  autoplay: {
      delay: 1000,
      disableOnInteraction: false,
  },
  speed:500,
  pagination: {
    el: ".swiper-paginationn",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-nextt",
    prevEl: ".swiper-button-prevv",
  },
});
