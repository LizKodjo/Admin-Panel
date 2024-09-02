<x-layout>

    <x-slot:header>
        <div class="d-flex justify-content-between">
            Companies page
            <x-button href="/companies/create">Create a company</x-button>
        </div>
    </x-slot:header>

    <div class="container mt-3">
        @foreach ($companies as $company)
            <div class="card">
                <a href="/companies/{{ $company['id'] }}" class="card-body">{{ $company['name'] }}</a>
            </div>
        @endforeach

        <div>
            {{ $companies->links() }}
        </div>
    </div>

</x-layout>
