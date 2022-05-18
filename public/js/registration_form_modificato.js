const body = document.querySelector("body"),
      modeToggle = body.querySelector(".switch");

modeToggle.addEventListener("click", () =>{
    body.classList.toggle("active");
});