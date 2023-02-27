<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Gm Embalagens</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/js/app.js">
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->

        <link href="img/favicon.ico" rel="icon">



    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
        <style>


        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div  class="min-h-screen flex flex-col sm:justify-center items-center  pt-6 sm:pt-0 bg-gray-100" >

             <!-- Topbar Start -->
             <div  class="container-fluid">
                <div  class="row  py-2 px-xl-5">
                    <div  class="col-lg-6 d-none d-lg-block">
                        <div  class="d-inline-flex align-items-center">
                            <a style="color:blue" class="" href="https://api.whatsapp.com/send?phone=+5585988378130">Whatsapp</a>
                            <span class="text-muted px-2">|</span>
                            <a style="color:blue;" class="" href="https://www.instagram.com/gm.embalagens/">Instagram</a>
                            <span class="text-muted px-2">|</span>
                            <a style="color:blue;" class="" href="">Facebook</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center text-lg-right">
                        <div class="d-inline-flex align-items-center">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>


                            <a class="text-dark px-2" href="https://www.instagram.com/gm.embalagens/">
                                <i class="fab fa-instagram"></i>
                            </a>

                        </div>
                    </div>
                </div>




        <div style="background-color:rgb(231, 8, 8);" class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <img style=" position: relative;  left:40px; width: 120px;  border-radius:15px; " src="https://th.bing.com/th/id/OIP.6hrKQspQeT_TJKveZnJb3gHaEK?w=261&h=180&c=7&r=0&o=5&pid=1.7" alt="">
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">

            </div>
            <div class="col-lg-3 col-6 text-right">

                <a  href="{{route('carrinho.index')}}" class="btn border">
                    <i style="background-color:blue;" class="fas fa-heart text-primary"></i>
                    <span class="badge">{{\Cart::getContent()->count()}}</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->

    <div class="container-fluid mb-5">
        <div  class="row border-top px-xl-5" >

            <div class="col-lg-2 d-none d-lg-block">

            </div>
            <div  class="col-lg-9" id="nav12">
                <nav  class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <img style=" width:130px; border-radius:10px;" src="https://th.bing.com/th/id/OIP.6hrKQspQeT_TJKveZnJb3gHaEK?w=261&h=180&c=7&r=0&o=5&pid=1.7" alt="">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0" class="navnav">
                            <a style="color:rgb(49, 49, 255);" href="/" class="nav-item nav-link active">Home</a>
                            <a style="color:rgb(49, 49, 255);" href="{{route('produto.index')}}" class="nav-item nav-link">Produtos</a>
                            <a style="color:rgb(49, 49, 255);" href="{{route('categorias.index')}}" class="nav-item nav-link">Categorias</a>
                            <a style="color:rgb(49, 49, 255);" href="/quemsomos" class="nav-item nav-link">Nosso Catálogo</a>
                            <div class="nav-item dropdown">
                                <a style="color:rgb(49, 49, 255);" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Serviços e Quem Somos</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a style="color:rgba(255, 0, 0, 0.681);" href="{{route('manutencao.index')}}" class="dropdown-item">Manutenção Na Sua Loja</a>
                                    <a style="color:rgba(255, 0, 0, 0.638);" href="{{route('pedidos.index')}}" class="dropdown-item">Agende Seu Orçamento</a>

                                </div>
                            </div>

                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <a href="/login" class="nav-item nav-link">Login</a>
                            <a href="/register" class="nav-item nav-link">Register</a>
                        </div>
                    </div>
                </nav>


    </div>
    <!-- Topbar End -->




    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Produtos</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="/">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shop</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Shop Start -->
    <div style="margin-left:200px" class="container-fluid pt-2">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->

            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">

                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <form action="{{route('produto.index')}}" method="GET">
                                <div class="input-group">
                                    <input type="text" name="busca" id="busca" class="form-control" placeholder="Search by name">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-transparent text-primary">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>

                                </div>

                            </form>

                        </div>
                        @if($busca)
                        <h2 style="margin-left: 250px; margin-bottom:50px; margin-top:50px" >Buscando por: {{$busca}}</h2>
                        @else
                        <h2 style="margin-left: 250px; margin-bottom:50px; margin-top:50px" > Produtos</h2>
                        @endif

                    </div>
                    @foreach ($produtos as $produto)
                    <div style="" class="col-lg-4 col-md-6 col-sm-12 pb-1">



                        <div class="card product-item border-0 mb-4">

                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="{{Storage::url($produto->imagem)}}" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">{{$produto->nome}}</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>${{$produto->preco}}</h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                 <a href="{{route('produto.detalhes', $produto->id)}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Veja OS Detalhes</a>

                                <form action="{{route('carrinho.add')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$produto->id}}">
                                    <input type="hidden" name="nome" value="{{$produto->nome}}">
                                    <input type="hidden" name="descricao" value="{{$produto->descricao}}">
                                    <input type="hidden" name="descricao_detalhada" value="{{$produto->descricao_detalhada}}">
                                    <input type="hidden" name="preco" value="{{$produto->preco}}">
                                    <input type="hidden" name="quantidade" value="{{$produto->quantidade}}">
                                    <input type="hidden" name="imagem" value="{{Storage::url($produto->imagem)}}">

                                    <button class="btn btn-sm text-dark p-0"> <i class="fas fa-shopping-cart text-primary mr-1">Add To Cart</i></button>

                                </form>
                            </div>

                        </div>

                    </div>

                    @endforeach
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" style="position: relative; top:-30px" class="text-decoration-none">
                    <h1  class="m-0 display-5 font-weight-semi-bold"><span style="color: rgb(225, 35, 35)" class=" font-weight-bold border px-3 mr-1">Gm</span>Embalagens</h1>
                </a>
                <p>Empresa que esta ha x anos no mercado proporcionando um otimo atendimento e excelentes produtos.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Seu Endereço</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>GmEmbalagens@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>Seu Numero Comercial</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="{{route('produto.index')}}"><i class="fa fa-angle-right mr-2"></i>Produtos</a>
                            <a class="text-dark mb-2" href="{{route('carrinho.index')}}"><i class="fa fa-angle-right mr-2"></i>Carrinho</a>
                            <a class="text-dark" href="{{route('pedidos.index')}}"><i class="fa fa-angle-right mr-2"></i>Pedidos</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="/"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="{{route('produto.index')}}"><i class="fa fa-angle-right mr-2"></i>Produtos</a>
                            <a class="text-dark mb-2" href="{{route('carrinho.index')}}"><i class="fa fa-angle-right mr-2"></i>Carrinho</a>
                            <a class="text-dark" href="{{route('pedidos.index')}}"><i class="fa fa-angle-right mr-2"></i>Pedidos</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">Gm Embalagens</a>. Todos Os Direitos Reservados
                    by
                    <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com">Gm Embalagens</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Footer End -->
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
