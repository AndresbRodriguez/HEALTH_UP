const body = document.querySelector("body"),
      sidebar = body.querySelector("nav"),
      toggle = body.querySelector(".toggle"),
      modeSwitch = body.querySelector(".toggle-switch");
      modeText = body.querySelector(".mode-text");

let getMode = localStorage.getItem("modo");
if (getMode && getMode === "dark") {
    body.classList.toggle("dark");
}

//let getStatus = localStorage.getItem("status");
//if (getStatus && getStatus === "close") {
//    sidebar.classList.toggle("close");
//}

toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    /*if (sidebar.classList.toggle("close")) {
        modeText.innerText = "cerrado";
        localStorage.setItem("modo", "cerrado")
    } else {
        modeText.innerText = "abierto";
        localStorage.setItem("modo", "abierto")
    }*/
});

modeSwitch.addEventListener("click", () =>{
    body.classList.toggle("dark");
    if (body.classList.contains("dark")) {
        modeText.innerText = "modo claro";
        localStorage.setItem("modo", "oscuro");
    } else {
        modeText.innerText = "modo oscuro";
        localStorage.setItem("modo", "claro");
    }
});