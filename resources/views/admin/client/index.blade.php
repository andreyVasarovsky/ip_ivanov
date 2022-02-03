@extends('admin.main')
@extends('admin.nav')

@section('content')
    <div class="col-12">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Фамилия</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Вася</td>
                <td>Пупкин</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Люся</td>
                <td>Пупкина</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
