const body = document.querySelector("body");
      annuncio_details = body.querySelector(".annuncio-details")

let radioBtns = document.querySelectorAll("input[name='tipologia']");
// let result = document.getElementById("result");

let findSelected = () => {
    let selected = document.querySelector("input[name='tipologia']:checked").value;
    //result.textContent = `${selected}`;
    document.getElementById("fitto").value = `${selected}`;

    if(selected == "1") {
        annuncio_details.classList.toggle("active");
    } else{
        annuncio_details.classList.remove("active");
    };
}

radioBtns.forEach(radioBtn => {
    radioBtn.addEventListener("change", findSelected);
});

findSelected();