 <!-- navbar -->
 <nav class="navbar  navbar-expand-lg bg-transparentf fixed-top navbar-light py-4">
     {{-- d-block d-sm-none d-none d-sm-block d-md-none --}}
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
                     <a class="nav-link" href="{{ route('home') }}">Beranda <span class="sr-only">(current)</span></a>
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
                     <a class="nav-link" href="{{ route('home') }}">Beranda <span class="sr-only">(current)</span></a>
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
