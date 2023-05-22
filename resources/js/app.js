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



// new Swiper(".testimonial", {
//   slidesPerView: 1,
//   grabCursor: true,
//   loop: true,
//   autoplay: {
//     delay: 1000,
//     disableOnInteraction: false,
//   },
//   speed: 500,
//   pagination: {
//     el: ".swiper-paginationn",
//     clickable: true,
//   },
//   navigation: {
//     nextEl: ".swiper-button-nextt",
//     prevEl: ".swiper-button-prevv",
//   },
// });


ace.config.set('basePath', "https://unpkg.com/ace-builds@1.4.6/src-noconflict")

const editorHTML = ace.edit("code-html", {
  mode: 'ace/mode/html',
  theme: 'ace/theme/tomorrow_night',
  highlightActiveLine: true,
  showPrintMargin: false,
  enableBasicAutocompletion: true,
  enableSnippets: true,
  enableLiveAutocompletion: true,
  readOnly: true,
})

const editorCSS = ace.edit("code-css", {
  mode: 'ace/mode/css',
  theme: 'ace/theme/dracula',
  highlightActiveLine: true,
  showPrintMargin: false,
  enableBasicAutocompletion: true,
  enableSnippets: true,
  enableLiveAutocompletion: true,
  readOnly: true,
})

const editorJS = ace.edit("code-js", {
  mode: 'ace/mode/javascript',
  theme: 'ace/theme/dracula',
  highlightActiveLine: true,
  showPrintMargin: false,
  enableBasicAutocompletion: true,
  enableSnippets: true,
  enableLiveAutocompletion: true,
  readOnly: true,
})


const getFile = async (url, editor) => {
  const DATA = await fetch(url)
  const data = await DATA.text()
  // console.log(data);
  editor.session.setValue(data);

}

getFile('http://localhost/code/html.html', editorHTML)
getFile('http://localhost/code/style.css', editorCSS)
getFile('http://localhost/code/script.js', editorJS)
