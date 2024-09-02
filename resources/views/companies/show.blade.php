<x-layout>

    <x-slot:header>
        Company Details
    </x-slot:header>

    <h2>Company name: {{ $company->name }} </h2>
    <h2>Company email: {{ $company->email }} </h2>
    <h2>Company logo: <img src="{{ $company->logo }}" alt="Company logo"></h2>
    <h2>Company website: {{ $company->website }} </h2>
    {{-- <h3>Employees: {{ $company->employees->id }} </h3> --}}

    @can('edit', $company)
        <p>
            <x-button href="/companies/{{ $company->id }}/edit">Edit Company</x-button>
        </p>
    @endcan

</x-layout>
