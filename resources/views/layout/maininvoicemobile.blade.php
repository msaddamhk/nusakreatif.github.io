<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- <meta name="viewport" user-scalable="no" content="width=device-width, initial-scale=1.0"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Nusa Kreatif | {{ $title }}</title>
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- aos css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/index.css ') }}">
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css ') }}">

    <!-- slick css -->
    <link rel="stylesheet" href="{{ asset('css/slick.css ') }}">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>


<body style="font-family: 'Poppins', sans-serif; height:100%">

    {{-- <div class="d-block d-sm-none d-none d-sm-block d-md-none p-2 fixed-top" style="background-color: #1F1D2B">
        <div class="container text-white">
            <a href="javascript:window.history.go(-1);" class="text-white" style="text-decoration: none">
                <p class="mt-3" style="font-size: 18px"><i class="fa fa-arrow-left m-1" aria-hidden="true"></i>
                    Detail {{ $title }}
                </p>
            </a>
        </div>
    </div> --}}



    {{-- nvbar2 --}}
    {{-- <nav class="navbar  d-none d-md-block d-lg-nonex navbar-expand-lg bg-transparentf fixed-top navbar-light py-4">
        <div class="container">
            <a class="navbar-brand" style="color: #242231; font-weight: 800; font-size:24px"
                href="{{ route('home') }}">Nusakreatif</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('home') }}">Beranda <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/produk">Produk<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/#vidio">Tentang</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/detailkategori
                   ">Kategori</a>
                    </li>

                    @auth

                        <li class="nav-item d-none d-lg-block ">
                            <a class="nav-link">| </a>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Hi,{{ auth('')->user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/pesanandetail">Pesanan</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hi,{{ auth('')->user()->name }}</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link fa fa-cart-plus mr-3" style="font-size: 22px;" href="/keranjang"></a>

                        </li>


                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="btn p-2 my-2 my-sm-0 text-white"
                                style="background-color: #6C5ECF; font-size:14px" type="submit"><i
                                    class="fas fa-sign-out-alt p-1"></i>Keluar</button>
                        </form>
                    @else
                        <a href="/login" class="btn  my-2 my-sm-0 text-white" style="background-color: #6C5ECF;"
                            type="submit">Masuk</a>

                    @endauth


                </ul>
            </div>
        </div>
    </nav>
    </div> --}}


    <style>
        .navcolor {
            background-color: #ffffff;
            color: #242231;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0);
            transition: all ease-in-out 0.7s;
        }

        .nav-link {
            color: #242231;
            font-size: 18px;
        }

        /* .navbar-2 {
        display: none;
        content: "";
    } */
        .navbar {
            display: none;
        }

        .bg-transparentf {
            transition: all ease-in 0.5s;
            background-color: #ffffff;
            /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.2); */
        }
    </style>

    <script>
        const navbar = document.getElementsByTagName('nav')[0];
        window.addEventListener('scroll', function() {
            if (window.scrollY > 2) {
                navbar.classList.replace('bg-transparentf', 'navcolor');
            } else if (this.window.scrollY <= 0) {
                navbar.classList.replace('navcolor', 'bg-transparentf')
            }
        });
    </script>
    <!-- akhirnavbar -->


    <div class="div">
        @yield('body')
    </div>













    <!-- aos -->
    <!-- ak aos-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/jva.js') }}"></script>
    {{-- <script src="{{ asset('js/trix.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1800,
            delay: 500,
            once: true

            // disable: function() {
            //     var maxWidth = 800;
            //     return window.innerWidth < maxWidth;
            // }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    @yield('javascript')

</body>

</html>
