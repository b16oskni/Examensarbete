//Assign buttons and run the setup function on page load
const btnCI = document.getElementById("btnCi");
const btnSF = document.getElementById("btnSf");
window.addEventListener("load", setupEvents);

//redirects current page to the chosen framework
function redirect(event) {
    const btn = event.target;
    if(btn.value == "ci"){
        location.assign("codeigniterApp/public/");
    }else if(btn.value == "sf") {
        location.assign("symfonyApp/public/");
    } 
    sessionStorage.setItem("home", window.location.href);
    console.log(sessionStorage.getItem("home"));
    //console.log(`${btn.value} btn clicked`);
}

//sets up evenlisteners for the buttons
function setupEvents() {
    btnCI.addEventListener("click", redirect);
    btnSF.addEventListener("click", redirect);
}