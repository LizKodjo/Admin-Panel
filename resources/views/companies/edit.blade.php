<x-app-layout :title=$title>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12"> --}}
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 p-4">

        <div class="flex justify-between items-center">
            <div class="float-left">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-gray-100">
                    {{ __('Edit Company') }}
                </h2>
            </div>
            <div class="float-right">
                <x-amber-btn-link :href="route('company.index')">
                    Back
                </x-amber-btn-link>
            </div>
        </div>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{ __('Create Company') }}

                <form method="post" action="{{ route('company.update', $company) }}" class="mt-6 space-y-6"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                            :value="old('name', $company->name)" required autofocus autocomplete="name" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                            :value="old('email', $company->email)" />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />

                    </div>

                    <div>
                        <x-input-label for="logo" :value="__('Logo')" />
                        {{-- <x-text-input id="logo" name="logo" type="text" class="mt-1 block w-full"
                            :value="old('logo', $company->logo)" /> --}}
                        {{-- <p class="text-gray-800 dark:text-gray-300 mt-2"> --}}
                        <img src="{{ asset('storage/app/public/' . $company->logo) }}" alt="{{ $company->name }}"
                            class="rounded" width="100" height="100">
                        {{-- </p> --}}
                        <x-text-input id="logo" name="logo" type="file" class="mt-1 block w-full"
                            :value="old('logo', $company->logo)" />
                        <x-input-error class="mt-2" :messages="$errors->get('logo')" />
                    </div>

                    <div>
                        <x-input-label for="website" :value="__('Website')" />
                        <x-text-input id="website" name="website" type="text" class="mt-1 block w-full"
                            :value="old('website', $company->website)" />
                        <x-input-error class="mt-2" :messages="$errors->get('website')" />

                    </div>


                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Update') }}</x-primary-button>

                    </div>
                </form>

            </div>
        </div>
    </div>
    {{-- </div> --}}
</x-app-layout>
