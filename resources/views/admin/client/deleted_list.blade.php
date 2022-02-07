@extends('admin.main')
@extends('admin.nav')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-12">
                            <h1 class="m-0 d-inline align-middle">Удаленные клиенты</h1>
                            <a href="{{ route('admin.client.index') }}" type="button"
                               class="btn btn-dark d-inline float-right">Назад</a>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            @if($clients->count() > 0)
                                <table class="table table-hover hover-table-actions close-borders">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Название</th>
                                        <th scope="col">Дата договора</th>
                                        <th scope="col">Регион</th>
                                        <th scope="col">Стоимость поставки</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($clients AS $client)
                                        <tr>
                                            <th scope="row">{{ $client->id }}</th>
                                            <td>{{ $client->title }}</td>
                                            <td>{{ $client->agreement_date }}</td>
                                            <td>{{ $client->region }}</td>
                                            <td>{{ $client->getFormattedDeliveryPrice() }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="alert alert-dark" role="alert">
                                    Записей нет!
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
