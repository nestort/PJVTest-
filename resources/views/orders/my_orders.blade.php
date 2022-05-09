<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('My Orders') }}
        </h2>
    </x-slot>
    <div class="max-w-6xl py-10 mx-auto sm:px-6 lg:px-8">
        <div class="block ">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 sm:px-20">
                    <div class="mt-8 text-2xl">
                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8 ">
                                    <div class="overflow-hidden border-2 rounded-lg  border-gray-200  ">

                                        <table class="table-auto w-full border-collapse border ">
                                            <thead>
                                                <tr class="bg-indigo-600 text-white">
                                                    <th class="border border-slate-600" >#</th>
                                                    <th class="border border-slate-600" >{{ __('Product') }}</th>
                                                    <th class="border border-slate-600" >{{ __('Total') }}</th>
                                                    <th class="border border-slate-600" >{{ __('Date') }}</th>


                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @foreach ($orders as $order)
                                                    <tr class="border-solid border-b bg-gray-100  hover:bg-blue-200">
                                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                                            {{ $order->id }}
                                                        </td>
                                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                                            {{ $order->product->name ?? '-' }}
                                                        </td>
                                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                                            $ {{ $order->product->price ?? '-' }}
                                                        </td>
                                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                                            {{ $order->created_at }}
                                                        </td>


                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{ $orders->links() }}
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
