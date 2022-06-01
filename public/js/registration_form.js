const body = document.querySelector("body");

let radioBtns = document.querySelectorAll("input[name='tipo']");
let result = document.getElementById("result");

let findSelected = () => {
    let selected = document.querySelector("input[name='tipo']:checked").value;
    //result.textContent = `${selected}`;
    document.getElementById("role").value = `${selected}`;

    if(selected == "locatore") {
        body.classList.toggle("active");
    } else{
        body.classList.remove("active");
    };
}

radioBtns.forEach(radioBtn => {
    radioBtn.addEventListener("change", findSelected);
});

findSelected();  
