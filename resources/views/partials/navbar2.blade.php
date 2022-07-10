<!-- navbar -->
  <!-- <div class="container fixed-top mt-3"> -->
  <nav class="navbar navbar-expand-lg bg-transparent fixed-top navbar-light py-4">
      <div class="container">
        <a class="navbar-brand" style="color: #275062; font-weight: 700;" href="#">Nusakreatif</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#produk" >Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#vidio">Video</a>
          </li>
          <li class="nav-item d-none d-lg-block ">
            <a class="nav-link" >| </a>
             
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Hi,Saddam</a>
             
          </li>
         
          <li class="nav-item">
            <a class="nav-link fa fa-cart-plus" style="font-size: 22px;" href="/keranjang" ></a>
             
          </li>
          
          
        </ul>
 
        
      </div>
      </div>
    </nav>  
  </div>

  <style>
    .navcolor{
      background-color: #ffffff;
      color: #275062;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      transition: all ease-in-out 0.7s;
    }
    .bg-transparent{
      transition: all ease-in 0.5s;
    }
 
  </style>

  <script>
   const navbar = document.getElementsByTagName('nav')[0];
   window.addEventListener('scroll', function(){
     console.log(window.scrollY);
     if (window.scrollY > 2) {
       navbar.classList.replace('bg-transparent', 'navcolor');
     } else if (this.window.scrollY <= 0) {
       navbar.classList.replace('navcolor', 'bg-transparent')
     }
   });


  </script>
 
<!-- akhirnavbar -->