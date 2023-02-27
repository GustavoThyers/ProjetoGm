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
                    Nome Do Propietario
                </th>
                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Nome Do estabelecimento
                </th>
                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Endereço
                </th>

                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Numero Do Local
                </th>

                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Motivo Da Consulta
                </th>

                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Ação
                </th>

                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    New
                </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($manutencoes as $manu)
                
            
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$manu->nome}}
                </th>
                
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                    {{$manu->nome_loja}}
                </td>

                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white " placeholder="Bairro, Rua">
                    {{$manu->endereço}}
                </td>

                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white " >
                    {{$manu->numero}}
                </td>

                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white " >
                    {{$manu->motivo}}
                </td>



                <td>
                    <form action="{{route('admin.manutencao.destroy', $manu->id)}}" class="font-medium text-green-600 dark:text-green-500 hover:underline"
                        method="POST" 
                        onsubmit="return confirm('Quer mesmo deletar esta manutençao? ?')" >
                        @csrf
                        @method('DELETE')
                        <button type='submit'>Concluido</button>
                    </form>
                </td>

                <td class="px-6 py-4">
                    <a href="{{route('admin.manutencao.create')}}" class="font-medium text-green-800 bg-green-500 px-8 py-2 rounded-lg hover:underline">New</a>
                </td>
                
            @endforeach
            
        </tbody>
    </table>
</div>
</x-admin-layout>
