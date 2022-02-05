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
                        <div class="col-sm-6">
                            <h1 class="m-0">Удобрения</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Админ панель</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            {{dump($fertilizers)}}
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
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
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
