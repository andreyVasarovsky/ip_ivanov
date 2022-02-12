@extends('layouts.fast_registration')

@section('content')
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <a href="{{ route('fast_registration.create') }}" class="btn btn-primary btn-lg">СОЗДАТЬ УЧЕТНУЮ ЗАПИСЬ!</a>
            </div>
        </div>
    </div>
@endsection
