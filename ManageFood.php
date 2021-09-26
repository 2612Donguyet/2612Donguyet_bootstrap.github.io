<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="macate.css">
    <title>Manage Food</title>
</head>
<body>
    <header>
            <ul class="nav justify-content-center bg-cuatoi">
                <li class="nav-item">
                    <a class="nav-link bg-text"  href="../Admin/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-text" href="../Admin/ManageUser.php">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-text" href="../Admin/ManageCategory.php">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-text" href="../Admin/ManageFood.php" >Food</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-text" href="../Admin/ManageOrder.php" >Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-text" href="../Admin/Dashboard.php" >Logout</a>
                </li>
            </ul>
    </header>

    <main>
        <div class="maFood">
            <div class="text">
                <h3 class="Text-h3">Manage Food</h3>

                <button class="Button">
                    Add Food
                </button>
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle">
            
                    <thead>
                        <tr>
                        <th scope="col">S.N.</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Featured</th>
                        <th scope="col"> Active</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1.</th>
                                <td >Dumplings Specials</td>
                                <td >$5.00</td>
                                <td><div class="img1_food"></div></td>
                                <td >Yes</td>
                                <td >Yes</td>
                                <td >
                                    <div class="d-grid gap-2 d-md-block">
                                        <button class="btn btn-primary me-md-2 bg-update" type="button">Update Food</button>
                                        <button class="btn btn-primary bg-dele" type="button">Delete Food</button>
                                    </div>
                                </td>
                        </tr>
                            <!-- end row1 -->
                        <tr>
                            <th scope="row">2.</th>
                                <td>Best Burger</td>
                                <td >$4.00</td>
                                <td><div class="img2_food"></div></td>
                                <td>Yes</td>
                                <td >Yes</td>
                                <td >
                                    <div class="d-grid gap-2 d-md-block">
                                        <button class="btn btn-primary me-md-2 bg-update" type="button">Update Food</button>
                                        <button class="btn btn-primary bg-dele" type="button">Delete Food</button>
                                    </div>
                                </td>
                        </tr>
                            <!-- end row 2 -->
                        <tr>
                            <th scope="row">3.</th>
                                <td >Smoky BBQ Pizza</td>
                                <td >$6.00</td>
                                <td><div class="img3_food"></div></td>
                                <td >No</td>
                                <td >Yes</td>
                                <td >
                                    <div class="d-grid gap-2 d-md-block">
                                        <button class="btn btn-primary me-md-2 bg-update" type="button">Update Food</button>
                                        <button class="btn btn-primary bg-dele" type="button">Delete Food</button>
                                    </div>
                                </td>
                        </tr>
                        <!-- end row3 -->
                        
                        <tr>
                            <th scope="row">4.</th>
                                <td >Sadeko Momo</td>
                                <td >$6.00</td>
                                <td><div class="img4_food"></div></td>
                                <td >Yes</td>
                                <td >Yes</td>
                                <td>
                                    <div class="d-grid gap-2 d-md-block">
                                        <button class="btn btn-primary me-md-2 bg-update" type="button">Update Food</button>
                                        <button class="btn btn-primary bg-dele" type="button">Delete Food</button>
                                    </div>
                                </td>
                        </tr>
                        <!-- end row 4 -->
                        
                        <tr>
                            <th scope="row">5.</th>
                                <td >Mixed Pizza</td>
                                <td >$10.00</td>
                                <td><div class="img5_food"></div></td>
                                <td >Yes</td>
                                <td >Yes</td>
                                <td>
                                    <div class="d-grid gap-2 d-md-block">
                                        <button class="btn btn-primary me-md-2 bg-update" type="button">Update Food</button>
                                        <button class="btn btn-primary bg-dele" type="button">Delete Food</button>
                                    </div>
                                </td>
                        </tr>
                        <!-- end row 5 -->

                        <tr>
                            <th scope="row">6.</th>
                                <td >Sed ipsum cilum in </td>
                                <td >$52.00</td>
                                <td><div class="text_img6">Image not Added </div></td>
                                <td >No</td>
                                <td >No</td>
                                <td>
                                    <div class="d-grid gap-2 d-md-block">
                                        <button class="btn btn-primary me-md-2 bg-update" type="button">Update Food</button>
                                        <button class="btn btn-primary bg-dele" type="button">Delete Food</button>
                                    </div>
                                </td>
                        </tr>
                        <!-- end row 6 -->

                    </tbody>

                </table>
            </div>
        </div>
    </main>

    <footer>
        <div class="contact">
            <div class="text_contact">
                2020 All rights reserved, Food House. Developed By - <a href="" class="the_a">HanVu</a>
            </div>
        </div>
    </footer>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>