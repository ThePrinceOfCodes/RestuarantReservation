<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-right m-2 p-2">
                <a href="{{ route('admin.menus.index')}}" class="px-4 py-2 bg-indigo-300 hover:bg-indigo-500 rounded-lg text-gray hover:text-white" > All menus</a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded">
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <form enctype="multipart/form-data" method="POST" action="{{ route('admin.menus.update', $menu->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="sm:col-span-6">
                    @error('name')
                        <div class="text-sm text-red-500">{{ $message }}</div>
                    @enderror
                    <label for="name" class="block text-sm font-medium text-gray-700" > Name </label>
                    <div class="mt-1">
                        <input type="text" id="name" value="{{ $menu->name }}" name="name" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    </div>
                    <div class="sm:col-span-6">
                        <div>
                            <img src="{{Storage::url($menu->image)}}" class="w-32 h-32">
                        </div>
                    @error('image')
                        <div class="text-sm text-red-500">{{ $message }}</div>
                    @enderror
                    <label for="image" class="block text-sm font-medium text-gray-700"> Image </label>
                    <div class="mt-1">
                        <input type="file" id="image" name="image" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    </div>
                    <div class="sm:col-span-6 pt-5">
                    @error('price')
                        <div class="text-sm text-red-500">{{ $message }}</div>
                    @enderror
                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                    <div class="mt-1">
                        <input type ="text" value=" {{ $menu->price }}" id="price" name="price" rows="3"  class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                    </div>
                    <div class="sm:col-span-6 pt-5">
                    @error('description')
                        <div class="text-sm text-red-500">{{ $message }}</div>
                    @enderror
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <div class="mt-1">
                        <textarea id="description" name="description" rows="3"  class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        {{ $menu->description }}
                        </textarea>
                    </div>
                    </div>
                    <div class="mt-1">
                    @error('category')
                        <div class="text-sm text-red-500">{{ $message }}</div>
                    @enderror
                        <select multiple name="categories[]" class="form-multiselect block w-full mt-1">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected($menu->categories->contains($category)) >
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-6">
                        <button type="submit" class="px-4 py-2 bg-indigo-300 hover:bg-indigo-500 rounded-lg text-gray hover:text-white">Update</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>

</x-admin-layout>
