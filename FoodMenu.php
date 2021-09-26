<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   
    <link rel="stylesheet" href="food.css">
    <title>Food Menu</title>
</head>
<body>
   
    <header>
        <div class="container-fluid bg-cuatoi">
            <div class="row ">
                <div class="col-md-4">
                    <img src="imags/logo.png" class="rounded mx-auto d-block" alt="...">
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <nav class="navbar navbar-expand-lg navbar-light bg-cuatoi">
                            <div class="container-fluid">
                                <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                    <a class="nav-link  bg-text"  href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link bg-text" href="#">Categories</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link bg-text" href="#">Foods</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link  bg-text">Contact</a>
                                    </li>
                                </ul>
                                </div>
                            </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <main>
         <!-- search -->
         <div class="searchbtt">
                <input type="text" placeholder="Search for Food.." class="search_text"> 
                <button class="button">Search</button>
        </div>

        <!-- Food Menu -->
        
        <div class="menu">
            <div class="textmenu">
                <h3> Foods Menu</h3>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="imags/menu-momo.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Dumplings Specials</h5>
                                <p class="card-text">$5.00</p>
                                <p class="card-text"><small class="text-muted">Chicken Dumpling with herbs from Mountains</small></p>
                                <button class="bttn">Order Now</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col1 -->
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="imags/menu-burger.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Best Burger</h5>
                                <p class="card-text">$4.00</p>
                                <p class="card-text"><small class="text-muted">Burger with Ham, Pineapple and lots of Cheese</small></p>
                                <button class="bttn">Order Now</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col2 -->
            </div>
            <!-- end row1 -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="imags/menu-pizza.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Smoky BBQ Pizza</h5>
                                <p class="card-text">$6.00</p>
                                <p class="card-text"><small class="text-muted">Best Firewood Pizza in Town</small></p>
                                <button class="bttn">Order Now</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col1 -->
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="imags/menu-momo.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Sadeko Momo</h5>
                                <p class="card-text">$6.00</p>
                                <p class="card-text"><small class="text-muted">Best Spicy Momo for Winter</small></p>
                                <button class="bttn">Order Now</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row2 -->
            
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="imags/menu-pizza.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Mixed Pizza</h5>
                                <p class="card-text">$10.00</p>
                                <p class="card-text"><small class="text-muted">Pizza with chicken, Ham, Buf, Mushroom and Vegetables</small></p>
                                <button class="bttn">Order Now</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col1 -->

            </div>
            <!-- end row3 -->
           
        </div>
    </main>

    <footer>
        <div class="contact">
            <div class="logoCotact">
                    <div class="fb"></div>
                    <div class="ins"></div>
                    <div class="twt"></div>
                </div>
                <div class="text_contact">
                    <h6>All right reserved. Designed By <a href="" class="text-link">CSE TLU</a></h6>
                </div>
            </div>
        </div>
    </footer>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>