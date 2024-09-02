<x-layout>

    <x-slot:header>
        Edit Company: {{ $company->name }}
    </x-slot:header>


    <form method="POST" action="/companies/{{ $company->id }}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">


            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Company Information</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where
                    you can receive mail.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <div class="sm:col-span-3">
                            <x-form-label for="name">Company name</x-form-label>
                            <x-form-input name="name" id="name" value="{{ $company->name }}"
                                required>></x-form-input>
                        </div>
                        <x-form-error name="name"></x-form-error>
                    </x-form-field>

                    <x-form-field>
                        <div class="sm:col-span-4">
                            <x-form-label for="email">Email address</x-form-label>
                            <x-form-input id="email" name="email" type="email" autocomplete="email"
                                value="{{ $company->email }}"></x-form-input>
                        </div>
                    </x-form-field>


                </div>


                <x-form-field>
                    <div class="mt-4 flex text-sm leading-6 text-gray-600">
                        <x-form-label for="logo">
                            Logo</x-form-label>
                        {{-- <span>Upload a logo</span> --}}
                        <x-form-input id="logo" name="logo" type="text"
                            value="{{ $company->logo }}"></x-form-input>

                        {{-- <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to
                                10MB</p> --}}
                    </div>
                </x-form-field>

                <x-form-field>
                    <div class="col-span-full">
                        <x-form-label for="website">Website</x-form-label>
                        <x-form-input name="website" id="website" value="{{ $company->website }}"></x-form-input>
                    </div>
                </x-form-field>
            </div>
        </div>
        </div>

        <div class="d-flex justify-content-between">

            <div>
                <button form="delete-company" class="btn btn-danger">Delete</button>
            </div>


            <div>
                <a href="/companies/{{ $company->id }}" class="btn btn-secondary">Cancel</a>

                <button type="submit" class="btn btn-secondary">Update</button>
            </div>

        </div>
    </form>

    <form action="/companies/{{ $company->id }}" method="POST" class="hidden" id="delete-company">
        @csrf
        @method('DELETE')
    </form>




</x-layout>
