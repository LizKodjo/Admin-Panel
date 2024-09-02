<x-layout>

    <x-slot:header>
        Create Employee
    </x-slot>


    <form method="POST" action="/employees">
        @csrf
        <div class="space-y-12">


            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <div class="sm:col-span-3">
                            <x-form-label for="first_name">First name</x-form-label>
                            <x-form-input name="first_name" id="first_name" required></x-form-input>
                        </div>
                        <x-form-error name="first_name" />
                    </x-form-field>

                    <x-form-field>
                        <div class="sm:col-span-3">
                            <x-form-label for="last_name">Last name</x-form-label>
                            <x-form-input name="last_name" id="last_name" required></x-form-input>
                        </div>
                        <x-form-error name="last_name" />
                    </x-form-field>

                    <x-form-field>
                        <div class="col-span-full">
                            <x-form-label for="company">Company name</x-form-label>
                            <x-form-input name="company" id="company"></x-form-input>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <div class="sm:col-span-4">
                            <x-form-label for="email">Email address</x-form-label>
                            <x-form-input id="email" name="email"></x-form-input>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <div class="sm:col-span-2 sm:col-start-1">
                            <x-form-label for="phone">Phone number</x-form-label>
                            <x-form-input name="phone" id="phone"></x-form-input>
                        </div>
                    </x-form-field>

                </div>
            </div>
        </div>

        {{-- @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                @endforeach
            </ul>

        @endif --}}

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>

</x-layout>
