<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

        <div class="py-12">
            <div  class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class='flex m-2 p-2'>
                    <a style="margin-top: 50px;" href="{{route('admin.produtos.index')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">       Categories</a>
                </div>


                        <div class="py-1">
                            <div style="margin-top:180px; margin-left:420px;" class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
                                <form  method="POST" action="{{ route('admin.produtos.update', $produto->id) }}" enctype="multipart/form-data">
                                    @csrf>
                                    @method('PUT')
                                  <div class="form-group mb-6">
                                    <input type="text" class="form-control block
                                      w-full
                                      px-3
                                      py-1.5
                                      text-base
                                      font-normal
                                      text-gray-700
                                      bg-white bg-clip-padding
                                      border border-solid border-gray-300
                                      rounded
                                      transition
                                      ease-in-out
                                      m-0
                                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                      placeholder="Nome Do produto" name="nome" id="nome" value="{{$produto->nome}}">

                                  </div>

                                  <div class="form-group mb-6">
                                    <input type="text" class="form-control block
                                      w-full
                                      px-3
                                      py-1.5
                                      text-base
                                      font-normal
                                      text-gray-700
                                      bg-white bg-clip-padding
                                      border border-solid border-gray-300
                                      rounded
                                      transition
                                      ease-in-out
                                      m-0
                                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                      placeholder="Descrição" name="descricao" id="descricao" value="{{$produto->descricao}}">

                                  </div>

                                  <div class="form-group mb-6">
                                    <input type="text" class="form-control block
                                      w-full
                                      px-3
                                      py-1.5
                                      text-base
                                      font-normal
                                      text-gray-700
                                      bg-white bg-clip-padding
                                      border border-solid border-gray-300
                                      rounded
                                      transition
                                      ease-in-out
                                      m-0
                                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                      placeholder="Descricao Detalhada" name="descricao_detalhada" id="descricao_detalhada" value="{{$produto->descricao_detalhada}}">

                                  </div>

                                  <div class="form-group mb-6">
                                    <input type="number" class="form-control block
                                      w-full
                                      px-3
                                      py-1.5
                                      text-base
                                      font-normal
                                      text-gray-700
                                      bg-white bg-clip-padding
                                      border border-solid border-gray-300
                                      rounded
                                      transition
                                      ease-in-out
                                      m-0
                                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                      placeholder="Preço" name="preco" id="preco" value="{{$produto->preco}}">

                                  </div>

                                  <div class="form-group mb-6">
                                    <input type="text" class="form-control block
                                      w-full
                                      px-3
                                      py-1.5
                                      text-base
                                      font-normal
                                      text-gray-700
                                      bg-white bg-clip-padding
                                      border border-solid border-gray-300
                                      rounded
                                      transition
                                      ease-in-out
                                      m-0
                                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                      placeholder="quantidade" name="quantidade" id="quantidade" value="{{$produto->quantidade}}">

                                  </div>





                                  <button type="submit" class="
                                    w-full
                                    px-6
                                    py-2.5
                                    bg-blue-600
                                    text-white
                                    font-medium
                                    text-xs
                                    leading-tight
                                    uppercase
                                    rounded
                                    shadow-md
                                    hover:bg-blue-700 hover:shadow-lg
                                    focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                                    active:bg-blue-800 active:shadow-lg
                                    transition
                                    duration-150
                                    ease-in-out">Send</button>
                                </form>
                              </div>
                        </div>


            </div>
        </div>
</x-admin-layout>
