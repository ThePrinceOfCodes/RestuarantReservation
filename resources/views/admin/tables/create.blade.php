<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-right m-2 p-2">
                <a href="{{ route('admin.tables.index')}}" class="px-4 py-2 bg-indigo-300 hover:bg-indigo-500 rounded-lg text-gray hover:text-white" > All Tables</a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded">
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <form  method="POST" action="{{ route('admin.tables.store')}}">
                    @csrf
                    <div class="sm:col-span-6">
                    @error('name')
                        <div class="text-sm text-red-500">{{ $message }}</div>
                    @enderror
                    <label for="name" class="block text-sm font-medium text-gray-700"> Name </label> 
                    <div class="mt-1">
                        <input type="text" id="name" name="name" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    </div>
                    <div class="sm:col-span-6">
                    @error('guest_number')
                        <div class="text-sm text-red-500">{{ $message }}</div>
                    @enderror
                    <label for="guest_number" class="block text-sm font-medium text-gray-700"> Guest Number</label>
                    <div class="mt-1">
                        <input type="number" id="guest_number" name="guest_number" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    </div>
                    <div class="sm:col-span-6 pt-5">
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    @error('status')
                        <div class="text-sm text-red-500">{{ $message }}</div>
                    @enderror
                    <div class="mt-1">
                        <select name="status" class="form block w-full mt-1">
                            @foreach (App\Enums\TableStatus::cases() as $status)
                                <option value="{{ $status->value }}">
                                    {{ $status->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="sm:col-span-6 pt-5">
                    @error('description')
                        <div class="text-sm text-red-500">{{ $message }}</div>
                    @enderror
                    <label for="description" class="block text-sm font-medium text-gray-700">Location</label>
                    <div class="mt-1">
                        <select name="location" class="form block w-full mt-1 ">
                            @foreach (App\Enums\TableLocation::cases() as $location)
                                <option value="{{ $location->value }}">
                                    {{ $location->name }}
                                </option>
                            @endforeach
                        </select>
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
