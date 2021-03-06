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
                            <h1 class="m-0 d-inline align-middle">Загрузки</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            @if($imports->count() > 0)
                                <table class="table table-hover hover-table-actions close-borders">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Статус</th>
                                        <th scope="col">Автор</th>
                                        <th scope="col">Ошибки</th>
                                        <th scope="col">Дата</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($imports AS $import)
                                        <tr>
                                            <th scope="row">{{ $import->id }}</th>
                                            <td class="{{ $statusesColors[$import->status] }}">
                                                {{ $statuses[$import->status] }}
                                            </td>
                                            <td>{{ $import->user->name }} ({{ $import->user->email }})</td>
                                            <td>
                                                @if(empty($import->fails) || count(json_decode($import->fails)) === 0)
                                                    Пусто
                                                @else
                                                    {{ $import->fails }}
                                                @endif
                                            </td>
                                            <td>{{ $import->created_at }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="pagination justify-content-center mt-3 text-center">
                                    {{ $imports->withQueryString()-> links() }}
                                </div>
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
