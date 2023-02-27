<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    

       
<body class="font-mono lg:ml-16 bg-gray-400">
    <!-- Container -->
    <div class="container lg:ml-16 mx-auto">
        <div class="lg:ml-16">
            <div class="lg:ml-16">
                <!-- Col -->
               <div class="lg:ml-16">
                <!-- Col -->
                <div  class=" lg:w-5/12 lg:ml-16 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Peça Sua Manutenção</h3>
                    <form style="margin-top: 60px;  "class="lg:ml-16" method="POST" action="{{ route('admin.categoria.store') }}" enctype="multipart/form-data">
                        @csrf>
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="Nome">
                                    Nome
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="nome"
                                    type="text"
                                    placeholder="Name" name="nome" id="nome">
                                />
                            </div>
                            <div class="md:ml-2">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="slug">
                                    Slug
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="nome_loja"
                                    type="text"
                                    placeholder="slug" name="slug" id="slug">
                                />
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="imagem">
                               Imagem
                            </label>
                            <input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                
                                type="file"
                                name="imagem" id="imagem">
                            />
                        </div>
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="descricao">
                                    Descrição
                                </label>
                                <textarea
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    
                                    type="text"
                                    id="descricao"
                                    name="descricao"
                                    rows="3"
                                    placeholder="Message"
                                >
                                </textarea>

                            </div>
                            


                        </div>
                        <div class="mb-6 text-center">
                            <button
                                class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                type="submit"
                            >
                                Confirmar
                            </button>
                        </div>




                    </form>
                </div>
            </div>

        </div>   
        </div>    
        

</body>
</x-admin-layout>

