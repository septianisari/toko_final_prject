<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
     <meta name="description" content="" />
     <meta name="author" content="" />
     <title>Annisa Tun Saadah</title>
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}" />
     <!-- Bootstrap icons-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
     <!-- Core theme CSS (includes Bootstrap)-->
     <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
</head>

<body>
     <!-- Navigation-->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container px-4 px-lg-5">
               <a class="navbar-brand" href="#!">Toko App Annisa</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                         <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Beranda</a></li>
                         <li class="nav-item"><a class="nav-link" href="#!">Tentang Kami</a></li>
                    </ul>
                     <form class="d-flex">
                         {{-- <button class="btn btn-outline-dark" type="submit"> --}}
                               <a href="{{ route('login') }}" class="btn btn-outline-dark">
                              Login App
                               </a>
                         {{-- </button> --}}
                    </form>
               </div>
          </div>
     </nav>
     <!-- Header-->
     <header class="bg-dark py-5">
          <div class="container px-4 px-lg-5 my-5">
               <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Nanti diganti Banner toko</h1>
                    {{-- <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p> --}}
               </div>
          </div>
     </header>
     <!-- Section-->
     <section class="py-5">
          <div class="container px-4 px-lg-5 mt-5">
               <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($barangs as $barang)
                    <div class="col mb-5">
                         <div class="card h-100">
                              <!-- Product image-->
                              <img class="card-img-top" src="{{ asset('storage/images/barang/'.$barang->foto) }}" alt="..." />
                              <!-- Product details-->
                              <div class="card-body">
                                   <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">{{ $barang->nama_barang }}</h5>
                                        <!-- Product price-->
                                       <p>Rp. {{ $barang->harga }}</p>
                                        <div>
                                             <p>Stok Tersedia : {{ $barang->stok }}</p>
                                        </div>
                                   </div>
                                   <div class="card-footer p-2 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Lihat Selengkapnya</a></div>
                                   </div>
                              </div>
                              <!-- Product actions-->
                              
                         </div>
                    </div>
                    @endforeach

               </div>
          </div>
     </section>
     <!-- Footer-->
     <footer class="py-5 bg-dark">
          <div class="container">
               <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
          </div>
     </footer>
     <!-- Bootstrap core JS-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     <!-- Core theme JS-->
     <script src="{{asset('js/scripts.js')}}"></script>
</body>

</html>