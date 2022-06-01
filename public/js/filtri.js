const body = document.querySelector("body");
      container_filtri = body.querySelector(".container_filtri")

let radioBtns = document.querySelectorAll("input[name='tipo_annuncio']");

let findSelected = () => {
    let selected = document.querySelector("input[name='tipo_annuncio']:checked").value;
    //result.textContent = `${selected}`;
    document.getElementById("fittizio").value = `${selected}`;

    if(selected =="0") {
        container_filtri.classList.toggle("active");
    } else{
        container_filtri.classList.remove("active");
    };
}

radioBtns.forEach(radioBtn => {
    radioBtn.addEventListener("change", findSelected);
});

findSelected();  