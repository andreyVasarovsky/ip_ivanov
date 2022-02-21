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
                            <h1 class="m-0 d-inline align-middle">Экспорт</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <table class="table table-hover hover-table-actions close-borders">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Заголовок</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($exports AS $export)
                                    <tr>
                                        <th scope="row">{{ $export['id'] }}</th>
                                        <td>{{ $export['title'] }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
