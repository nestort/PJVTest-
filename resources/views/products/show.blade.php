<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Show Product') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="max-w-6xl py-2 mx-auto sm:px-6 lg:px-8">
            <div class="block ">
                <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 sm:px-20">
                        <div class="block">
                            <a href="{{ route('products.index') }}"
                                class="px-4 py-2 font-bold text-black bg-gray-200 rounded hover:bg-gray-300">{{ __('Back') }}</a>
                        </div>
                        <div class="mt-8 text-2xl">
                            <div
                                class="container flex flex-col px-4 py-4 mx-auto space-y-2 lg:h-[20rem] lg:py-6 lg:flex-row lg:items-center">
                                <div class="w-full lg:w-1/2">
                                    <div class="lg:max-w-lg">
                                        <h1 class="text-3xl font-bold tracking-wide text-gray-800  lg:text-5xl">
                                            {{ __('Name: ') . $product->name }}
                                        </h1>

                                        <div class="mt-8 space-y-5">
                                            <p class="flex items-center -mx-2 text-black">


                                                <span
                                                    class="mx-2">{{ __('Price: $ ') . $product->price }}</span>
                                            </p>

                                            <p class="flex items-center -mx-2 text-black">
                                                <span
                                                    class="mx-2">{{ __('Tax: % ') . $product->tax }}</span>
                                            </p>
                                            <p class="flex items-center -mx-2 text-black">
                                                <span
                                                    class="mx-2">{{ __('Calculated Tax : $ ') . $product->calculated_tax() }}</span>
                                            </p>
                                            <p class="flex items-center -mx-2 text-black">
                                                <span
                                                    class="mx-2">{{ __('Price without Tax: $ ') . $product->price_without_tax() }}</span>
                                            </p>
                                        </div>
                                    </div>


                                </div>


                            </div>

                        </div>

                    </div>
                </div>
            </div>
    </x-slot>
</x-app-layout>
