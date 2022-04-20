<!doctype html>
<html lang="en">

<head>
    <title>Ghardev</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL('css/style.css') }}">
</head>

<body>
    <header>
        <div class="container">

            <nav class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <a href="/" class="logo navbar-brand" title>
                            <img src="{{ URL('img/logo.svg') }}" class="img-fluid logo">
                        </a>
                    </div>
                </div>
                <div class="container">
                    <div class="navbar-nav navbar-left">
                        <div class="btn-group">
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                For Rent
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Flat</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Room</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="navbar navbar-right">
                <button type="button" class="btn btn-outline-primary me-2">Login</button>
                <button type="button" class="btn btn-outline-primary me-2">Sign-up</button>
            </div>
        </div>
    </header>
    <div class="main-body-container">
        <div class="body">
            <div class="part1">
                <img src="{{ URL('img/carringbox.png') }}" data-sizes="auto" alt="mover" width="194px" height="148px">
                <div class="part11">
                    <h1 class="devtext">Rent rooms and find roommates
                        in our verified community</h1>
                </div>
                <img src="{{ URL('img/open door.png') }}" data-sizes="auto" alt="mover" width="167px" height="150px">
            </div>

        </div>
    </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>
<!-- parallax scrolling -->

</html>