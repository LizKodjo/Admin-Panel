<x-layout>
    <x-slot:heading>
        Company Details
    </x-slot:heading>

    <h2>{{$company['name']}}</h2>
    <p>
        This company's email address is: {{$company['email']}}.
    </p>
</x-layout>