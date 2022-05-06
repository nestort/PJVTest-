<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Show Product') }}
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
                        <div class="mt-8 text-2xl">
                            <div class="col-sm-12">
                                <label class="col-12 form-label">{{ __('Name: ').$product->name }}</label>
                                <label class="col-12 form-label">{{ __('Price: $ ').$product->price }}</label>
                                <label class="col-12 form-label">{{ __('Tax: % ').$product->tax }}</label>
                                <label class="col-12 form-label">{{ __('Calculated Tax : $ ').$product->calculated_tax() }}</label>
                                <label class="col-12 form-label">{{ __('Price without Tax: $ ').$product->price_without_tax() }}</label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </x-slot>
</x-app-layout>
