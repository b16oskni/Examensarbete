<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="<?php echo base_url('bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    <style>
        html, body {
            height: 100vh;
        }
        body {
            background-color: #f5f4fa;
        }
        .cbtn {
            width: 200px;
            height: 110px;
            border-radius: 10px;
        }
        p {
            font-family: 'Franklin Gothic Medium';
            font-size: 1.3rem;
        }
        h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .champ-icon{
            width: 30px;
            height: 30px;
            margin-left: 5px;
        }
    </style>
</head>
<body id="body">
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white" id="homebtn">Home</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">About</a></li>
                </ul>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                </form>
                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2">Login</button>
                    <button type="button" class="btn btn-warning">Sign-up</button>
                </div>
            </div>
        </div>
    </header>
    <!-- Page Content -->
    <div class="container">
        <div class="row mb-5">
            <div class="col mt-5"> 
                <form method="post" action="<?php echo base_url('public/home') ?>">
                <div class="input-group mx-auto">
                    <div class="form-outline ms-auto">
                        <input type="input" class="form-control" placeholder="Search" name="gsearch" id="form1"/>
                    </div>
                    <button type="submit" class="btn btn-dark me-auto" id="searchBtn">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
                </form>
            </div>
        </div>
        <!--MATCH START-->
        <div class="row align-items-start border border-dark">
            <div class="col bg-primary">
                <div class="row" style="height:100px;">
                    <div class="col-10">
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
        <!--MATCH START-->
        <div class="row align-items-start border border-dark">
            <div class="col bg-primary">
                <div class="row" style="height:100px;">
                    <div class="col-2 offset-md-10 text-end">
                        Team 1 <br>
                        W
                    </div>
                    <div class="row">
                        <div class="col-2 offset-md-10 text-end">
                            
                        </div>
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
    </div>
    <!--Test dataand info display-->
    <div class="position-static bg-secondary" style="width:350px;height:250px;">

    </div>
    <!--Footer-->
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item" id="homebtn2"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
            <p class="text-center text-muted">&copy; 2021 Company, Inc</p>
        </footer>
    </div>
    <!--Custom JS-->
    <script src="<?php echo base_url('welcome_message.js');?>"></script>
</body>
</html>