<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('New Product') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="max-w-6xl py-10 mx-auto sm:px-6 lg:px-8">
            <div class="block ">
                <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 sm:px-20">
                        <div class="block">
                            <a href="{{ route('products.index') }}"
                                class="px-4 py-2 font-bold text-black bg-gray-200 rounded hover:bg-gray-300">{{ __('Back') }}</a>
                        </div>

                        <section class="max-w-4xl p-6 mx-auto  rounded-md shadow-md bg-gray-800">

                            <form method="post" action="{{ route('products.store') }}">
                                @csrf
                                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                                    <div>
                                        <label class="text-gray-200"
                                            for="name">{{ __('Name') }}</label>
                                        <input id="name" name="name" value="{{ old('name') }}" type="numeric"
                                            class="block w-full px-4 py-2 mt-2  border  rounded-md bg-gray-800 text-gray-300 border-gray-600  focus:ring-blue-300 focus:ring-opacity-40 focus:border-blue-300 focus:outline-none focus:ring">
                                        @error('name')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div>
                                        <label class="text-gray-200" for="price">{{__('Price')}}</label>
                                        <input id="price" name="price"  type="numeric" value="{{ old('price') }}"
                                            class="block w-full px-4 py-2 mt-2  border  rounded-md bg-gray-800 text-gray-300 border-gray-600  focus:ring-blue-300 focus:ring-opacity-40 focus:border-blue-300 focus:outline-none focus:ring">
                                        @error('price')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div>
                                        <label class="text-gray-200" for="tax">{{__('Tax')}}</label>
                                        <input id="tax" name="tax"  type="numeric" value="{{ old('tax') }}"
                                            class="block w-full px-4 py-2 mt-2  border  rounded-md bg-gray-800 text-gray-300 border-gray-600  focus:ring-blue-300 focus:ring-opacity-40 focus:border-blue-300 focus:outline-none focus:ring">
                                        @error('tax')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>


                                </div>

                                <div class="flex justify-end mt-6">
                                    <button
                                        class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
    </x-slot>
</x-app-layout>
