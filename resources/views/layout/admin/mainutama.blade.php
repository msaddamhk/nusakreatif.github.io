<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    {{-- <link rel="stylesheet" type="text/css" href=" {{ asset('css/dashboard.css') }}"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>

    <!-- css -->
    <link rel="stylesheet" href="css/index.css">

    <!-- trix editor -->
    <link rel="stylesheet" type="text/css" href="css/trix.css">
    <script type="text/javascript" src="js/trix.js"></script>
</head>
<style></style>



<body style="font-family: 'poppins', sans-serif ">
    <nav class="navbar  p-4 bg-transparentf fixed-top">
        <div class="container">
            <button class="btn text-white" style="background-color: #6C5ECF" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                <i class="fa-solid fa-bars"></i>
            </button>

            <div class="offcanvas offcanvas-start" style="background-color: #242231" data-bs-scroll="true"
                tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header" style=" background-color: #6C5ECF">
                    <h5 class="offcanvas-title text-white " id="offcanvasWithBothOptionsLabel">
                        <i class="fa fa-cog m-2" style="color: #ffffff" aria-hidden="true"></i>Admin Nusakreatif
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="p-4 mt-4">
                    <div class="ti mb-5 hover ">
                        <a href="/admin" class="title ">
                            <i class="fas fa-briefcase title1"></i>
                            <span class="m-2" style="color: rgb(255, 255,
                            255)">Kelola
                                Barang</span>
                        </a>
                    </div>
                    <div class="ti mb-5 hover">
                        <a href="/kategori" class="title">
                            <i class="fa fa-list-alt title1" aria-hidden="true"></i>
                            <span class="m-2" style="color: rgb(255, 255, 255)">Kelola
                                Kategori</span>
                        </a>
                    </div>
                    <div class="mb-5 ti hover">
                        <a href="/kelolaadmin" class="title">
                            <i class="fa-solid fa-user title1"></i>
                            <span class="m-2" style="color: rgb(255, 255, 255)">Kelola Admin
                            </span>
                        </a>
                    </div>

                    <div class="ti mb-5 hover">
                        <a href="/kelolapesanan" class="title">
                            <i class="fas fa-archive title1"></i>
                            <span class="m-2" style="color: rgb(255, 255, 255)">Kelola Pesanan
                            </span>
                        </a>
                    </div>
                </div>
                {{-- <img src="foto/ft16.png" class="" style="margin-top: 140px" alt=""> --}}

            </div>


            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn my-2 my-sm-0 text-white" style="background-color: #6C5ECF"
                    type="submit">
                    <i class="fas fa-sign-out-alt p-1"></i>Keluar
                </button>
            </form>
        </div>

        <style>
            .navcolor {
                background-color: #242231;
                color: #275062;
                box-shadow: #242231;
                transition: all ease-in-out 0.7s;
            }

            .bg-transparentf {
                transition: all ease-in 0.5s;
                background-color: #242231;
                /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.2); */
            }

            .title {
                font-size: 18px;
                color: #ffffff;
                text-decoration: none;
            }

            .title1 {
                font-size: 18px;
                color: #b0a6ff;
                text-decoration: none;
            }

            .hover:hover {
                background-color: #6C5ECF;
                border-radius: 10px;
                /* background-image: url(../foto/ft16.png); */
                transition: all ease-in 0.5s;
                padding: 15px;
            }

            /* .ti:hover {


                background-color: #ffffff;
                width: 100%;
            }

            .title:hover {
                color: #275062;
                text-decoration: none;
            } */
        </style>

        <script>
            const navbar = document.getElementsByTagName('nav')[0];
            window.addEventListener('scroll', function() {
                console.log(window.scrollY);
                if (window.scrollY > 2) {
                    navbar.classList.replace('bg-transparentf', 'navcolor');
                } else if (this.window.scrollY <= 0) {
                    navbar.classList.replace('navcolor', 'bg-transparentf')
                }
            });
        </script>
    </nav>

    @yield('body')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
    {{-- <script src="{{ asset('js/script.js') }}"></script> --}}

</body>

</html>

{{-- awwaaalll baru --}}
