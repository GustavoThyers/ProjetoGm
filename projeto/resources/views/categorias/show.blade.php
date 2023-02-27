<x-guest-layout>
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Categorias!</span></h2>
        </div>

        <div class="row px-xl-5 pb-3">
            @foreach ($produtos as $produto)


            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">


                <div class="card product-item border-0 mb-4">

                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="{{Storage::url($produto->imagem)}}" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">{{$produto->nome}}</h6>
                        <div class="d-flex justify-content-center">
                            <h6>{{$produto->preco}}</h6><h6 class="text-muted ml-2"></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">

                        <form action="{{route('carrinho.add')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$produto->id}}">
                            <input type="hidden" name="nome" value="{{$produto->nome}}">
                            <input type="hidden" name="descricao" value="{{$produto->descricao}}">
                            <input type="hidden" name="descricao_detalhada" value="{{$produto->descricao_detalhada}}">
                            <input type="hidden" name="preco" value="{{$produto->preco}}">
                            <input type="hidden" name="quantidade" value="{{$produto->quantidade}}">
                            <input type="hidden" name="imagem" value="{{Storage::url($produto->imagem)}}">

                            <button class="btn btn-sm ztext-dark p-0"> <i class="fas fa-heart text-primary text-primary mr-1">Curti !</i></button>

                        </form>
                    </div>

                </div>

            </div>

            @endforeach
            </div>

        </div>

    </div>

</x-guest-layout>
