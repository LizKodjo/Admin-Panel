<x-app-layout :title=$title>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employees') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12"> --}}
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 p-4">
        <div class="flex justify-between items-center">
            <div class="float-left">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-gray-100">
                    {{ __('Create Employee') }}
                </h2>
            </div>

            <div class="float-right">
                <x-amber-btn-link :href="route('employee.index')">
                    Back
                </x-amber-btn-link>
            </div>
        </div>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{-- {{ __('Create Employee') }} --}}

                <form method="post" action="{{ route('employee.store') }}" class="mt-6 space-y-6">
                    @csrf

                    <div>
                        <x-input-label for="company" :value="__('Company Name')" />
                        <x-text-input id="company" name="company" type="text" class="mt-1 block w-full"
                            :value="old('company')" required autofocus autocomplete="company" />
                        <x-input-error class="mt-2" :messages="$errors->get('company')" />
                    </div>

                    <div>
                        <x-input-label for="first_name" :value="__('First Name')" />
                        <x-text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full"
                            :value="old('first_name')" required autofocus autocomplete="first_name" />
                        <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                    </div>

                    <div>
                        <x-input-label for="last_name" :value="__('Last Name')" />
                        <x-text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full"
                            :value="old('last_name')" required autofocus autocomplete="last_name" />
                        <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
                    </div>

                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                            :value="old('email')" />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />

                    </div>

                    <div>
                        <x-input-label for="phone" :value="__('Phone')" />
                        <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full"
                            :value="old('phone')" />
                        <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                    </div>


                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Create') }}</x-primary-button>

                    </div>
                </form>
            </div>
        </div>

    </div>
    </div>
    </div>
    {{-- </div> --}}
</x-app-layout>
