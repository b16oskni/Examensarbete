window.addEventListener("load", () => {
    var searchInput = document.getElementById("form1");
    var searchTeam = document.getElementById("checkTeam");
    var searchPlayer = document.getElementById("checkPlayer");
    var phpMeasureCheck = document.getElementById("countTime");

    //set number of times we search for each name
    var iterations = localStorage.getItem("iterations");

    //which type to search for, valid option: Team, Player, Game
    var searchType = localStorage.getItem("searchType");

    //set if we want to gather data through js or php
    var usePhpMeasure = localStorage.getItem("usePhp");

    //list of search terms
    let names = JSON.parse(localStorage.getItem("searchList"));

    //perform search and save measured time
    if(localStorage.getItem("iterationsCounter") == null){
        localStorage.setItem("iterationsCounter", 0);
    }
    
    var iterationCount = localStorage.getItem("iterationsCounter");

    if(localStorage.getItem("currentSearchIndex") == null){
        localStorage.setItem("currentSearchIndex", 0);
    }

    var currentSearchIndex = localStorage.getItem("currentSearchIndex");
    
    var measurement = Date.now();
    if(currentSearchIndex == 0 && iterationCount == 0){
        str="data:text/csv;charset=utf-8,";
        localStorage.setItem("Oldval",measurement);
    }else{
        var old = new Date();
        old.setTime(localStorage.getItem("Oldval"));
        var delta = measurement.valueOf() - old;
        var str = localStorage.getItem("theData");
        str += ",\n " + names[currentSearchIndex - 1] + "," + delta;

        localStorage.setItem("Oldval",measurement);
    }
    if(currentSearchIndex >= names.length){
        iterationCount++;
        localStorage.setItem("iterationsCounter", iterationCount);
        currentSearchIndex = 0;
    }

    localStorage.setItem("theData",str);

    if(iterationCount<iterations){
    
        searchInput.value = names[currentSearchIndex];

        var clickEvent = new MouseEvent("click",{
            view:window,
            bubbles:true,
            cancelable:true
        });

        switch (searchType) {
            case 'Team':
                searchTeam.dispatchEvent(clickEvent);
                break;
            case 'Player':
                searchPlayer.dispatchEvent(clickEvent);
                break;
            default:
                break;
        }
        if (!usePhpMeasure) {
            phpMeasureCheck.dispatchEvent(clickEvent);
        }
        currentSearchIndex++;
        localStorage.setItem("currentSearchIndex",currentSearchIndex);

        var btn = document.getElementById("searchBtn");
        btn.dispatchEvent(clickEvent);
    }else if(iterationCount>=iterations){
        alert("Done!");
        var anchor = document.createElement("a");
        anchor.setAttribute("href", encodeURI(str));
        anchor.setAttribute("download", "my_data.csv");
        anchor.innerHTML = "Click Here to download";
        document.body.appendChild(anchor);
        anchor.click();

        localStorage.removeItem("currentSearchIndex");
        localStorage.removeItem("iterationsCounter");
        localStorage.removeItem("searchType");
        localStorage.removeItem("usePhp");
        localStorage.removeItem("iterations");
        localStorage.removeItem("theData");
    }
});