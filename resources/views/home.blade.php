@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            Добро пожаловать, {{ Auth()->user()->name }}
        </div>
    </div>
</div>
@endsection
