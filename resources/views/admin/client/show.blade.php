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
                        <div class="col-sm-6 align-items-center">
                            <h1 class="m-0 d-inline">Просмотр клиента</h1>
                            <a href="{{ route('admin.client.edit', $client->id) }}" class="link-icon">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.client.destroy', $client->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="border-0 bg-transparent">
                                    <i class="fas fa-trash-alt link-icon text-danger" role="button"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <table class="table close-borders">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Название</th>
                                    <th scope="col">Дата договора</th>
                                    <th scope="col">Регион</th>
                                    <th scope="col">Стоимость поставки</th>
                                    <th scope="col">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">{{ $client->id }}</th>
                                    <td>{{ $client->title }}</td>
                                    <td>{{ $client->agreement_date }}</td>
                                    <td>{{ $client->region }}</td>
                                    <td>{{ $client->getFormattedDeliveryPrice() }}</td>
                                </tr>
                                </tbody>
                            </table>

                            <a href="{{ route('admin.client.index') }}" type="button" class="btn btn-danger">Вернутся</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
