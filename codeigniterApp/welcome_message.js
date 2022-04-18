const btn = document.getElementById("homebtn");
window.addEventListener("load", setup);

function redirect(event){
    const link = sessionStorage.getItem("home");
    location.assign(link);
}

function setup(){
    btn.addEventListener("click", redirect);
}