<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="macate.css">
    <title>Manage User</title>
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
        <div class="maUser">
            <div class="text">
                <h3 class="Text-user">Manage Users</h3>

                <button class="Button">
                    Add New User
                </button>
            </div>

            <div class="table-responsive cuatoi">
                <table class="table table-hover align-middle">
            
                    <thead>
                        <tr>
                        <th scope="col">S.N.</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1.</th>
                                <td >Arsenio Leach</td>
                                <td>toduwaxobi</td>
                                <td >
                                    <div class="d-grid gap-2 d-md-block">
                                        <button class="btn btn-primary me-md-2 bg-change" type="button">Change Password</button>
                                        <button class="btn btn-primary bg-update" type="button">Update Admin</button>
                                        <button class="btn btn-primary bg-dele" type="button">Delete Admin</button>
                                    </div>
                                </td>
                        </tr>
                            <!-- end row1 -->
                        <tr>
                            <th scope="row">2.</th>
                                <td >Sasha Mendez</td>
                                <td>goxemyde </td>
                                <td >
                                    <div class="d-grid gap-2 d-md-block">
                                        <button class="btn btn-primary me-md-2 bg-change" type="button">Change Password</button>
                                        <button class="btn btn-primary bg-update" type="button">Update Admin</button>
                                        <button class="btn btn-primary bg-dele" type="button">Delete Admin</button>
                                    </div>
                                </td>
                        </tr>
                            <!-- end row 2 -->
                        <tr>
                            <th scope="row">3.</th>
                                <td >Vijay Thapa</td>
                                <td>vijaythapa</td>
                                <td >
                                    <div class="d-grid gap-2 d-md-block">
                                        <button class="btn btn-primary me-md-2 bg-change" type="button">Change Password</button>
                                        <button class="btn btn-primary bg-update" type="button">Update Admin</button>
                                        <button class="btn btn-primary bg-dele" type="button">Delete Admin</button>
                                    </div>
                                </td>
                        </tr>
                        <!-- end row3 -->
                        
                        <tr>
                            <th scope="row">4.</th>
                                <td >Administrator</td>
                                <td>admin</td>
                                <td >
                                    <div class="d-grid gap-2 d-md-block">
                                        <button class="btn btn-primary me-md-2 bg-change" type="button">Change Password</button>
                                        <button class="btn btn-primary bg-update" type="button">Update Admin</button>
                                        <button class="btn btn-primary bg-dele" type="button">Delete Admin</button>
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