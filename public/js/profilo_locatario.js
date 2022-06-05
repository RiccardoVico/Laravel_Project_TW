const body = document.querySelector("body");
      profilo = body.querySelector(".locatario_profilo");
      user_details = body.querySelector(".user-details_profilo");
      modifica_button = body.querySelector(".modifica_button");
      salva_button = body.querySelector(".salva_button");

modifica_button.addEventListener("click", () =>{
    profilo.classList.toggle("active");
    user_details.classList.toggle("active");
});

salva_button.addEventListener("click", () =>{
    profilo.classList.remove("active");
    user_details.classList.remove("active");
});