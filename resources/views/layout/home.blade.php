<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT Trisakti Pilar Persada</title>

    <link rel="icon" href="https://i.ibb.co/qjWYFrR/tpp.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
</head>
<!-- Navbar -->
<nav class="navbar py-3 shadow evalation-4 mb-4 navbar-expand-lg navbar-teriary bg-tertiary">
            <!-- Navbar brand -->
            <div class="col-lg-10 d-flex container-fluid" >
            <a class="d-flex text-black navbar-brand flex-wrap align-items-center justify-content-center justify-content-lg-start text-decoration-none"
                href="/">
                <img src="https://i.ibb.co/qjWYFrR/tpp.png" width="130px" alt="">
                <h5>PT. TRISAKTI PILAR PERSADA</h5>
            </a>
        </div>
       
        <!-- Avatar -->
        @auth
        <div class="col-lg text-center item-alignt-center">
        <div class="dropdown">
            <a class="dropdown-toggle fw-bold text-decoration-none align-items-center
             hidden-arrow me-5"
                role="button" data-bs-toggle="dropdown" aria-expanded="false"
                style="font-style: inherit;color:#2B2B78;text-decoration:none fw-bold" href="#">
                @if(Auth::user()->gambar)
                            <img class="image rounded-circle" src="{{asset('storage/'.Auth::user()->gambar)}}" alt="profile_image" style="width: 60px;height: 60px; padding: 10px; margin: 0px; ">
                            @else
                            <img class="image rounded-circle" src="https://i.ibb.co/wwcpxL0/user.png" alt="" style="width: 60px;height: 60px; padding: 10px; margin: 0px; ">
                            @endif
                
                {{ auth()->user()->username }}
            </a>
            <ul class="dropdown-menu">
                    @can('admin')
                    <li><a class="dropdown-item"
                        href="/admin/dashboard">Dashboard Admin</a></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class=" btn btn-outline text-black" style="color: #2B2B78">
                                    Logout
                                </button>
                        </li>
                    </form>
                        @endcan
                    @can('user')
                    <li><a class="dropdown-item"
                            href="{{ url('profileuser') }}">Profil</a></li>
                    
                    <li><a class="dropdown-item"
                            href="{{ url('changepassworduser') }}">Change Password</a></li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="text-black btn btn-outline:none" style="color: #2B2B78">
                                Logout
                            </button>
                    </li>
                </form>
            </ul>
            @endcan
        </div>
        </div>
        @endauth

        <div class="ms-2 text-center item-alignt-center navbar-collapse" >
            @guest
                <a href="/login"><button type="button" class="btn btn-outline-primary me-2"
                        style="btn-outline-color: #2B2B78">Login</button></a>
                <a href="/register"><button type="button" class="btn text-white"
                        style="background-color: #2B2B78">Register</button></a>
            @endguest
        </div>
</nav>
<body>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <div class="text-center p-4 text-light" style="background-color: #2B2B78">
            <p>&copy; 2022 PT Trisakti Pilar Persada</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>


</html>
