import.meta.glob(["../image/**"]);

AOS.init();

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
