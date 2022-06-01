<<<<<<< HEAD
const body = document.querySelector("body");

let radioBtns = document.querySelectorAll("input[name='tipo']");
let result = document.getElementById("result");

let findSelected = () => {
    let selected = document.querySelector("input[name='tipo']:checked").value;
    //result.textContent = `${selected}`;
    document.getElementById("role").value = `${selected}`;

    if(selected == "Locatore") {
        body.classList.toggle("active");
    } else{
        body.classList.remove("active");
    };
}

radioBtns.forEach(radioBtn => {
    radioBtn.addEventListener("change", findSelected);
});

findSelected();  
=======
const body = document.querySelector("body");

let radioBtns = document.querySelectorAll("input[name='tipo']");
let result = document.getElementById("result");

let findSelected = () => {
    let selected = document.querySelector("input[name='tipo']:checked").value;
    //result.textContent = `${selected}`;
    document.getElementById("role").value = `${selected}`;

    if(selected == "Locatore") {
        body.classList.toggle("active");
    } else{
        body.classList.remove("active");
    };
}

radioBtns.forEach(radioBtn => {
    radioBtn.addEventListener("change", findSelected);
});

findSelected();  
>>>>>>> 3b4c5ccc330dc42e73ea4c077b38a66f81c90a48
