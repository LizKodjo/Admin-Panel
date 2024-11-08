<x-app-layout :title=$title>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12"> --}}
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 p-4">
        <x-amber-btn-link :href="route('company.index')">Back</x-amber-btn-link>
        <div class="w-full mx-auto bg-white dark:bg-gray-800
         shadow-md rounded-md overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">
                    {{ $company->name }}
                </h2>
                <p class="text-gray-800 dark:text-gray-300 mt-2">
                    {{ $employee->first_name }}
                </p>
                <p class="text-gray-800 dark:text-gray-300 mt-2">
                    {{ $employee->last_name }}
                </p>
                <p class="text-gray-800 dark:text-gray-300 mt-2">
                    {{ $employee->email }}
                </p>
                <p class="text-gray-800 dark:text-gray-300 mt-2">
                    {{ $employee->phone }}
                </p>
            </div>
            <div class="flex justify-end p-4 bg-gray-100 dark:bg-gray-700">
                {{-- <x-amber-btn-link class="mr-2">Add</x-amber-btn-link> --}}
                <x-green-btn-link class="mr-2" :href="route('employee.edit', $employee)">
                    Edit</x-green-btn-link>
                <form action="{{ route('employee.destroy', $employee) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <x-danger-button onclick="return confirm('Are you sure you want to delete this employee')">
                        Delete</x-danger-button>
                </form>
            </div>
        </div>

    </div>
    {{-- </div> --}}
</x-app-layout>
