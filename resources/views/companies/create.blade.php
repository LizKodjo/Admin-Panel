<x-layout>

    <x-slot:header>
        Create a Company
    </x-slot:header>


    <form method="POST" action="/companies">
        @csrf
        <div class="space-y-12">


            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Company Information</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where
                    you can receive mail.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <div class="sm:col-span-3">
                            <x-form-label for="name">Company name</x-form-label>
                            <x-form-input name="name" id="name" required></x-form-input>
                        </div>
                        <x-form-error name="name" />
                    </x-form-field>

                    <x-form-field>
                        <div class="sm:col-span-4">
                            <x-form-label for="email">Email address</x-form-label>
                            <x-form-input id="email" name="email"></x-form-input>
                        </div>
                        <x-form-error name="email" />
                    </x-form-field>

                    <x-form-field>
                        <div class="mt-4 flex text-sm leading-6 text-gray-600">
                            <x-form-label for="logo">
                                <span>Upload a logo</span>
                                <x-form-input id="logo" name="logo" type="file"
                                    class="sr-only"></x-form-input>
                            </x-form-label>
                            <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to
                                10MB</p>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <div class="col-span-full">
                            <x-form-label for="website">Website</x-form-label>
                            <x-form-input name="website" id="website"></x-form-input>
                        </div>
                    </x-form-field>
                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="btn btn-secondary">Cancel</button>
            <x-form-button>Submit</x-form-button>
        </div>
    </form>




</x-layout>
