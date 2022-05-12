<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CodeIgniter</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
                <form method="get" action="<?php echo base_url('public/home') ?>">
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
        <div class="row">
            <div class="border border-dark mx-auto text-center align-items-center" style="height:600px;">
                Use search to find matches
            </div>
        </div>
        
        <!--MATCH END-->

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