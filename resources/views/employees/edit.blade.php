<x-layout>

    <x-slot:header>
        Edit Employee: {{ $employee->first_name }} {{ $employee->last_name }}
    </x-slot>


    <form method="POST" action="/employees/{{ $employee->id }}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">


            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <div class="sm:col-span-3">
                            <x-form-label for="first_name">First name</x-form-label>
                            <x-form-input name="first_name" id="first_name" value="{{ $employee->first_name }}"
                                required></x-form-input>
                        </div>
                        <x-form-error name="first_name"></x-form-error>
                    </x-form-field>

                    <x-form-field>
                        <div class="sm:col-span-3">
                            <x-form-label for="last_name">Last name</x-form-label>
                            <x-form-input name="last_name" id="last_name" value="{{ $employee->last_name }}"
                                required></x-form-input>
                        </div>
                        <x-form-error name="last_name"></x-form-error>
                    </x-form-field>

                    <x-form-field>
                        <div class="col-span-full">
                            <x-form-label for="company">Company name</x-form-label>
                            <x-form-input name="company" id="company"
                                value="{{ $employee->company->name }}">></x-form-input>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <div class="sm:col-span-4">
                            <x-form-label for="email">Email address</x-form-label>
                            <x-form-input id="email" name="email" type="email"
                                value="{{ $employee->email }}"></x-form-input>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <div class="sm:col-span-2 sm:col-start-1">
                            <x-form-label for="phone">Phone</x-form-label>
                            <x-form-input name="phone" id="phone" value="{{ $employee->phone }}"></x-form-input>
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <div>
                <button form="delete-employee" class="btn btn-danger">Delete</button>
            </div>
            <div>
                <a href="/employees/{{ $employee->id }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-secondary">Update</button>
            </div>


        </div>
    </form>

    <form action="/employees/{{ $employee->id }}" method="POST" class="hidden" id="delete-employee">
        @csrf
        @method('DELETE')
    </form>

</x-layout>
