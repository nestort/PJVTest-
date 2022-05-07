<div class="py-6">
    <div class="d-flex justify-content-between ">
        <div class="p-2">
            <h4 class="">{{ __('Invoices Generated') }}</h4>
        </div>
        <div class="p-2"><button wire:click="generate_invoices" class="btn btn-primary">Generate</button></div>


    </div>

    <div class="flex flex-wrap w-full py-1">
        <div class="flex-1 px-1 py-2">
            <input wire:model.debounce.300ms="search" type="text"
                class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                placeholder="{{ __('Search...') }}">
        </div>
        <div class="flex-1 px-1 py-2">
            <select wire:model="orderBy"
                class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-state">
                <option value="id">#</option>
                <option value="created_at">{{ __('Date') }}</option>
                <option value="user_id">{{ __('User') }}</option>
                <option value="product_id">{{ __('Product') }}</option>
            </select>
        </div>
        <div class="px-1 py-2 flex-3">
            <select wire:model="orderAsc"
                class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-state">
                <option value="1">Asc</option>
                <option value="0">Desc</option>
            </select>
        </div>
        <div class="px-1 py-2 flex-3">
            <select wire:model="perPage"
                class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-state">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
            </select>
        </div>
    </div>


    <div class="inline-block min-w-full overflow-hidden border-2 rounded-lg ">



        <table class="w-full overflow-scroll table-fixed">
            <thead>
                <tr class="text-white bg-indigo-600 rounded-l-lg opacity-90 ">
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Date</th>
                    <th class="px-4 py-2">User</th>
                    <th class="px-4 py-2">Product</th>
                    <th class="px-4 py-2">Total</th>
                    <th class="px-4 py-2">{{ __('Details') }}</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($invoices as $invoice)
                    <tr class="rounded-l-lg hover:bg-gray-100">
                        <td class="px-4 py-2 border">{{ $invoice->id }}</td>
                        <td class="px-4 py-2 border">{{ $invoice->created_at }}</td>
                        <td class="px-4 py-2 border">{{ $invoice->user->name }}</td>
                        <td class="px-4 py-2 border">{{ $invoice->sub_total }}</td>
                        <td class="px-4 py-2 border">$ {{ $invoice->total }}</td>
                        <td class="px-4 py-2 border"><a href="{{ route('invoices.show',$invoice->id) }}">open</a></td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="px-3 py-2">
            {!! $invoices->links() !!}
        </div>
    </div>
</div>
