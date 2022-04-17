const btnCI = document.getElementById("btnCi");
const btnSF = document.getElementById("btnSf");
window.addEventListener("load", setupEvents);

function redirect(event) {
    const btn = event.target;
    if(btn.value == "ci"){
        location.assign("codeigniterApp/public/");
    }else if(btn.value == "sf") {
        location.assign("symfonyApp/public/");
    } 
    
    console.log(`${btn.value} btn clicked`);
}

function setupEvents() {
    btnCI.addEventListener("click", redirect);
    btnSF.addEventListener("click", redirect);
}