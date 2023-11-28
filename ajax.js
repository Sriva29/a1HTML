
formSubmit = document.querySelector("#contact-form");

formSubmit.onsubmit = sendData;

let nameInput = document.querySelector("#name");
let emailInput = document.querySelector("#email");
let moustacheCheckboxes = document.querySelectorAll(".moustache-checkbox");
let checkboxData = "";
let roleSelection = document.querySelector("#selection");
let hElement = document.querySelector("#contact-heading"); 
let pElement = document.querySelector("#error-message");

// let handlebar = document.querySelector("#c1");
// let walrus = document.querySelector("#c2");
// let vanDyke = document.querySelector("#c3");
// let pencil = document.querySelector("#c4");
// let horseshoe = document.querySelector("#c5");
// let chevron = document.querySelector("#c6");
// let fuManchu = document.querySelector("#c7");

// console.log(handlebar.value);
// console.log(handlebar.checked);
// console.log(walrus.value);

function sendData(e){
    e.preventDefault();
    moustacheCheckboxes.forEach((moustacheStyle)=>{
         if(moustacheStyle.checked){
            if(checkboxData.length>0){
                checkboxData += "&";
            }
            checkboxData += moustacheStyle.name + "=1"
            console.log("This style be chosen:" + moustacheStyle.name);
         }
     });
    let xhr = new XMLHttpRequest();
    xhr.addEventListener("readystatechange", (event) => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            console.log(xhr.status);
            if(xhr.status === 200){
                console.log(xhr.responseText);
                let responseJSON = JSON.parse(xhr.responseText);
                if(responseJSON.success == "true"){
                    hElement.innerHTML = "Thank you for contacting us!";
                } else {
                    pElement.innerHTML = "There was a problem with the request";
                }
                
            } else {
                pElement.innerHTML = "The request/response was completed but it was not Okay."
            }
        }
    });
    xhr.open ("POST", "process-contact.php", true);
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//xhr.send(`name=${nameInput.value}&email=${emailInput.value}&handlebar=${handlebar.checked}&walrus=${walrus.checked}&vanDyke=${vanDyke.checked}&pencil=${pencil.checked}&horseshoe=${horseshoe.checked}&chevron=${chevron.checked}&fuManchu=${fuManchu.checked}&role=${roleSelection.value}`);
console.log("Checkbox Data:", checkboxData);
xhr.send(`name=${nameInput.value}&email=${emailInput.value}&${checkboxData}&role=${roleSelection.value}`);

}


//xhr.open("GET", "path/to/JSON/resource", true);
//xhr.send();

