const btnHeader = document.getElementById("homebtn");
const btnFooter = document.getElementById("homebtn2");

window.addEventListener("load", setup);

function redirect(event){
    const link = sessionStorage.getItem("home");
    location.assign(link);
}

function setup(){
    btnHeader.addEventListener("click", redirect);
    btnFooter.addEventListener("click", redirect);

}
