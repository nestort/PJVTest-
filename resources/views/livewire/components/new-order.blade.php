<div class=" grid grid-cols-1   md:grid-cols-3  gap-4 px-4 py-4">

    @foreach ($this->products as $product)
        <div
            class=" p-6  flex max-w-md px-5 overflow-hidden rounded-lg border-2  bg-gray-800 hover:bg-sky-700">
            <div class="w-full  p-4 md:p-4">
                <h1 class="text-2xl font-bold text-white">{{ $product->name }}</h1>
                <div class="flex mt-2 ">
                    <h2 class="text-xl font-bold text-white">Tax: {{ $product->tax }}% </h2>
                </div>
                <h2 class="text-sm font-bold text-white">
                    Price without tax: $ {{ number_format((float) $product->price_without_tax(), 2, '.', '') }}
                </h2>
                <div class=" flex justify-between mt-3">
                    <h1 class="text-lg font-bold text-gray-200 md:text-xl">
                        Total: $ {{ $product->price }}
                    </h1>

                    <button wire:click="buy({{ $product->id }})" class="px-2 py-1 text-sm font-bold text-white uppercase transition-colors duration-200 transform bg-gray-800 rounded bg-gray-700 hover:bg-gray-700 hover:bg-gray-600 focus:outline-none focus:bg-gray-700 focus:bg-gray-600">
                        {{ __('BUY') }}
                    </button>
                </div>
            </div>

        </div>
    @endforeach
</div>
