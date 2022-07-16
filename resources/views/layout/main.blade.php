<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , virtual-keyboard=overlays-content">
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


<body style="font-family: 'Poppins', sans-serif;">

    @include('partials.navbar')
    @yield('body')



    {{-- futer mobile --}}
    <footer class="container text-center fixed p-4 d-block d-sm-none d-none d-sm-block d-md-none"
        style="background-color: #1F1D2B;  border-top-right-radius: 18px; border-top-left-radius: 18px;">

        <div class="row">
            <div class="col-3 text-white" style="font-size: 15px">
                <a href="/" class="sidebar-item {{ $title === 'Beranda' ? 'active' : '' }}">
                    <i class="fa-solid fa-house"></i>
                </a>
            </div>
            <div class="col-3 text-white" style="font-size: 15px">
                <a href="/pesanandetail" class="sidebar-item {{ $title === 'Pesanan' ? 'active' : '' }}">
                    <i class="fa-solid fa-list"></i>
                </a>
            </div>
            <div class="col-3 text-white" style="font-size: 15px">
                <a href="/keranjang" class="sidebar-item {{ $title === 'Keranjang' ? 'active' : '' }}">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </div>
            @auth
                {{-- keluar --}}
                <div class="col-3 text-white" style="font-size: 15px">
                    <a href="/user" class="sidebar-item {{ $title === 'User' ? 'active' : '' }}">
                        <i class="fa-solid fa-user"></i>
                    </a>
                </div>
            @else
                {{-- masuk --}}
                <div class="col-3 text-white" style="font-size: 15px">
                    <a href="/login" class="sidebar-item {{ $title === 'User' ? 'active' : '' }}">
                        <i class="fa fa-sign-in" aria-hidden="true">
                        </i>
                    </a>
                </div>
            @endauth
        </div>
    </footer>

    <style>
        .sidebar-item {
            color: #ffffff
        }

        .sidebar-item.active {
            color: #6C5ECF;
        }

        /* .fixed-botto {
            bottom: 0;
            width: 100%;
            height: auto;
            margin-bottom: calc(0px + env(keyboard-inset-height));
        } */

        .fixed {
            position: sticky;
            margin: 0px;
            padding: 0px;
            bottom: 0%;
            margin-bottom: calc(0px + env(keyboard-inset-height));
        }

        @media screen and (max-height: 900px) {
            .fixed {
                position: sticky;
                z-index: -2;
            }

            ...
        }
    </style>
    {{-- akhir mobile --}}





    <!-- Footer -->
    <footer class="d-none d-md-block d-lg-nonex text-lg-start text-muted border "
        style="background-color: #ffffff; margin-top: 80px;">
        <!-- Section: Links  -->
        <section class="p-4">
            <div class="container text-black  text-md-start ">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-6 mt-md-0  mx-auto mb-4">
                        <!-- Content -->
                        <h6 class=" fw-bold mb-4">
                            Alamat
                        </h6>
                        <p>
                            Kec. Lhoknga, Kabupaten Aceh Besar, Aceh
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3  mx-auto mb-4">
                        <p>
                            <a href="https://api.whatsapp.com/send?phone=6285760557702&text= Hai Admin  Saya Ingin Menanyakan Informasi mengenai ....."
                                class="text-reset">Bantuan</a>
                        </p>
                        <p>
                            <a href="/#vidio" class="text-reset">Tentang</a>
                        </p>
                        <p>
                            <a href="/#kategori" class="text-reset">Kategori</a>
                        </p>
                        <p>
                            <a href="/#produk" class="text-reset">Produk</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 mb-md-0 mb-4 futer">
                        <!-- Links -->
                        <h6 class="fw-bold mb-4">
                            Hubungi Kami
                        </h6>
                        <a href="https://www.instagram.com/accounts/login/?next=/gampongnusaku/" target="_blank"
                            class="text-reset" style="text-decoration: none">
                            <p> <i class="fab fa-instagram me-3"></i>
                                gampongnusaku
                        </a></p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->
    </footer>
    <!-- Copyright -->
    <div class="text-center p-4 d-none d-md-block d-lg-nonex text-lg-start"
        style="color:rgb(161, 161, 161);background-color: #1F1D2B">
        Developed By :
        <a class=" text-white fw-bold"
            href="https://www.instagram.com/accounts/login/?next=/msaddamhk01/"target="_blank">M Saddam
            Husein Khatami</a>
    </div>
    <!-- Copyright -->
    <!-- akhir Footer -->


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

        // AOS.init({
        //     disable: function() {
        //         var maxWidth = 800;
        //         return window.innerWidth < maxWidth;
        //     }
        // });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    @yield('javascript')

</body>

</html>
