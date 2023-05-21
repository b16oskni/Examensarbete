//Assign buttons and run the setup function on page load
const btnCI = document.getElementById("btnCi");
const btnSF = document.getElementById("btnSf");
const btnRandTeam = document.getElementById("btnTeam");
const btnRandPlayer = document.getElementById("btnPlayer");
const seedInput = document.getElementById("seedInput");
const iterationInput = document.getElementById("iterationsInput");
const amountInput = document.getElementById("amountInput");
const usePhpInput = document.getElementById("usePhp");
window.addEventListener("load", setupEvents);

//redirects current page to the chosen framework
function redirect(event) {
    const btn = event.target;
    if (btn.value == "ci"){
        location.assign("codeigniterApp/public/");
    }else if (btn.value == "sf") {
        location.assign("symfonyApp/public/");
    } 
    sessionStorage.setItem("home", window.location.href);
}

//sets up evenlisteners for the buttons
function setupEvents() {
    btnCI.addEventListener("click", redirect);
    btnSF.addEventListener("click", redirect);
    btnRandTeam.addEventListener("click", checkLocalStorage);
    btnRandPlayer.addEventListener("click", checkLocalStorage);
}

function checkLocalStorage(event) {
    if (localStorage.getItem("searchList") != null) {
        if (confirm("Do you want to replace existing names?") == true) {
            getData(event.target.value);
        }
    } else {
        getData(event.target.value);
    }
}

//setup search values for the search scripts
function getData(type) {
    let option = type;
    let names = [];

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        processData(this.responseText);
    }
    xhttp.open("GET", "Database/"+option+".csv");
    xhttp.send();
    
    function processData(allText) {
        var allTextLines = allText.split(/\r\n|\n|[,]/);
        for (var i=1; i<allTextLines.length; i++) {
            if (allTextLines != ",") {
                names.push(allTextLines[i]);
            }
        }

        for (var i=0; i<names.length; i++) {
            if (names[i] == "") {
                names.splice(i,1);
            }
        }

        createList(names, option);
    }
}

function createList(names, option) {
    let searchList = [];
    let seed = seedInput.value == "" ? 1 : Number(seedInput.value);
    let iterations = iterationInput.value;
    let amount = amountInput.value;
    let usePhp = usePhpInput.checked;
    let myRand = new RandApp({"seed":seed,"distribution":"normal","persistentSeed":true});

    for (var i=0; i<amount; i++) {
        searchList[i] = names[myRand.randIntFromIntervall(1, names.length)]
    }

    let elements = document.getElementsByName("searchType");
    for (var i=0; i<elements.length; i++) {
        if (elements[i].checked) {
            localStorage.setItem("searchType", elements[i].value);
        }
    }

    localStorage.setItem("iterations", iterations);
    localStorage.setItem("searchList", JSON.stringify(searchList));
    localStorage.setItem("usePhp", usePhp);
    alert(option + " names successfully randomised");
}
    