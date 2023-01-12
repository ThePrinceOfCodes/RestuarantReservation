<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.reservations.create')}}" class="px-4 py-2 bg-indigo-300 hover:bg-indigo-500 rounded-lg text-gray hover:text-white" > New Reservation</a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900"> 
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        First name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Last name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Mobile
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Res. Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Table Id
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Guest Number
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reservations as $reservation)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        {{ $reservation->first_name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $reservation->last_name }}
                                    </td><td class="px-6 py-4">
                                        {{ $reservation->email }}
                                    </td><td class="px-6 py-4">
                                        {{ $reservation->tel_number }}
                                    </td><td class="px-6 py-4">
                                        {{ $reservation->res_date }}
                                    </td><td class="px-6 py-4">
                                        {{ $reservation->table_id }}
                                    </td><td class="px-6 py-4">
                                        {{ $reservation->guest_number }}
                                    </td>
                                </tr>
                                @endforeach                                                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
