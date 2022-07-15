<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <div class="d-block d-sm-none d-none d-sm-block d-md-none p-2 fixed-top" style="background-color: #1F1D2B">
        <div class="container text-white">
            <a href="javascript:window.history.go(-1);" class="text-white" style="text-decoration: none">
                <p class="mt-3" style="font-size: 18px"><i class="fa fa-arrow-left m-1" aria-hidden="true"></i>
                    Kembali
                </p>
            </a>
        </div>
    </div>

    {{-- nvbar2 --}}
    <nav class="navbar  d-none d-md-block d-lg-nonex navbar-expand-lg bg-transparentf fixed-top navbar-light py-4">
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
                        <a class="nav-link" href="/#produk">Produk<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/#vidio">Tentang</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/#kategori
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
                        {{-- <li class="nav-item">
                       <a class="nav-link" href="#">Hi,{{ auth('')->user()->name }}</a>

                   </li> --}}
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
    </div>


    <style>
        @media screen and (max-width: 900px) {}

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



    @yield('body')



    {{-- futer mobile --}}
    {{-- <div class="text-center fixed-bottom text-mute p-4 d-block d-sm-none d-none d-sm-block d-md-none"
        style="background-color: #1F1D2B;  border-top-right-radius: 20px; border-top-left-radius: 20px;">
        Developed By :
        <a class=" text-white fw-bold"
            href="https://www.instagram.com/accounts/login/?next=/msaddamhk01/"target="_blank">M Saddam
            Husein Khatami</a>


        <div class="row">

            <div class="col-3 text-white" style="font-size: 15px">
                <i class="fa-solid fa-house"></i>
            </div>
            <div class="col-3 text-white" style="font-size: 15px">
                <i class="fa-solid fa-list"></i>
            </div>
            <div class="col-3 text-white" style="font-size: 15px">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <div class="col-3 text-white" style="font-size: 15px">
                <i class="fa-solid fa-user"></i>
            </div>

        </div>
    </div> --}}
    {{-- akhir mobile --}}





    <!-- Footer -->
    <footer class="d-none d-md-block d-lg-nonex text-lg-start text-muted border "
        style="background-color: #ffffff; margin-top: 80px;">
        <!-- Section: Social media -->

        {{-- <section class=" d-flex justify-content-center justify-content-lg-between p-4 border-bottom"> --}}
        <!-- Left -->
        {{-- <div class="me-5 d-none d-lg-block text-black ">
            <span>Terhubung dengan kami di jejaring sosial:</span>
        </div> --}}
        <!-- Left -->

        <!-- Right -->
        {{-- <div>
                <a href="" class="me-4  text-reset" style="color: #275062; font-size:20px">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset" style="color: #275062; font-size:20px">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset" style="color: #275062; font-size:20px">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="" class="me-4 text-reset" style="color: #275062; font-size:20px">
                    <i class="fab fa-instagram"></i>
                </a>


            </div> --}}
        <!-- Right -->
        {{-- </section> --}}
        <!-- Section: Social media -->

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
                        {{-- <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15885.866445792522!2d95.26947416383098!3d5.497508795327145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30403a52bcac559f%3A0x4966e822a5857e23!2sNusa%2C%20Kec.%20Lhoknga%2C%20Kabupaten%20Aceh%20Besar%2C%20Aceh!5e0!3m2!1sid!2sid!4v1655977156437!5m2!1sid!2sid"
                            width="350" height="150" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                        <p>
                            Kec. Lhoknga, Kabupaten Aceh Besar, Aceh
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3  mx-auto mb-4">
                        <!-- Links -->
                        {{-- <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6> --}}
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
                    {{-- <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->

                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div> --}}
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 mb-md-0 mb-4 futer">
                        <!-- Links -->
                        <h6 class="fw-bold mb-4">
                            Hubungi Kami
                        </h6>
                        {{-- <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p> --}}
                        {{-- <p>
                            <i class="fas fa-envelope me-3"></i>
                            gampongnusa@gmail.com
                        </p> --}}
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

        <!-- Copyright -->
        <div class="text-center text-mute p-4" style="background-color: #1F1D2B">
            Developed By :
            <a class=" text-white fw-bold"
                href="https://www.instagram.com/accounts/login/?next=/msaddamhk01/"target="_blank">M Saddam
                Husein Khatami</a>
        </div>
        <!-- Copyright -->
    </footer>
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
            duration: 2000,
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
