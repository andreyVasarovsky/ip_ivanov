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
                        <div class="col-12 mb-2">
                            <h1 class="m-0 d-inline align-middle">Клиенты</h1>
                        </div>
                        <div class="col-12">
                            <a href="{{ route('admin.client.create') }}" type="button"
                               class="btn btn-success d-inline">Добавить</a>
                            <!--
                            <form action="{{ route('admin.client.import') }}" method="POST"
                                  enctype="multipart/form-data" class="d-inline w-25">
                                @csrf
                                <input type="file" name="file" class="form-control w-25 d-inline"
                                       accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"/>
                                <button class="btn btn-success d-inline">Импортировать EXCEL</button>
                            </form>
                            -->
                            <a href="{{ route('admin.client.deleted') }}" type="button"
                               class="btn btn-dark d-inline float-right">Посмотреть удаленные</a>
                        </div>
                        <div class="col-12">
                            @error('file')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.client.filter')
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
                                        <th scope="col">&nbsp;</th>
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
                                            <td class="actions" style="font-size: 14px;">
                                                <a href="{{ route('admin.client.show', $client->id) }}" class="action">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.client.edit', $client->id) }}" class="action">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.client.destroy', $client->id) }}" method="POST" class="action">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border-0 bg-transparent p-0">
                                                        <i class="fas fa-trash-alt text-danger" role="button"></i>
                                                    </button>
                                                </form>
                                            </td>
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
