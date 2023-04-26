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

if (localStorage.getItem('searchNames') == null) {
    let option = 'Team';
    let names = [];

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        processData(this.responseText);
    }
    xhttp.open("GET", "Database/"+option+".csv");
    xhttp.send();

    function processData(allText) {
        var allTextLines = allText.split(/\r\n|\n|[,]/);
        console.log(allTextLines);
        for (var i=1; i<allTextLines.length; i++) {
            if (allTextLines != ",") {
                names.push(allTextLines[i]);
            }
        }
    }
    if(localStorage.getItem("names") == null) {
        setTimeout(()=> {
            for (var i=0; i<names.length; i++) {
                if (names[i] == "") {
                    names.splice(i,1);
                }
            }
            localStorage.setItem("names", JSON.stringify(names));
         }
         ,2000);
    }
}
