--Create databases--
CREATE DATABASE IF NOT EXISTS app_db;
CREATE DATABASE IF NOT EXISTS temp;

--Create raw data tables--
CREATE TABLE temp.temp(
    gameid varchar(60) NOT NULL,
    datacompleteness varchar(12),
    url varchar(200),
    league varchar(10),
    year INT,
    split varchar(25),
    playoffs BOOLEAN,
    date DATETIME,
    game INT,
    patch varchar(5),
    participantid INT,
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
    gamelength INT,
    result BOOLEAN,
    kills INT,
    deaths INT,
    assists INT,
    teamkills INT,
    teamdeaths INT,
    doublekills INT,
    triplekills INT,
    quadrakills INT,
    pentakills INT,
    firstblood BOOLEAN,
    firstbloodkills BOOLEAN,
    firstbloodassists BOOLEAN,
    firstbloodvictim BOOLEAN,
    teamkpm varchar(12),
    ckpm varchar(12),
    firstdragon BOOLEAN,
    dragons INT,
    opp_dragons INT,
    elementaldrakes INT,
    opp_elementaldrakes INT,
    infernals INT,
    mountains INT,
    clouds INT,
    oceans INT,
    chemtechs INT,
    hextechs INT,
    dragonstypeunknown INT,
    elders INT,
    opp_elders INT,
    firstherald BOOLEAN,
    heralds INT,
    opp_heralds INT,
    firstbaron BOOLEAN,
    barons INT,
    opp_barons INT,
    firsttower BOOLEAN,
    towers INT,
    opp_towers INT,
    firstmidtower BOOLEAN,
    firsttothreetowers BOOLEAN,
    turretplates INT,
    opp_turretplates INT,
    inhibitors INT,
    opp_inhibitors INT,
    damagetochampions INT,
    dpm varchar(15),
    damageshare varchar(15),
    damagetakenperminute varchar(15),
    damagemitigatedperminute varchar(15),
    wardsplaced INT,
    wpm varchar(15),
    wardskilled INT,
    wcpm varchar(15),
    controlwardsbought INT,
    visionscore INT,
    vspm varchar(15),
    totalgold INT,
    earnedgold INT,
    earnedgpm varchar(15),
    earnedgoldshare varchar(15),
    goldspent INT,
    gspd varchar(15),
    totalcs INT,
    minionkills INT,
    monsterkills INT,
    monsterkillsownjungle INT,
    monsterkillsenemyjungle INT,
    cspm varchar(15),
    goldat10 INT,
    xpat10 INT,
    csat10 INT,
    opp_goldat10 INT,
    opp_xpat10 INT,
    opp_csat10 INT,
    golddiffat10 INT,
    xpdiffat10 INT,
    csdiffat10 INT,
    killsat10 INT,
    assistsat10 INT,
    deathsat10 INT,
    opp_killsat10 INT,
    opp_assistsat10 INT,
    opp_deathsat10 INT,
    goldat15 INT,
    xpat15 INT,
    csat15 INT,
    opp_goldat15 INT,
    opp_xpat15 INT,
    opp_csat15 INT,
    golddiffat15 INT,
    xpdiffat15 INT,
    csdiffat15 INT,
    killsat15 INT,
    assistsat15 INT,
    deathsat15 INT,
    opp_killsat15 INT,
    opp_assistsat15 INT,
    opp_deathsat15 INT
);

--Import raw data into temp table--
--HAVE TO UNZIP CSV FILE IN ORDER TO WORK--
LOAD DATA INFILE '..\\..\\htdocs\\Examensarbete\\database\\2021_LoL_esports_match_data_from_OraclesElixir_Modified.csv'
INTO TABLE temp.temp
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 LINES;

--Create tables for organised data--
CREATE TABLE app_db.game (
    matchid varchar(60) NOT NULL,
    blueteam varchar(60),
    redteam varchar(60),
    league varchar(10),
    split varchar(25),
    playoffs BOOLEAN,
    date DATETIME,
    game INT,
    patch varchar(5),
    gamelength INT,
    result BOOLEAN,
    pick1 varchar(50),
    pick2 varchar(50),
    pick3 varchar(50),
    pick4 varchar(50),
    pick5 varchar(50),
    pick6 varchar(50),
    pick7 varchar(50),
    pick8 varchar(50),
    pick9 varchar(50),
    pick10 varchar(50),
    ban1 varchar(50),
    ban2 varchar(50),
    ban3 varchar(50),
    ban4 varchar(50),
    ban5 varchar(50),
    ban6 varchar(50),
    ban7 varchar(50),
    ban8 varchar(50),
    ban9 varchar(50),
    ban10 varchar(50),
    bluekills INT,
    bluedragons INT,
    blueheralds INT,
    bluebarons INT,
    bluetowers INT,
    blueinhibitors INT,
    bluetotalgold INT,
    redkills INT,
    reddragons INT,
    redheralds INT,
    redbarons INT,
    redtowers INT,
    redinhibitors INT,
    redtotalgold INT,
    PRIMARY KEY (matchid)
);

CREATE TABLE app_db.player (
    id int NOT NULL AUTO_INCREMENT,
    playerid varchar(80),
    playername varchar(80),
    position varchar(12),
    champion varchar(50),
    kills INT,
    deaths INT,
    assists INT,
    damagetochampions INT,
    dpm varchar(14),
    damageshare varchar(14),
    wardsplaced INT,
    wpm varchar(14),
    totalgold INT,
    totalcs INT,
    cspm varchar(14),
    PRIMARY KEY (id)
);

CREATE TABLE app_db.team ( 
    id INT NOT NULL AUTO_INCREMENT,
    matchid varchar(60),
    teamid varchar(80),
    teamname varchar(60),
    pick1 varchar(50),
    pick2 varchar(50),
    pick3 varchar(50),
    pick4 varchar(50),
    pick5 varchar(50),
    ban1 varchar(50),
    ban2 varchar(50),
    ban3 varchar(50),
    ban4 varchar(50),
    ban5 varchar(50),
    result BOOLEAN,
    gamelength INT, 
    teamkills INT,
    teamdeaths INT,
    doublekills INT,
    triplekills INT,
    quadrakills INT,
    pentakills INT,
    firstblood BOOLEAN, 
    teamkpm varchar(12), 
    ckpm varchar(12), 
    firstdragon BOOLEAN,
    dragons INT,
    firstherald BOOLEAN,
    heralds INT,
    firstbaron BOOLEAN,
    barons INT,
    firsttower BOOLEAN,
    towers INT,
    inhibitors INT, 
    totalgold INT,
    PRIMARY KEY (id)
);

--Clean data from bad values--
DELETE FROM temp.temp WHERE league="UPL";
DELETE FROM temp.temp WHERE teamname="Unknown team" OR teamname="unknown team";
DELETE FROM temp.temp WHERE gameid="ESPORTSTMNT02/1890835";
DELETE FROM temp.temp WHERE gameid="ESPORTSTMNT02/1890848";
DELETE FROM temp.temp WHERE gameid="ESPORTSTMNT02_1932895";
DELETE FROM temp.temp WHERE gameid="ESPORTSTMNT02_1932914";

UPDATE temp.temp
SET playerid=CONCAT(teamname," ",position)
WHERE playername="unknown player";

--Insert data from temp to organised tables--
INSERT INTO app_db.game (
    matchid,
    blueteam,  
    league, 
    split, 
    playoffs, 
    date, 
    game, 
    patch, 
    gamelength,
    result,
    ban1,
    ban2,
    ban3,
    ban4,
    ban5,
    bluekills,
    bluedragons,
    blueheralds,
    bluebarons,
    bluetowers,
    blueinhibitors,
    bluetotalgold)
SELECT 
    gameid, 
    teamname, 
    league, 
    split, 
    playoffs, 
    date, 
    game, 
    patch, 
    gamelength,
    result,
    ban1,
    ban2,
    ban3,
    ban4,
    ban5,
    kills,
    dragons,
    heralds,
    barons,
    towers,
    inhibitors,
    totalgold
FROM temp.temp
WHERE position="team" and side="blue";

--Update game table--
UPDATE app_db.game, temp.temp
SET 
    game.redteam = temp.teamname,
    game.ban6 = temp.ban1,
    game.ban7 = temp.ban2,
    game.ban8 = temp.ban3,
    game.ban9 = temp.ban4,
    game.ban10 = temp.ban5,
    game.redkills = temp.kills,
    game.reddragons = temp.dragons,
    game.redheralds = temp.heralds,
    game.redbarons = temp.barons,
    game.redtowers = temp.towers,
    game.redinhibitors = temp.inhibitors,
    game.redtotalgold = temp.totalgold
WHERE temp.gameid = game.matchid AND temp.position = "team" AND temp.side = "red";

UPDATE app_db.game, temp.temp
SET game.pick1 = temp.champion
WHERE temp.gameid = game.matchid AND temp.participantid = 1;

UPDATE app_db.game, temp.temp
SET game.pick2 = temp.champion
WHERE temp.gameid = game.matchid AND temp.participantid = 2;

UPDATE app_db.game, temp.temp
SET game.pick3 = temp.champion
WHERE temp.gameid = game.matchid AND temp.participantid = 3;

UPDATE app_db.game, temp.temp
SET game.pick4 = temp.champion
WHERE temp.gameid = game.matchid AND temp.participantid = 4;

UPDATE app_db.game, temp.temp
SET game.pick5 = temp.champion
WHERE temp.gameid = game.matchid AND temp.participantid = 5;

UPDATE app_db.game, temp.temp
SET game.pick6 = temp.champion
WHERE temp.gameid = game.matchid AND temp.participantid = 6;

UPDATE app_db.game, temp.temp
SET game.pick7 = temp.champion
WHERE temp.gameid = game.matchid AND temp.participantid = 7;

UPDATE app_db.game, temp.temp
SET game.pick8 = temp.champion
WHERE temp.gameid = game.matchid AND temp.participantid = 8;

UPDATE app_db.game, temp.temp
SET game.pick9 = temp.champion
WHERE temp.gameid = game.matchid AND temp.participantid = 9;

UPDATE app_db.game, temp.temp
SET game.pick10 = temp.champion
WHERE temp.gameid = game.matchid AND temp.participantid = 10;

--Update team table--
INSERT INTO app_db.team (
    matchid, 
    teamname, 
    teamid,
    ban1, 
    ban2, 
    ban3, 
    ban4, 
    ban5, 
    result,
    gamelength, 
    teamkills,
    teamdeaths, 
    doublekills, 
    triplekills, 
    quadrakills, 
    pentakills, 
    firstblood, 
    teamkpm, 
    ckpm, 
    firstdragon, 
    dragons, 
    firstherald, 
    heralds, 
    firstbaron, 
    barons, 
    firsttower, 
    towers, 
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
    gamelength, 
    teamkills,
    teamdeaths,  
    doublekills, 
    triplekills, 
    quadrakills, 
    pentakills, 
    firstblood, 
    teamkpm, 
    ckpm, 
    firstdragon, 
    dragons, 
    firstherald, 
    heralds, 
    firstbaron, 
    barons, 
    firsttower, 
    towers,   
    inhibitors, 
    totalgold 
FROM temp.temp
WHERE position="team";

UPDATE app_db.team, app_db.game
SET team.pick1 = game.pick1
WHERE game.matchid = team.matchid AND game.blueteam = team.teamname;

UPDATE app_db.team, app_db.game
SET team.pick1 = game.pick6
WHERE game.matchid = team.matchid AND game.redteam = team.teamname;

UPDATE app_db.team, app_db.game
SET team.pick2 = game.pick2
WHERE game.matchid = team.matchid AND game.blueteam = team.teamname;

UPDATE app_db.team, app_db.game
SET team.pick2 = game.pick7
WHERE game.matchid = team.matchid AND game.redteam = team.teamname;

UPDATE app_db.team, app_db.game
SET team.pick3 = game.pick3
WHERE game.matchid = team.matchid AND game.blueteam = team.teamname;

UPDATE app_db.team, app_db.game
SET team.pick3 = game.pick8
WHERE game.matchid = team.matchid AND game.redteam = team.teamname;

UPDATE app_db.team, app_db.game
SET team.pick4 = game.pick4
WHERE game.matchid = team.matchid AND game.blueteam = team.teamname;

UPDATE app_db.team, app_db.game
SET team.pick4 = game.pick9
WHERE game.matchid = team.matchid AND game.redteam = team.teamname;

UPDATE app_db.team, app_db.game
SET team.pick5 = game.pick5
WHERE game.matchid = team.matchid AND game.blueteam = team.teamname;

UPDATE app_db.team, app_db.game
SET team.pick5 = game.pick10
WHERE game.matchid = team.matchid AND game.redteam = team.teamname;

--Update player table--
INSERT INTO app_db.player (
    playerid,
    playername,
    position,
    champion,
    kills,
    deaths,
    assists,
    damagetochampions,
    dpm,
    damageshare,
    wardsplaced,
    wpm,
    totalgold,
    totalcs,
    cspm)
SELECT
    playerid,
    playername,
    position,
    champion,
    kills,
    deaths,
    assists,
    damagetochampions,
    dpm,
    damageshare,
    wardsplaced,
    wpm,
    totalgold,
    totalcs,
    cspm
FROM temp.temp
WHERE position != "team";
