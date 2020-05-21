
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="/images/logo/logo.png" type="image/png">
    <link rel="stylesheet" href="/dependencies/bootstrap/css/bootstrap.min.css">
    @stack('styles')
    
    
    <link rel="stylesheet" href="/dependencies/fontawesome/css/all.min.css">
</head>

<body @stack('class')>

    <header>
        <div class="container">
            <nav class="d-flex justify-content-between align-items-center">
                <a href="/"><img src="/images/logo/header_logo.png"></a>
                <ul>
                    @auth
                        <li><a href="/product/create">Add product</a></li>
                        <li><a href="/home">{{Auth::user()->name}}</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endauth
                    @guest
                        <li><a href="/login">Log in</a></li>
                        <li><a href="/register">Sign in</a></li>
                    @endguest
                </ul>
            </nav>

            <nav class="d-flex align-items-center mt-3">
                <div class="d-flex flex-grow-1 justify-content-center">
                    <div class="search">
                        <form action="/search" method="GET">
                            <input type="text" name="string" placeholder="Search products">
                            <button>Search</button>
                        </form>
                    </div>
                </div>

                @auth
                    <div class="cart_btn">
                    <a href="/card">MY CART</a><label>{{$count}}</label>
                    </div>
                @endauth
            </nav>
        </div>
    </header>
   

        
        
        @yield('block')



</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="/dependencies/bootstrap/js/bootstrap.min.js"></script>
@stack('scripts')

</html>