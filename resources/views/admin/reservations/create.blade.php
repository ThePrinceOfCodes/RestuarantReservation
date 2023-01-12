<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-right m-2 p-2">
                <a href="{{ route('admin.reservations.index')}}" class="px-4 py-2 bg-indigo-300 hover:bg-indigo-500 rounded-lg text-gray hover:text-white" > All Reservations</a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded">
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
            <form enctype="multipart/form-data" method="POST" action="{{ route('admin.reservations.store')}}">
                    @csrf
                    <div class="sm:col-span-6">
                    <label for="first_name" class="block text-sm font-medium text-gray-700"> First Name </label>
                    <div class="mt-1">
                        <input type="text" id="first_name" name="first_name" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    </div>
                    <div class="sm:col-span-6">
                    <label for="last_name" class="block text-sm font-medium text-gray-700"> First Name </label>
                    <div class="mt-1">
                        <input type="text" id="last_name" name="last_name" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    </div>
                    <div class="sm:col-span-6">
                    <label for="email" class="block text-sm font-medium text-gray-700"> Email</label>
                    <div class="mt-1">
                        <input type="email" id="email" name="email" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    </div>
                    <div class="sm:col-span-6">
                    <label for="tel_number" class="block text-sm font-medium text-gray-700"> tel number </label>
                    <div class="mt-1">
                        <input type="number" id="tel_number" name="tel_number" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    </div>
                    <div class="sm:col-span-6">
                    <label for="table_id" class="block text-sm font-medium text-gray-700"> Table Id </label>
                    <div class="mt-1">
                        <input type="number" id="table_id" name="table_id" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    </div>
                    <div class="sm:col-span-6 pt-5">
                    <label for="res_date" class="block text-sm font-medium text-gray-700">Reservation Date</label>
                    <div class="mt-1">
                        <input type="date" id="res_date" name="res_date" rows="3"  class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                    </div>
                    </div>
                    <div class="sm:col-span-6">
                    <label for="guest_number" class="block text-sm font-medium text-gray-700"> Guest Number </label>
                    <div class="mt-1">
                        <input type="number" id="guest_number" name="guest_number" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    </div>
                    <div class="mt-6">
                        <button type="submit" class="px-4 py-2 bg-indigo-300 hover:bg-indigo-500 rounded-lg text-gray hover:text-white">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>

</x-admin-layout>
