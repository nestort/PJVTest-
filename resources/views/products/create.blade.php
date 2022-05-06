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
                        <form method="post" action="{{ route('products.store') }}">
                            @csrf
                            <div class="mt-8 text-2xl">
                                <div class="row g-3">
                                    <div class="col-sm-12">
                                        <label for="name" class="form-label">{{ __('Name') }}</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ old('name') }}" required>
                                        <div class="invalid-feedback">
                                            {{ __('Name is required.') }}
                                        </div>
                                        @error('name')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="price" class="form-label">Price</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text">$</span>
                                            <input type="numeric" class="form-control" id="price" name="price"
                                                value="{{ old('price') }}" required>
                                        </div>
                                        <div class="invalid-feedback">
                                            {{ __('Price is required.') }}
                                        </div>
                                        @error('price')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <label for="tax" class="form-label">Tax</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text">%</span>
                                            <input type="numeric" class="form-control" id="tax" name="tax"
                                                value="{{ old('tax') }}">
                                            <div class="invalid-feedback">
                                                Tax is required.
                                                @error('tax')
                                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        @error('tax')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <hr class="my-4">
                                    <button class="w-100 btn btn-primary btn-lg"
                                        type="submit">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </x-slot>
</x-app-layout>
