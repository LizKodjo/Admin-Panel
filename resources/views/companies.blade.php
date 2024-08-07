<x-layout>
    <x-slot:heading>
        Company page
    </x-slot:heading>

    <ul>
        @foreach ($companies as $company) 
        <li>
            <a href="/companies/{{$company['id']}}">
                <strong>{{$company['name']}}:</strong> Email is {{$company['email']}}
            </a>
        </li>
        @endforeach
    </ul>
</x-layout>