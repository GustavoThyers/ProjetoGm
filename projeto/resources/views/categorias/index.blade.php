<x-guest-layout>
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Categorias!</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            @foreach ($categorias as $categoria)


            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                       <a href="{{route('categorias.show', $categoria->slug)}}"> <img class="img-fluid w-100" src="{{Storage::url($categoria->imagem)}}" alt=""> </a>
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">{{$categoria->nome}}</h6>
                        <div class="d-flex justify-content-center">
                            <h6>{{$categoria->descricao}}</h6><h6 class="text-muted ml-2"></h6>
                        </div>
                    </div>
                    
                </div>


            </div>
            @endforeach
        </div>
    </div>

</x-guest-layout>
