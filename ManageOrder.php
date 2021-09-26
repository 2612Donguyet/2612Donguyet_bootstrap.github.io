<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="macate.css">
    <title>Manage Order</title>
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
        <div class="maOder">
            <div class="text">
                <h3 class="Text-h3">Manage Order</h3>

            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle">
            
                    <thead>
                        <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Food</th>
                        <th scope="col">Price</th>
                        <th scope="col">Qty.</th>
                        <th scope="col">Total</th>
                        <th scope="col">Order Date</th>
                        <th scope="col"> Status</th>
                        <th scope="col">Customer <br> Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1.</th>
                                <td >Mixed <br> Pizza</td>
                                <td >10.00</td>
                                <td >2</td>
                                <td>20.00</div></td>
                                <td >2020-11-30 <br> 04:07:17</td>
                                <td class="text_status">Delivered</td>
                                <td >Jana Bush </td>
                                <td>+1 (562) <br> 101-2028</td>
                                <td>tydujy@mailinator.com</td>
                                <td>Minima iure <br> ducimus</td>
                                <td><button class="bg-update">Update Order </button></td>
                        </tr>
                            <!-- end row1 -->
                        <tr>
                            <th scope="row">2.</th>
                                <td >Best <br> Burger</td>
                                <td >4.00</td>
                                <td >4</td>
                                <td>16.00</div></td>
                                <td >2020-11-30 <br> 03:52:43</td>
                                <td class="text_status">Delivered</td>
                                <td >Kelly Dillard </td>
                                <td>+1 (908) <br> 914-3106</td>
                                <td>fexekihor@mailinator.com</td>
                                <td>Incidunt ipsum <br> add</td>
                                <td><button class="bg-update">Update Order </button></td>
                        </tr>
                            <!-- end row 2 -->
                        <tr>
                            <th scope="row">3.</th>
                            <td >Sadelo <br> Momo</td>
                                <td >6.00</td>
                                <td >3</td>
                                <td>18.00</div></td>
                                <td >2020-11-30 <br> 03:49:48</td>
                                <td class="text_status1">Cancelled</td>
                                <td >Bradley <br> Farrell </td>
                                <td>+1 (576) <br> 504-4657</td>
                                <td>zuhafiq@mailinator.com</td>
                                <td>Duis aliqua <br> Qui lor</td>
                                <td><button class="bg-update">Update Order </button></td>
                        </tr>
                        <!-- end row3 -->
                       

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