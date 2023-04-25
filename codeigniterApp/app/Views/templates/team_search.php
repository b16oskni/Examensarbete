<?php if (! empty($teams) && is_array($teams)): ?>
    <?php foreach ($teams as $team): ?>
        <div class="row align-items-start border border-warning">
            <div class="col bg-dark text-white">
                <div class="row mt-1 mb-4" style="height:100px;">
                    <div class="col-1 ms-4">
                        <div class="row text-center fw-bold">
                            <div>
                                <?= esc($team['teamname']) ?>
                            </div>
                            <div>
                                <?php if (esc($team['result']) == true): ?>
                                    W
                                <?php else: ?>
                                    L
                                <?php endif ?> 
                            </div>
                            <div>
                                Game Time <br>
                                <?= $time = substr_replace(esc($team['gamelength']),":", 2, 0) ?>
                            </div> 
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="mt-1">
                                <img class="role-icon" alt="top" src="../../Images/Top_icon.png">
                                <img class="champ-icon" alt="<?= esc($team['pick1']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($team['pick1'])); ?>.png"> 
                                <img class="role-icon" alt="jungle" src="../../Images/Jungle_icon.png">
                                <img class="champ-icon" alt="<?= esc($team['pick2']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($team['pick2'])); ?>.png"> 
                                <img class="role-icon" alt="mid" src="../../Images/Middle_icon.png">
                                <img class="champ-icon" alt="<?= esc($team['pick3']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($team['pick3'])); ?>.png"> 
                                <img class="role-icon" alt="bot" src="../../Images/Bot_icon.png">
                                <img class="champ-icon" alt="<?= esc($team['pick4']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($team['pick4'])); ?>.png"> 
                                <img class="role-icon" alt="support" src="../../Images/Support_icon.png">
                                <img class="champ-icon" alt="<?= esc($team['pick5']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($team['pick5'])); ?>.png">
                            </div>
                            <div class="mt-1 ms-5 fw-bold">
                                Bans:
                                <img class="champ-icon" alt="<?= esc($team['ban1']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($team['ban1'])); ?>.png"> 
                                <img class="champ-icon" alt="<?= esc($team['ban2']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($team['ban2'])); ?>.png"> 
                                <img class="champ-icon" alt="<?= esc($team['ban3']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($team['ban3'])); ?>.png"> 
                                <img class="champ-icon" alt="<?= esc($team['ban4']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($team['ban4'])); ?>.png"> 
                                <img class="champ-icon" alt="<?= esc($team['ban5']) ?>" src="http://ddragon.leagueoflegends.com/cdn/13.8.1/img/champion/<?= str_replace(" ", "", esc($team['ban5'])); ?>.png">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col mt-2">     
                                Kills: <?= esc($team['teamkills']) ?>     
                                Deaths: <?= esc($team['teamdeaths']) ?>     
                                First blood: <?= esc($team['firstblood']) ?>     
                                Kpm: <?= esc($team['teamkpm']) ?>     
                                Ckpm: <?= esc($team['ckpm']) ?>     
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-2">     
                                Double kills: <?= esc($team['doublekills']) ?>     
                                Triple kills: <?= esc($team['triplekills']) ?>     
                                Quadra kills: <?= esc($team['quadrakills']) ?>     
                                Penta kills: <?= esc($team['pentakills']) ?>     
                            </div>
                        </div>
                        <div class="row">   
                            Gold: <?= esc($team['totalgold']) ?>  
                            First dragon: <?= esc($team['firstdragon']) ?>  
                            Dragons: <?= esc($team['dragons']) ?>  
                            First herald: <?= esc($team['firstherald']) ?>  
                            Heralds: <?= esc($team['heralds']) ?>  
                            First baron: <?= esc($team['firstbaron']) ?>  
                            Barons: <?= esc($team['barons']) ?>  
                            First tower: <?= esc($team['firsttower']) ?>  
                            Towers: <?= esc($team['towers']) ?>  
                            Inhibitors: <?= esc($team['inhibitors']) ?>  
                        </div>
                    </div>    
                </div>
            </div>         
        </div>
    <?php endforeach ?>
<?php else: ?>
    <h3>No games found</h3>
<?php endif ?>