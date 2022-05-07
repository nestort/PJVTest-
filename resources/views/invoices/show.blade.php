<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Invoices: ') . $invoice->created_at }}
        </h2>
    </x-slot>
    <div class="max-w-6xl py-10 mx-auto sm:px-6 lg:px-8">
        <div class="block ">
            <div class="overflow-hidden bg-white sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 sm:px-20">
                    <div class="mt-8 text-2xl">
                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                    <div class="bg-gray-100 sm:rounded-lg">
                                        <div class="flex flex-wrap w-full py-1">

                                            <div class="w-full overflow-hidden sm:rounded-lg">
                                                <div class="px-4 py-5 sm:px-6">
                                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Invoices
                                                        Information</h3>
                                                    <p class="max-w-2xl mt-1 text-sm text-gray-500">Invoice details.</p>
                                                </div>
                                                <div class="border-t border-gray-200">
                                                    <dl>
                                                        <div
                                                            class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                            <dt class="text-sm font-medium text-gray-500">User</dt>
                                                            <dd
                                                                class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                                {{ $invoice->user->name }}</dd>
                                                        </div>
                                                        <div
                                                            class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                            <dt class="text-sm font-medium text-gray-500">Orders
                                                            </dt>
                                                            <dd
                                                                class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                                <ul role="list"
                                                                    class="border border-gray-200 divide-y divide-gray-200 rounded-md">

                                                                    @foreach ($orders as $order)
                                                                        <li
                                                                            class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                                                            <div class="flex items-center flex-1 w-0">
                                                                                <span class="flex-1 w-0 ml-2 truncate">
                                                                                    {{ $order->product->name }}</span>

                                                                            </div>
                                                                            <div class="flex items-center flex-1 w-0">
                                                                                <span class="flex-1 w-0 ml-2 truncate">
                                                                                    {{ $order->product->price }}</span>

                                                                            </div>
                                                                            <div class="flex items-center flex-1 w-0">
                                                                                <span class="flex-1 w-0 ml-2 truncate">
                                                                                    {{ $order->product->tax }}</span>

                                                                            </div>
                                                                            <div class="flex items-center flex-1 w-0">
                                                                                <span class="flex-1 w-0 ml-2 truncate">
                                                                                    {{ $order->created_at }}</span>

                                                                            </div>
                                                                            <div class="flex-shrink-0 ml-4">
                                                                                <span class="flex-1 w-0 ml-2 truncate">

                                                                            </div>

                                                                        </li>
                                                                    @endforeach


                                                                </ul>
                                                            </dd>
                                                        </div>
                                                        <div
                                                            class="w-full px-4 py-5 ">
                                                            <dt class="text-sm font-medium text-gray-500">Subtotal</dt>
                                                            <dd
                                                                class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                                $ {{ $invoice->sub_total }}</dd>
                                                            <dt class="text-sm font-medium text-gray-500">Total</dt>
                                                            <dd
                                                                class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                                $ {{ $invoice->total }}</dd>
                                                        </div>




                                                    </dl>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
