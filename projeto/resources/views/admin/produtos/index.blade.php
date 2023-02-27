<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">

    <table style=" margin-top: 250px; " class="w-full mt-14 text-sm text-left text-gray-100 dark:text-gray-100">

        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Nome
                </th>

                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Imagem
                </th>

                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Descrição
                </th>

                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Descrição Detalhada
                </th>

                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Preço
                </th>

                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Categoria
                </th>
                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Edit
                </th>
                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Delete
                </th>


                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Nova Categoria
                </th>
            </tr>
        </thead>
        <tbody>


            @foreach ($produtos as $produto)






            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$produto->nome}}
                </th>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                    <img  style="border-radius: 36px" class="w-16 h-16 rounded" alt="" src="{{Storage::url($produto->imagem)}}">
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                    {{$produto->descricao}}
                </td>

                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                    {{$produto->descricao_detalhada}}
                </td>

                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                    R$ {{$produto->preco}}
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                    {{$produto->id_categoria}}
                </td>



                <td class="px-6 py-4">
                    <a href="{{route('admin.produtos.edit',$produto->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                <td>
                    <form action="{{route('admin.produtos.destroy', $produto->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                        method="POST"
                        onsubmit="return confirm('Quer mesmo deletar ?')" >
                        @csrf
                        @method('DELETE')
                        <button type='submit'>Delete</button>
                    </form>
                    </td>
                <td class="px-6 py-4">
                    <a href="{{route('admin.produtos.create')}}" class="font-medium text-green-800 bg-green-500 px-8 py-2 rounded-lg hover:underline">New</a>
                </td>




            </tr>

           @endforeach

        </tbody>
    </table>
</div>
</x-admin-layout>
