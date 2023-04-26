window.addEventListener("load", () => {
    var searchInput = document.getElementById("form1");
    var searchTeam = document.getElementById("checkTeam");
    var searchPlayer = document.getElementById("checkPlayer");
    var phpMeasureCheck = document.getElementById("countTime");
    //set number of times we search for each name
    var iterations = 10;
    //set amount of names we want to search through
    var amountOfNames;
    //which type to search for, valid option: Team, Player, Game
    var searchType = 'Team';
    //set if we want to gather data through js or php
    var usePhpMeasure = true;

    let names = JSON.parse(localStorage.getItem("names"));
    if(localStorage.getItem("amountOfNames")==null){
        localStorage.setItem("amountOfNames", 0);
    }

    amountOfNames=localStorage.getItem("amountOfNames");

    var count = parseInt(localStorage.getItem("counter"));
    if(isNaN(count)) count = 0;

    var measurement = Date.now();
    if(amountOfNames == 0 && count == 0){
        str="data:text/csv;charset=utf-8,";
        localStorage.setItem("Oldval",measurement);
    }else{
        var old = new Date();
        old.setTime(localStorage.getItem("Oldval"));
        var delta=measurement.valueOf()-old;
        var str=localStorage.getItem("theData");
        str+=",\n "+names[amountOfNames]+","+delta;

        localStorage.setItem("Oldval",measurement);
    }
    if(count==iterations){
        amountOfNames++;
        localStorage.setItem("amountOfNames", amountOfNames);
        count=0;
    }
    count++;
    localStorage.setItem("counter",count);
    localStorage.setItem("theData",str);
    if(amountOfNames<10){
    
        searchInput.value=names[amountOfNames];

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
            console.log("false");
            phpMeasureCheck.dispatchEvent(clickEvent);
        }
        var btn = document.getElementById("searchBtn");
        btn.dispatchEvent(clickEvent);
    }else if(amountOfNames>=10){
        if (!usePhpMeasure) {
            alert("Done!");
            var anchor = document.createElement("a");
            anchor.setAttribute("href", encodeURI(str));
            anchor.setAttribute("download", "my_data.csv");
            anchor.innerHTML= "Click Here to download";
            document.body.appendChild(anchor);
            anchor.click();
        }
    }
});