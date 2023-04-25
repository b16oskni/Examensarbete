<?php if (! empty($games) && is_array($games)): ?>
    <?php foreach ($games as $game): ?>
        <!--MATCH START-->
        <div class="row align-items-start border border-dark">
            <div class="col bg-primary">
                <div class="row" style="height:100px;">
                    <div class="col-1"></div>
                    <div class="col-8">
                        <div class="mt-1">
                            <img class="role-icon" alt="top" src="../../Images/Top_icon.png">
                            <img class="champ-icon" alt="<?= esc($game['pick1']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($game['pick1'])); ?>.png"> 
                            <img class="role-icon" alt="jungle" src="../../Images/Jungle_icon.png">
                            <img class="champ-icon" alt="<?= esc($game['pick2']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($game['pick2'])); ?>.png"> 
                            <img class="role-icon" alt="mid" src="../../Images/Middle_icon.png">
                            <img class="champ-icon" alt="<?= esc($game['pick3']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($game['pick3'])); ?>.png"> 
                            <img class="role-icon" alt="bot" src="../../Images/Bot_icon.png">
                            <img class="champ-icon" alt="<?= esc($game['pick4']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($game['pick4'])); ?>.png"> 
                            <img class="role-icon" alt="support" src="../../Images/Support_icon.png">
                            <img class="champ-icon" alt="<?= esc($game['pick5']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($game['pick5'])); ?>.png">
                        </div>
                        <div class="mt-1 ms-5 fw-bold">
                            Bans:
                            <img class="champ-icon" alt="<?= esc($game['ban1']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($game['ban1'])); ?>.png"> 
                            <img class="champ-icon" alt="<?= esc($game['ban2']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($game['ban2'])); ?>.png"> 
                            <img class="champ-icon" alt="<?= esc($game['ban3']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($game['ban3'])); ?>.png"> 
                            <img class="champ-icon" alt="<?= esc($game['ban4']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($game['ban4'])); ?>.png"> 
                            <img class="champ-icon" alt="<?= esc($game['ban5']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($game['ban5'])); ?>.png">
                        </div>
                        <div>
                            <span class="me-3">
                                <img style="width:25px; height:20px;" src="../../Images/Gold.png">
                                <?= esc($game['bluetotalgold']) ?>
                            </span>
                            <span class="me-3">
                                <img style="width:25px; height:20px;" src="../../Images/Kills_blue.png">
                                <?= esc($game['bluekills']) ?>
                            </span>
                            <span class="me-3">
                                <img style="width:25px; height:20px;" src="../../Images/Blue_Turret_icon.png">
                                <?= esc($game['bluetowers']) ?>
                            </span>
                            <span class="me-3">
                                <img style="width:25px; height:20px;" src="../../Images/Dragon_icon_(Blue).png">
                                <?= esc($game['bluedragons']) ?>
                            </span>
                            <span class="me-3">
                                <img style="width:25px; height:20px;" src="../../Images/Baron_Nashor_icon_(Blue).png">
                                <?= esc($game['bluebarons']) ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-2 text-end fw-bold">
                    <?= esc($game['blueteam']) ?> <br>
                    <?php if (esc($game['result']) == true): ?>
                        W
                    <?php else: ?>
                        L
                    <?php endif ?>    
                    </div>
                </div>
            </div>
            <div class="col-1 bg-dark" style="height:100px;">
                <div class="col text-center mt-1 text-white">
                    Game Time <br>
                    <?= $time = substr_replace(esc($game['gamelength']),":", 2, 0) ?>
                </div>
            </div>
            <div class="col bg-danger">
                <div class="row" style="height:100px;">
                    <div class="col-1"></div>
                    <div class="col-2 text-start fw-bold">
                    <?= esc($game['redteam']) ?> <br>
                    <?php if (esc($game['result']) == false): ?>
                        W
                    <?php else: ?>
                        L
                    <?php endif ?> 
                    </div>
                    <div class="col ">
                        <div class="mt-1">
                            Picks:
                            <img class="champ-icon" alt="<?= esc($game['pick6']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($game['pick6'])); ?>.png"> 
                            <img class="champ-icon" alt="<?= esc($game['pick7']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($game['pick7'])); ?>.png"> 
                            <img class="champ-icon" alt="<?= esc($game['pick8']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($game['pick8'])); ?>.png"> 
                            <img class="champ-icon" alt="<?= esc($game['pick9']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($game['pick9'])); ?>.png"> 
                            <img class="champ-icon" alt="<?= esc($game['pick10']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($game['pick10'])); ?>.png">
                        </div>
                        <div class="mt-1 fw-bold">
                            Bans:
                            <img class="champ-icon" alt="<?= esc($game['ban6']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($game['ban6'])); ?>.png"> 
                            <img class="champ-icon" alt="<?= esc($game['ban7']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($game['ban7'])); ?>.png"> 
                            <img class="champ-icon" alt="<?= esc($game['ban8']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($game['ban8'])); ?>.png"> 
                            <img class="champ-icon" alt="<?= esc($game['ban9']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($game['ban9'])); ?>.png"> 
                            <img class="champ-icon" alt="<?= esc($game['ban10']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($game['ban10'])); ?>.png">
                        </div>
                        <div>
                            <span class="me-3">
                                <img style="width:25px; height:20px;" src="../../Images/Gold.png">
                                <?= esc($game['redtotalgold']) ?>
                            </span>
                            <span class="me-3">
                                <img style="width:25px; height:20px;" src="../../Images/Kills_red.png">
                                <?= esc($game['redkills']) ?>
                            </span>
                            <span class="me-3">
                                <img style="width:25px; height:20px;" src="../../Images/Red_Turret_icon.png">
                                <?= esc($game['redtowers']) ?>
                            </span>
                            <span class="me-3">
                                <img style="width:25px; height:20px;" src="../../Images/Dragon_icon_(Red).png">
                                <?= esc($game['reddragons']) ?>
                            </span>
                            <span class="me-3">
                                <img style="width:25px; height:20px;" src="../../Images/Baron_Nashor_icon_(Red).png">
                                <?= esc($game['redbarons']) ?>
                            </span>
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