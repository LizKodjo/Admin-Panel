<x-layout>

    <x-slot:header>
        Employee Details
    </x-slot>

    <h2>First name: {{ $employee->first_name }} </h2>
    <h2>Last name: {{ $employee->last_name }} </h2>
    <h2>Company: {{ $employee->company->name }} </h2>
    <h2>Email: {{ $employee->email }} </h2>
    <h2>Phone: {{ $employee->phone }} </h2>

    @can('edit', $employee)
        <p>
            <x-button href="/employees/{{ $employee->id }}/edit">Edit Employee</x-button>
        </p>
    @endcan
</x-layout>
