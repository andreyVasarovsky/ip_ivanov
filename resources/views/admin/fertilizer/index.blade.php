@extends('admin.main')
@extends('admin.nav')

@section('content')
    <div class="col-12">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название</th>
                <th scope="col">Производитель</th>
                <th scope="col">Кол-во</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Удобрение 1</td>
                <td>ООО Тест</td>
                <td>1000 кг.</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Удобрение 2</td>
                <td>ООО НовыйТест</td>
                <td>153 кг.</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
