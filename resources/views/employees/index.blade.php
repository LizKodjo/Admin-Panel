<x-layout>

    <x-slot:header>
        <div class="d-flex justify-content-between">
            Employees page
            <x-button href="/employees/create">Create an employee</x-button>
        </div>
    </x-slot>

    <div class="container mt-3">
        @foreach ($employees as $employee)
            <div class="card">
                <a href="/employees/{{ $employee['id'] }} " class="card-body">{{ $employee['first_name'] }}
                    {{ $employee['last_name'] }}</a>
            </div>
        @endforeach

        <div>
            {{ $employees->links() }}
        </div>
    </div>

</x-layout>
