<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="lg:ml-16">
        <div class="lg:ml-16">
        <div class="py-12 lg:ml-16">
            <div  class="max-w-7xl mx-auto lg:ml-16 sm:px-6 lg:px-8">
                <div  class="lg:ml-16">
                <div class='flex m-2 lg:ml-16 p-2'>
                    <a style="margin-top: 50px;" href="{{route('admin.pedidos.index')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Voltar para Pedidos</a>
                </div>
                </div>


                        <div  class="py-1 lg:ml-16">
                            <div  class="block lg:ml-16 p-6 rounded-lg shadow-lg bg-white max-w-md">
                
                
                <form  method="POST" action="{{ route('admin.pedidos.store') }}" enctype="multipart/form-data">
                    @csrf>
                  

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
                      placeholder="Nome da loja" name="nome_loja" id="nome_loja">
                      
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
                      placeholder="Endereço da loja" name="endereço" id="endereço">
                      
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
                      placeholder="Numero da Loja" name="numero" id="numero">
                      
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
                      placeholder="Quantidade" name="quantidade" id="quantidade">
                      
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
                      placeholder="Produto" name="produto" id="produto">
                      
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
</x-admin-layout>        