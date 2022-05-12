<?php if (! empty($games) && is_array($games)): ?>
    <?php foreach ($games as $game): ?>
        <!--MATCH START-->
        <div class="row align-items-start border border-dark">
            <div class="col bg-primary">
                <div class="row" style="height:100px;">
                    <div class="col-10">
                        <div class="mt-1">
                            Picks:
                            <h3><?= esc($game['blueteam']) ?></h3>
                        </div>
                        <div class="mt-1">
                            Bans:
                            <img class="champ-icon" alt="Zyra" src="http://ddragon.leagueoflegends.com/cdn/12.7.1/img/champion/Zyra.png"> 
                            <img class="champ-icon" alt="Yuumi" src="http://ddragon.leagueoflegends.com/cdn/12.7.1/img/champion/Yuumi.png"> 
                            <img class="champ-icon" alt="Miss Fortune" src="http://ddragon.leagueoflegends.com/cdn/12.7.1/img/champion/MissFortune.png"> 
                            <img class="champ-icon" alt="Nami" src="http://ddragon.leagueoflegends.com/cdn/12.7.1/img/champion/Nami.png"> 
                            <img class="champ-icon" alt="Lulu" src="http://ddragon.leagueoflegends.com/cdn/12.7.1/img/champion/Lulu.png">
                        </div>
                        <div>
                            (Gold) 34.2k    (Kills) 21  (Towers) 8  (Dragons) 5 (Barons) 2
                        </div>
                    </div>
                    <div class="col-2 text-end">
                        Team 1 <br>
                        W
                    </div>
                </div>
            </div>
            <div class="col-1 bg-dark" style="height:100px;">
                <div class="col text-center mt-1 text-white">
                    Game Time <br>
                    39:02
                </div>
            </div>
            <div class="col bg-danger">
                <div class="row" style="height:100px;">
                    <div class="col-2 text-start">
                        Team 2 <br>
                        L
                    </div>
                    <div class="col offset-md-1">
                        <div class="mt-1">
                            Picks:
                            <img class="champ-icon" alt="Zyra" src="http://ddragon.leagueoflegends.com/cdn/12.7.1/img/champion/Zyra.png"> 
                            <img class="champ-icon" alt="Yuumi" src="http://ddragon.leagueoflegends.com/cdn/12.7.1/img/champion/Yuumi.png"> 
                            <img class="champ-icon" alt="Miss Fortune" src="http://ddragon.leagueoflegends.com/cdn/12.7.1/img/champion/MissFortune.png"> 
                            <img class="champ-icon" alt="Nami" src="http://ddragon.leagueoflegends.com/cdn/12.7.1/img/champion/Nami.png"> 
                            <img class="champ-icon" alt="Lulu" src="http://ddragon.leagueoflegends.com/cdn/12.7.1/img/champion/Lulu.png">
                        </div>
                        <div class="mt-1">
                            Bans:
                            <img class="champ-icon" alt="Zyra" src="http://ddragon.leagueoflegends.com/cdn/12.7.1/img/champion/Zyra.png"> 
                            <img class="champ-icon" alt="Yuumi" src="http://ddragon.leagueoflegends.com/cdn/12.7.1/img/champion/Yuumi.png"> 
                            <img class="champ-icon" alt="Miss Fortune" src="http://ddragon.leagueoflegends.com/cdn/12.7.1/img/champion/MissFortune.png"> 
                            <img class="champ-icon" alt="Nami" src="http://ddragon.leagueoflegends.com/cdn/12.7.1/img/champion/Nami.png"> 
                            <img class="champ-icon" alt="Lulu" src="http://ddragon.leagueoflegends.com/cdn/12.7.1/img/champion/Lulu.png">
                        </div>
                        <div>
                            (Gold) 34.2k    (Kills) 21  (Towers) 8  (Dragons) 5 (Barons) 2
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <!--MATCH END-->
    <?php endforeach ?>
<?php else: ?>
    <h3>No games found</h3>
<?php endif ?>