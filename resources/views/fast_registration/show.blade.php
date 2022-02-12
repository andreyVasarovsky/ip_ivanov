@extends('layouts.fast_registration')

@section('content')
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                Почта: <strong>{{ $email }}</strong>
            </div>
            <div class="col-12">
                Пароль: <strong>{{ $password }}</strong>
            </div>
            <div class="col-12 mt-4">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input id="email" type="email" class="form-control is-invalid d-none" name="email" value="{{ $email }}" required autocomplete="email" autofocus>
                    <input id="password" type="password" class="form-control is-invalid d-none" value="{{ $password }}" name="password" required autocomplete="current-password">
                    <button type="submit" class="btn btn-primary btn-lg">ВОЙТИ!</button>
                </form>
            </div>
        </div>
    </div>
@endsection

