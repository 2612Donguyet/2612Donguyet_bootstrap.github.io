<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="macate.css">
    <title>Manage Category</title>
</head>
<body>
    <header>
            <ul class="nav justify-content-center bg-cuatoi">
                <li class="nav-item">
                    <a class="nav-link bg-text"  href="../Admin/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-text" href="#">Admin</a>
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
                    <a class="nav-link bg-text" href="#" >Logout</a>
                </li>
            </ul>
    </header>

    <main>
        <div class="maCate">
            <div class="text">
                <h3 class="Text-h3">Manage Category</h3>

                <button class="Button">
                    Add Category
                </button>
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle">
            
                    <thead>
                        <tr>
                        <th scope="col">S.N.</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Featured</th>
                        <th scope="col"> Active</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1.</th>
                                <td >Pizza</td>
                                <td><div class="img1"></div></td>
                                <td >Yes</td>
                                <td >Yes</td>
                                <td >
                                    <div class="d-grid gap-2 d-md-block">
                                        <button class="btn btn-primary me-md-2 bg-update" type="button">Update Category</button>
                                        <button class="btn btn-primary bg-dele" type="button">Delete Category</button>
                                    </div>
                                </td>
                        </tr>
                            <!-- end row1 -->
                        <tr>
                            <th scope="row">2.</th>
                                <td>Burger</td>
                                <td><div class="img2"></div></td>
                                <td>Yes</td>
                                <td >Yes</td>
                                <td >
                                    <div class="d-grid gap-2 d-md-block">
                                        <button class="btn btn-primary me-md-2 bg-update" type="button">Update Category</button>
                                        <button class="btn btn-primary bg-dele" type="button">Delete Category</button>
                                    </div>
                                </td>
                        </tr>
                            <!-- end row 2 -->
                        <tr>
                            <th scope="row">3.</th>
                                <td >Momo</td>
                                <td><div class="img3"></div></td>
                                <td >Yes</td>
                                <td >Yes</td>
                                <td >
                                    <div class="d-grid gap-2 d-md-block">
                                        <button class="btn btn-primary me-md-2 bg-update" type="button">Update Category</button>
                                        <button class="btn btn-primary bg-dele" type="button">Delete Category</button>
                                    </div>
                                </td>
                        </tr>
                        <!-- end row3 -->
                        
                        <tr>
                            <th scope="row">4.</th>
                                <td >Quia est ipsum id id</td>
                                <td><div class="img4"></div></td>
                                <td >No</td>
                                <td >Yes</td>
                                <td>
                                    <div class="d-grid gap-2 d-md-block">
                                        <button class="btn btn-primary me-md-2 bg-update" type="button">Update Category</button>
                                        <button class="btn btn-primary bg-dele" type="button">Delete Category</button>
                                    </div>
                                </td>
                        </tr>
                        <!-- end row 4 -->
                        
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