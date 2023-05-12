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
  speed: 500,
  pagination: {
    el: ".swiper-paginationn",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-nextt",
    prevEl: ".swiper-button-prevv",
  },
});


const HTML_CODE = CodeMirror.fromTextArea(document.getElementById('html-code'), {
  // mode: 'text/html',
  lineNumbers: true,
  theme: 'gruvbox-dark',
  value: `

                         <header>
                     <nav>
                         <img src="img/car-logo.png" class="logo" alt="">
                         <div class="menu">
                             <a href="#">Home</a>
                             <a href="#">About</a>
                             <a href="#">Features</a>
                             <a href="#">Variations</a>
                             <a href="#">Specials</a>
                             <a href="#">Contact</a>
                         </div>

                         <div class="social">
                             <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                             <a href="#"><i class="fa-brands fa-twitter"></i></a>
                             <a href="#"><i class="fa-brands fa-instagram"></i></a>
                         </div>
                     </nav>
                      </header>
                     `
});

