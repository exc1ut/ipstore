<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="/images/logo/logo.png" type="image/png">
    <link rel="stylesheet" href="/dependencies/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/addproduct.css">
    <link rel="stylesheet" href="/dependencies/fontawesome/css/all.min.css">
</head>

<body class="addproduct">

    <header>
        <div class="container">
            <nav class="d-flex justify-content-between align-items-center">
                <img src="images/logo/header_logo.png">
                <ul>
                    <li><a href="">Orders</a></li>
                    <li><a href="">My Account</a></li>
                </ul>
            </nav>

            <nav class="d-flex align-items-center mt-3">
                <div class="d-flex flex-grow-1 justify-content-center">
                    <div class="search">
                        <form action="">
                            <input type="text" name="search" placeholder="Search products">
                            <button>Search</button>
                        </form>
                    </div>
                </div>

                <div class="cart_btn">
                    <a href="">MY CART</a><label>12</label>
                </div>
            </nav>
        </div>
    </header>


    <main class="d-flex justify-content-center">

       @yield('block')



    </main>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="/dependencies/bootstrap/js/bootstrap.min.js"></script>
<script src="/js/addproduct.js"></script>

</html>