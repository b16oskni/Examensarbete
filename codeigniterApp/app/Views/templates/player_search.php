<?php if (! empty($players) && is_array($players)): ?>
    <?php foreach ($players as $player): ?>
        <!--playername, position, champion, kills, deaths, assists, damagetochampions, dpm, damageshare, wards placed, wpm, totalcs, cspm, totalgold-->
        <div class="row align-items-start border border-warning">
            <div class="col bg-dark text-white">
                <div class="row" style="height:100px;">
                    <div class="col-2 ms-4">
                        <div class="row text-center">
                            <?= esc($player['playername']) ?>
                        </div>
                        <div class="row">
                            <?= esc($player['position']) ?>
                        </div>
                    </div>
                    <div class="col-2">
                                <img class="champ-icon-player mt-2" alt="<?= esc($player['champion']) ?>" src="http://ddragon.leagueoflegends.com/cdn/12.7.1/img/champion/<?= str_replace(" ", "", esc($player['champion'])); ?>.png"> 
                            </div>
                    <div class="col">
                        <div class="row">
                            <div class="col mt-2">
                                Kills: <?= esc($player['kills']) ?>     
                                Deaths: <?= esc($player['deaths']) ?>   
                                Assists: <?= esc($player['assists']) ?>  
                                Damage to Champ: <?= esc($player['damagetochampions']) ?>    
                                DPM: <?= esc($player['dpm']) ?> 
                            </div>
                        </div>
                        <div class="row"> 
                            DMG Share: <?= esc($player['damageshare']) ?>   
                            Wards: <?= esc($player['wardsplaced']) ?>   
                            WPM: <?= esc($player['wpm']) ?> 
                            CS: <?= esc($player['totalcs']) ?>  
                            CSPM: <?= esc($player['cspm']) ?>   
                            Gold: <?= esc($player['totalgold']) ?>  
                        </div>
                    </div>
                </div>
            </div>         
        </div>
        
    <?php endforeach ?>
<?php else: ?>
    <h3>No games found</h3>
<?php endif ?>