<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Products') }}
        </h2>
    </x-slot>
    <div class="max-w-6xl py-10 mx-auto sm:px-6 lg:px-8">
        <div class="block ">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 sm:px-20">
                    <div class="block">
                        <a href="{{ route('products.create') }}"
                            class="px-4 py-2 font-bold text-black bg-gray-200 rounded hover:bg-gray-300">{{ __('New') }}</a>
                    </div>
                    <div class="mt-8 text-2xl">
                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">

                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">{{ __('Name') }}</th>

                                                    <th scope="col">{{ __('Actions') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @foreach ($products as $task)
                                                    <tr>
                                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                                            {{ $task->id }}
                                                        </td>

                                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                                            {{ $task->name }}
                                                        </td>

                                                        <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                                                            <a href="{{ route('products.show', $task->id) }}"
                                                                class="mb-2 mr-2 text-blue-600 hover:text-blue-900">View</a>
                                                            <a href="{{ route('products.edit', $task->id) }}"
                                                                class="mb-2 mr-2 text-indigo-600 hover:text-indigo-900">Edit</a>
                                                            <form class="inline-block"
                                                                action="{{ route('products.destroy', $task->id) }}"
                                                                method="POST"
                                                                onsubmit="return confirm('Are you sure?');">
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <input type="hidden" name="_token"
                                                                    value="{{ csrf_token() }}">
                                                                <input type="submit"
                                                                    class="mb-2 mr-2 text-red-600 hover:text-red-900"
                                                                    value="Delete">
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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
