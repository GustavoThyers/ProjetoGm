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
                    Id
                </th>
                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Nome
                </th>
                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Email
                </th>


                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Action
                </th>

                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Delete
                </th>


            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)


            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$user->id}}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$user->name}}
                </th>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                    {{$user->email}}
                </td>

                <td class="px-6 py-4">
                    <a href="{{route('admin.users.edit',$user->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                <td>
                    <form action="{{route('admin.users.destroy',$user->id)}}" class="font-medium text-red-600 dark:text-green-500 hover:underline"
                        method="POST" 
                        onsubmit="return confirm('Quer mesmo deletar esta manutençao? ?')" >
                        @csrf
                        @method('DELETE')
                        <button type='submit'>Deletar</button>
                    </form>
                </td>


            </tr>

            @endforeach
        </tbody>
    </table>
</div>



</x-admin-layout>
