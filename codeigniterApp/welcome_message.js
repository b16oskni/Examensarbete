const btnHeader = document.getElementById("homebtn");
const btnFooter = document.getElementById("homebtn2");
//const searchField = document.getElementById("form1");
//const btnSearch = document.getElementById("searchBtn");
window.addEventListener("load", setup);

function redirect(event){
    const link = sessionStorage.getItem("home");
    location.assign(link);
}

function setup(){
    btnHeader.addEventListener("click", redirect);
    btnFooter.addEventListener("click", redirect);
    //searchField.addEventListener("keypress", searchTeam);
    //btnSearch.addEventListener("click", searchTeam);
}

/*function searchTeam(event){
    if(event.key == "Enter" || (event.type == "click")) {
        //const search = event.target;
        const term = searchField.value;
        console.log(term);
        //send search term to controller to request from database
    }
}*/