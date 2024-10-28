<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12"> --}}
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 p-4">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{ __('Create Company') }}

                <form method="post" action="{{ route('company.store') }}" class="mt-6 space-y-6">
                    @csrf

                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                            :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                            :value="old('email')" />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />

                    </div>

                    <div>
                        <x-input-label for="logo" :value="__('Logo')" />
                        <x-text-input id="logo" name="logo" type="text" class="mt-1 block w-full"
                            :value="old('logo')" />
                        <x-input-error class="mt-2" :messages="$errors->get('logo')" />
                    </div>

                    <div>
                        <x-input-label for="website" :value="__('Website')" />
                        <x-text-input id="website" name="website" type="text" class="mt-1 block w-full"
                            :value="old('website')" />
                        <x-input-error class="mt-2" :messages="$errors->get('website')" />

                    </div>


                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Create') }}</x-primary-button>

                    </div>
                </form>

            </div>
        </div>
    </div>
    {{-- </div> --}}
</x-app-layout>
