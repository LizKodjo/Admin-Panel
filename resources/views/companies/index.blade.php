<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12"> --}}
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 p-4">
        {{-- <div class="relative overflow-x-auto"> --}}
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mt-6 space-y-6">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Company Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Logo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Website
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($companies as $company)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $company->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $company->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $company->logo }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $company->website }}
                        </td>
                        <td class="px-6 py-4">
                            Edit/Delete
                        </td>
                    </tr>

                @empty
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" colspan="4" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            No Company found!
                        </th>
                    </tr>
                @endforelse


            </tbody>
        </table>
        {{-- </div> --}}

    </div>

    {{-- </div> --}}
</x-app-layout>
