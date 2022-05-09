--Create databases--
CREATE IF NOT EXISTS codeigniter;
CREATE IF NOT EXISTS symfony;

--Create raw data tables--
CREATE TABLE codeigniter.temp(
    gameid varchar() NOT NULL,
    datacompleteness varchar(12),
    url varchar(200),
    league varchar(10),
    year varchar(12),
    split varchar(25),
    playoffs varchar(4),
    date varchar(20),
    game varchar(5),
    patch varchar(5),
    participantid varchar(60),
    side varchar(10),
    position varchar(10),
    playername varchar(50),
    playerid varchar(80),
    teamname varchar(60),
    teamid varchar(80),
    champion varchar(50),
    ban1 varchar(50),
    ban2 varchar(50),
    ban3 varchar(50),
    ban4 varchar(50),
    ban5 varchar(50),
    gamelength varchar(20),
    result varchar(5),
    kills varchar(4),
    deaths varchar(4),
    assists varchar(4),
    teamkills varchar(4),
    teamdeaths varchar(4),
    doublekills varchar(4),
    triplekills varchar(4),
    quadrakills varchar(4),
    pentakills varchar(4),
    firstblood varchar(3),
    firstbloodkills varchar(3),
    firstbloodassists varchar(3),
    firstbloodvictim varchar(3),
    teamkpm varchar(12),
    ckpm varchar(12),
    firstdragon varchar(45),
    dragons varchar(3),
    opp_dragons varchar(3),
    elementaldrakes varchar(3),
    opp_elementaldrakes varchar(3),
    infernals varchar(3),
    mountains varchar(3),
    clouds varchar(3),
    oceans varchar(3),
    chemtechs varchar(3),
    hextechs varchar(3),
    dragonstypeunknown varchar(3),
    elders varchar(3),
    opp_elders varchar(3),
    firstherald varchar(3),
    heralds varchar(3),
    opp_heralds varchar(3),
    firstbaron varchar(3),
    barons varchar(3),
    opp_barons varchar(3),
    firsttower varchar(3),
    towers varchar(3),
    opp_towers varchar(3),
    firstmidtower varchar(3),
    firsttothreetowers varchar(3),
    turretplates varchar(3),
    opp_turretplates varchar(3),
    inhibitors varchar(3),
    opp_inhibitors varchar(3),
    damagetochampions varchar(15),
    dpm varchar(15),
    damageshare varchar(15),
    damagetakenperminute varchar(15),
    damagemitigatedperminute varchar(15),
    wardsplaced varchar(15),
    wpm varchar(15),
    wardskilled varchar(15),
    wcpm varchar(15),
    controlwardsbought varchar(15),
    visionscore varchar(15),
    vspm varchar(15),
    totalgold varchar(15),
    earnedgold varchar(15),
    earnedgpm varchar(15),
    earnedgoldshare varchar(15),
    goldspent varchar(15),
    gspd varchar(15),
    totalcs varchar(15),
    minionkills varchar(15),
    monsterkills varchar(15),
    monsterkillsownjungle varchar(15),
    monsterkillsenemyjungle varchar(15),
    cspm varchar(15),
    goldat10 varchar(15),
    xpat10 varchar(15),
    csat10 varchar(15),
    opp_goldat10 varchar(15),
    opp_xpat10 varchar(15),
    opp_csat10 varchar(15),
    golddiffat10 varchar(15),
    xpdiffat10 varchar(15),
    csdiffat10 varchar(15),
    killsat10 varchar(15),
    assistsat10 varchar(15),
    deathsat10 varchar(15),
    opp_killsat10 varchar(15),
    opp_assistsat10 varchar(15),
    opp_deathsat10 varchar(15),
    goldat15 varchar(15),
    xpat15 varchar(15),
    csat15 varchar(15),
    opp_goldat15 varchar(15),
    opp_xpat15 varchar(15),
    opp_csat15 varchar(15),
    golddiffat15 varchar(15),
    xpdiffat15 varchar(15),
    csdiffat15 varchar(15),
    killsat15 varchar(15),
    assistsat15 varchar(15),
    deathsat15 varchar(15),
    opp_killsat15 varchar(15),
    opp_assistsat15 varchar(15),
    opp_deathsat15 varchar(15)
);
CREATE TABLE symfony.temp(
    gameid varchar() NOT NULL,
    datacompleteness varchar(12),
    url varchar(200),
    league varchar(10),
    year varchar(12),
    split varchar(25),
    playoffs varchar(4),
    date varchar(20),
    game varchar(5),
    patch varchar(5),
    participantid varchar(60),
    side varchar(10),
    position varchar(10),
    playername varchar(50),
    playerid varchar(80),
    teamname varchar(60),
    teamid varchar(80),
    champion varchar(50),
    ban1 varchar(50),
    ban2 varchar(50),
    ban3 varchar(50),
    ban4 varchar(50),
    ban5 varchar(50),
    gamelength varchar(20),
    result varchar(5),
    kills varchar(4),
    deaths varchar(4),
    assists varchar(4),
    teamkills varchar(4),
    teamdeaths varchar(4),
    doublekills varchar(4),
    triplekills varchar(4),
    quadrakills varchar(4),
    pentakills varchar(4),
    firstblood varchar(3),
    firstbloodkills varchar(3),
    firstbloodassists varchar(3),
    firstbloodvictim varchar(3),
    teamkpm varchar(12),
    ckpm varchar(12),
    firstdragon varchar(45),
    dragons varchar(3),
    opp_dragons varchar(3),
    elementaldrakes varchar(3),
    opp_elementaldrakes varchar(3),
    infernals varchar(3),
    mountains varchar(3),
    clouds varchar(3),
    oceans varchar(3),
    chemtechs varchar(3),
    hextechs varchar(3),
    dragonstypeunknown varchar(3),
    elders varchar(3),
    opp_elders varchar(3),
    firstherald varchar(3),
    heralds varchar(3),
    opp_heralds varchar(3),
    firstbaron varchar(3),
    barons varchar(3),
    opp_barons varchar(3),
    firsttower varchar(3),
    towers varchar(3),
    opp_towers varchar(3),
    firstmidtower varchar(3),
    firsttothreetowers varchar(3),
    turretplates varchar(3),
    opp_turretplates varchar(3),
    inhibitors varchar(3),
    opp_inhibitors varchar(3),
    damagetochampions varchar(15),
    dpm varchar(15),
    damageshare varchar(15),
    damagetakenperminute varchar(15),
    damagemitigatedperminute varchar(15),
    wardsplaced varchar(15),
    wpm varchar(15),
    wardskilled varchar(15),
    wcpm varchar(15),
    controlwardsbought varchar(15),
    visionscore varchar(15),
    vspm varchar(15),
    totalgold varchar(15),
    earnedgold varchar(15),
    earnedgpm varchar(15),
    earnedgoldshare varchar(15),
    goldspent varchar(15),
    gspd varchar(15),
    totalcs varchar(15),
    minionkills varchar(15),
    monsterkills varchar(15),
    monsterkillsownjungle varchar(15),
    monsterkillsenemyjungle varchar(15),
    cspm varchar(15),
    goldat10 varchar(15),
    xpat10 varchar(15),
    csat10 varchar(15),
    opp_goldat10 varchar(15),
    opp_xpat10 varchar(15),
    opp_csat10 varchar(15),
    golddiffat10 varchar(15),
    xpdiffat10 varchar(15),
    csdiffat10 varchar(15),
    killsat10 varchar(15),
    assistsat10 varchar(15),
    deathsat10 varchar(15),
    opp_killsat10 varchar(15),
    opp_assistsat10 varchar(15),
    opp_deathsat10 varchar(15),
    goldat15 varchar(15),
    xpat15 varchar(15),
    csat15 varchar(15),
    opp_goldat15 varchar(15),
    opp_xpat15 varchar(15),
    opp_csat15 varchar(15),
    golddiffat15 varchar(15),
    xpdiffat15 varchar(15),
    csdiffat15 varchar(15),
    killsat15 varchar(15),
    assistsat15 varchar(15),
    deathsat15 varchar(15),
    opp_killsat15 varchar(15),
    opp_assistsat15 varchar(15),
    opp_deathsat15 varchar(15)
);
--Import raw data into table table--
LOAD DATA INFILE '..\\..\\htdocs\\Examensarbete\\database\\2021_LoL_esports_match_data_from_OraclesElixir_Modified.csv'
INTO TABLE codeigniter.temp
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 LINES;

LOAD DATA INFILE '..\\..\\htdocs\\Examensarbete\\database\\2021_LoL_esports_match_data_from_OraclesElixir_Modified.csv'
INTO TABLE symfony.temp
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 LINES;

--Create tables for organised data
CREATE TABLE codeigniter.game (
    matchid varchar(60) NOT NULL,
    blueteam varchar(60),
    redteam varchar(60),
    league varchar(10),
    split varchar(25),
    playoffs varchar(4),
    date varchar(20),
    game varchar(5),
    patch varchar(5),
    gamelength varchar(20),
    PRIMARY KEY (matchid)
);
CREATE TABLE symfony.game (
    matchid varchar(60) NOT NULL,
    blueteam varchar(60),
    redteam varchar(60),
    league varchar(10),
    split varchar(25),
    playoffs varchar(4),
    date varchar(20),
    game varchar(5),
    patch varchar(5),
    gamelength varchar(20),
    PRIMARY KEY (matchid)
);

CREATE TABLE codeigniter.team (
    matchid varchar(60) NOT NULL,
    teamname varchar(60),
    teamid varchar(80) NOT NULL,
    ban1 varchar(50),
    ban2 varchar(50),
    ban3 varchar(50),
    ban4 varchar(50),
    ban5 varchar(50),
    result varchar(5),
    teamkills varchar(4),
    teamdeaths varchar(4),
    doublekills varchar(4),
    triplekills varchar(4),
    quadrakills varchar(4),
    pentakills varchar(4),
    firstblood varchar(3),
    teamkpm varchar(12),
    ckpm varchar(12),
    firstdragon varchar(45),
    dragons varchar(3),
    infernals varchar(3),
    mountains varchar(3),
    clouds varchar(3),
    oceans varchar(3),
    chemtechs varchar(3),
    hextechs varchar(3),
    elders varchar(3),
    firstherald varchar(3),
    heralds varchar(3),
    firstbaron varchar(3),
    barons varchar(3),
    firsttower varchar(3),
    towers varchar(3),
    firstmidtower varchar(3),
    firsttothreetowers varchar(3),
    inhibitors varchar(3),
    totalgold varchar(15),
    CONSTRAINT PK_Team PRIMARY KEY (matchid, teamid),
    FOREIGN KEY (matchid)
    REFERENCES codeigniter.game(matchid)
);
CREATE TABLE symfony.team (
    matchid varchar(60) NOT NULL,
    teamname varchar(60),
    teamid varchar(80) NOT NULL,
    ban1 varchar(50),
    ban2 varchar(50),
    ban3 varchar(50),
    ban4 varchar(50),
    ban5 varchar(50),
    result varchar(5),
    teamkills varchar(4),
    teamdeaths varchar(4),
    doublekills varchar(4),
    triplekills varchar(4),
    quadrakills varchar(4),
    pentakills varchar(4),
    firstblood varchar(3),
    teamkpm varchar(12),
    ckpm varchar(12),
    firstdragon varchar(45),
    dragons varchar(3),
    infernals varchar(3),
    mountains varchar(3),
    clouds varchar(3),
    oceans varchar(3),
    chemtechs varchar(3),
    hextechs varchar(3),
    elders varchar(3),
    firstherald varchar(3),
    heralds varchar(3),
    firstbaron varchar(3),
    barons varchar(3),
    firsttower varchar(3),
    towers varchar(3),
    firstmidtower varchar(3),
    firsttothreetowers varchar(3),
    inhibitors varchar(3),
    totalgold varchar(15),
    CONSTRAINT PK_team PRIMARY KEY (matchid, teamid),
    CONSTRAINT FK_team FOREIGN KEY (matchid)
    REFERENCES symfony.game(matchid)
);

CREATE TABLE codeigniter.player (
    matchid varchar(60) NOT NULL,
    teamid varchar(80) NOT NULL,
    playerid varchar(80) NOT NULL,
    playername varchar(50),
    position varchar(10),
    champion varchar(50),
    kills varchar(4),
    deaths varchar(4),
    assists varchar(4),
    doublekills varchar(4),
    triplekills varchar(4),
    quadrakills varchar(4),
    pentakills varchar(4),
    damagetochampions varchar(15),
    dpm varchar(15),
    damageshare varchar(15),
    damagetakenperminute varchar(15),
    wardsplaced varchar(15),
    wpm varchar(15),
    wardskilled varchar(15),
    controlwardsbought varchar(15),
    visionscore varchar(15),
    totalgold varchar(15),
    totalcs varchar(15),
    cspm varchar(15),
    CONSTRAINT PK_player PRIMARY KEY (matchid, playerid, teamid),
    CONSTRAINT FK_player FOREIGN KEY (matchid, teamid)
    REFERENCES codeigniter.team(matchid, teamid)
);
CREATE TABLE symfony.player (
    matchid varchar(60) NOT NULL,
    teamid varchar(80) NOT NULL,
    playerid varchar(80) NOT NULL,
    playername varchar(50),
    position varchar(10),
    champion varchar(50),
    kills varchar(4),
    deaths varchar(4),
    assists varchar(4),
    doublekills varchar(4),
    triplekills varchar(4),
    quadrakills varchar(4),
    pentakills varchar(4),
    damagetochampions varchar(15),
    dpm varchar(15),
    damageshare varchar(15),
    damagetakenperminute varchar(15),
    wardsplaced varchar(15),
    wpm varchar(15),
    wardskilled varchar(15),
    controlwardsbought varchar(15),
    visionscore varchar(15),
    totalgold varchar(15),
    totalcs varchar(15),
    cspm varchar(15),
    CONSTRAINT PK_player PRIMARY KEY (matchid, playerid, teamid),
    CONSTRAINT FK_player FOREIGN KEY (matchid, teamid)
    REFERENCES codeigniter.team(matchid, teamid)
);

--Insert data from temp to organised tables
INSERT INTO codeigniter.game (matchid, blueteam, league, split, playoffs, date, game, patch, gamelength)
SELECT gameid, teamname, league, split, playoffs, date, game, patch, gamelength FROM codeigniter.temp
WHERE position="team" and side="blue";

--Clean data from bad values
DELETE FROM temp WHERE league="UPL";
DELETE FROM temp WHERE teamname="Unknown team" OR teamname="unknown team";
DELETE FROM temp WHERE gameid="ESPORTSTMNT02/1890835";
DELETE FROM temp WHERE gameid="ESPORTSTMNT02/1890848";
DELETE FROM temp WHERE gameid="ESPORTSTMNT02_1932895";
DELETE FROM temp WHERE gameid="ESPORTSTMNT02_1932914";

UPDATE temp
SET playerid=CONCAT(teamname," ",position)
WHERE playername="unknown player";

UPDATE codeigniter.game, codeigniter.temp
SET game.redteam = temp.teamname
WHERE game.matchid = temp.gameid AND temp.side="red";

INSERT INTO codeigniter.team (matchid, 
    teamname, 
    teamid, 
    ban1, 
    ban2, 
    ban3, 
    ban4, 
    ban5, 
    result, 
    teamkills, 
    doublekills, 
    triplekills, 
    quadrakills, 
    pentakills, 
    firstblood, 
    teamkpm, 
    ckpm, 
    firstdragon, 
    dragons, 
    infernals, 
    mountains, 
    clouds, 
    oceans, 
    chemtechs, 
    hextechs, 
    elders, 
    firstherald, 
    heralds, 
    firstbaron, 
    barons, 
    firsttower, 
    towers, 
    firstmidtower, 
    firsttothreetowers, 
    inhibitors, 
    totalgold)
SELECT 
    gameid, 
    teamname, 
    teamid, 
    ban1, 
    ban2, 
    ban3, 
    ban4, 
    ban5, 
    result, 
    teamkills, 
    doublekills, 
    triplekills, 
    quadrakills, 
    pentakills, 
    firstblood, 
    teamkpm, 
    ckpm, 
    firstdragon, 
    dragons, 
    infernals, 
    mountains, 
    clouds, 
    oceans, 
    chemtechs, 
    hextechs, 
    elders, 
    firstherald, 
    heralds, 
    firstbaron, 
    barons, 
    firsttower, 
    towers, 
    firstmidtower, 
    firsttothreetowers, 
    inhibitors, 
    totalgold 
FROM codeigniter.temp
WHERE position="team";

INSERT INTO codeigniter.player (
    matchid,
    teamid,
    playerid,
    playername,
    position,
    champion,
    kills,
    deaths,
    assists,
    doublekills,
    triplekills,
    quadrakills,
    pentakills,
    damagetochampions,
    dpm,
    damageshare,
    damagetakenperminute,
    wardsplaced,
    wpm,
    wardskilled,
    controlwardsbought,
    visionscore,
    totalgold,
    totalcs,
    cspm)
SELECT
    gameid,
    teamid,
    playerid,
    playername,
    position,
    champion,
    kills,
    deaths,
    assists,
    doublekills,
    triplekills,
    quadrakills,
    pentakills,
    damagetochampions,
    dpm,
    damageshare,
    damagetakenperminute,
    wardsplaced,
    wpm,
    wardskilled,
    controlwardsbought,
    visionscore,
    totalgold,
    totalcs,
    cspm
FROM codeigniter.temp
WHERE position!="team";

