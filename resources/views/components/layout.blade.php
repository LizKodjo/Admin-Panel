@extends('layouts.app')
{{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $header }}
                        {{-- <a {{ $attribute }}>{{ $slot }}</a> --}}
                    </div>

                    <div class="card-body">

                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
