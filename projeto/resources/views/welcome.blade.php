<x-guest-layout>



    <!-- Featured Start -->
    <section>
        <div class="conteiner-banner">
            <div class="banner">
                <div class="texto">
                    <p class="title">Inovando Com Soluções</p>
                    <p class="sub">Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ratione corporis adipisicing elit. Natus, consequatur. Sed, quas of<p>
                        <div class="button-t">Veja Nossos Produtos</div>
                </div>
                <div class="image">
                    <img src="img/undraw_complete_design_re_h75h.svg" alt="">
                </div>

            </div>
        </div>
    </section>

    <section data-aos="zoom-in">

        <div id="textos">
            <div class="texto-principal">
                <p>Sempre <span class="red"> Acima </span> </p>

            </div>
                <div class="texto-secundario">
                    <p>os Melhores produtos e o melhor atendimento so Aqui</p>
                </div>
        </div>

    </section>

    <section data-aos="zoom-in">
        <div class="cards">
            <div class="cards-items">
                <div class="item-card">
                    <video  autoplay loop src="img/notebook.mp4"></video>
                    <p class="titulo-card">Titulo</p>
                    <p class="sub-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum delectus perspiciatis qui earum aut sap</p>
                    <a href="">Read More</a>
                </div>

                <div class="item-card">
                    <video  autoplay loop src="img/like.mp4"></video>
                    <p class="titulo-card">Titulo</p>
                    <p class="sub-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum delectus perspiciatis qui earum aut sap</p>
                    <a href="">Read More</a>
                </div>

                <div class="item-card">
                    <video  autoplay loop src="img/location.mp4"></video>
                    <p class="titulo-card">Titulo</p>
                    <p class="sub-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum delectus perspiciatis qui earum aut sap</p>
                    <a href="">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <section  data-aos="zoom-in">

        <div style="margin-top: 140px; margin-bottom: 80px;" id="textos">
            <div  class="texto-principal">
                <p>Sempre <span class="red" style="background-color:aqua"> Acima </span> </p>

            </div>
                <div class="texto-secundario">
                    <p>os Melhores produtos e o melhor atendimento so Aqui</p> <hr>
                </div>
        </div>

    </section>


    <!-- Categories Start
     <h2 style="margin-left: 540px; color:blue;"  class="section-title px-5"><span class="">   Categorias</span></h2>
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">

            @foreach($categorias as $categoria)
            @if ($categoria->id <= 9)



            <div class="col-lg-4 col-md-6 pb-1">

                <div class="cat-item d-flex flex-column border mb-4" style="width: 250px;">

                    <a href="{{route('categorias.show', $categoria->slug)}}" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{Storage::url($categoria->imagem)}}" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">{{$categoria->nome}}</h5>
                </div>
            </div>

            @endif
           @endforeach

        </div>
    </div> -->
    <!-- Categories End -->


    <!-- Offer Start -->

    <!-- Offer End -->



        <article >

            <div data-aos="fade-up" class="conteiner-products">
                @foreach ($produtos as $produto)
                @if ($produto->id <= 12)


                <div class="products">

                    <div  class="product">
                        <a href="{{route('produto.detalhes', $produto->id)}}"> <img src="{{Storage::url($produto->imagem)}}" alt=""> </a>
                        <p class="titulo-produto">{{$produto->nome}}</p>
                        <p class="sub-titulo">descricao</p>
                       <a href="form.html"> <p class="button-product">Solicite um Orc.</p> </a>

                    </div>

                    
                </div>
                @endif
            @endforeach
            </div>

        </article>





    <!-- Subscribe Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="row justify-content-md-center py-5 px-xl-5">
            <div class="col-md-6 col-12 py-5">
                <div class="text-center mb-2 pb-2">
                    <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">Gm Embalagens</span></h2>
                    <p>Empresa que esta ha x anos no mercado proporcionando um otimo atendimento e excelentes produtos.</p>
                </div>

            </div>
        </div>
    </div>
    <!-- Subscribe End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Produtos De Ultima Linha!</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">

            @foreach ($produtos as $produto)
            @if ($produto->id <= 12)


            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="{{Storage::url($produto->imagem)}}" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">{{$produto->nome}}</h6>
                        <div class="d-flex justify-content-center">
                            <h6>{{$produto->preco}}</h6><h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between  bg-light border">
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

                            <button class="btn btn-sm text-dark p-0"> <i class="fas fa-heart text-primary text-primary mr-1">Curti !</i></button>

                        </form>
                    </div>

                </div>
            </div>
            @endif
            @endforeach

        </div>
    </div>
    <!-- Products End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-1.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-2.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-3.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-4.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-5.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-6.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-7.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

</x-guest-layout>
