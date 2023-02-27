<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

   <!-- component -->

 
   
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
                    Action
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
            @foreach($categorias as $categoria)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$categoria->nome}}
                </th>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                    <img style="border-radius: 36px" src="{{Storage::url($categoria->imagem)}}" class="w-16 h-16 rounded" alt="">
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                {{$categoria->descricao}}
                </td>
                
                <td class="px-6 py-4">
                    <a href="{{route('admin.categoria.edit',$categoria->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                <td>
                <form action="{{route('admin.categoria.destroy', $categoria->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                    method="POST" 
                    onsubmit="return confirm('Quer mesmo deletar ?')" >
                    @csrf
                    @method('DELETE')
                    <button type='submit'>Delete</button>
                </form>
                </td>    
                <td class="px-6 py-4">
                    <a href="{{route('admin.categoria.create')}}" class="font-medium text-green-800 bg-green-500 px-8 py-2 rounded-lg hover:underline">New</a>
                </td>
                
            </tr>
            @endforeach
           
        </tbody>
    </table>
</div>



</x-admin-layout>
