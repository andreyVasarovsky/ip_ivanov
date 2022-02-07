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
                            <h1 class="m-0 d-inline align-middle">Удаленные удобрения</h1>
                            <a href="{{ route('admin.fertilizer.index') }}" type="button"
                               class="btn btn-dark d-inline float-right">Назад</a>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            @if($fertilizers->count() > 0)
                                <table class="table table-hover hover-table-actions close-borders">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Название</th>
                                        <th scope="col">Норма Азот</th>
                                        <th scope="col">Норма Фосфор</th>
                                        <th scope="col">Норма Калий</th>
                                        <th scope="col">Группа культур</th>
                                        <th scope="col">Район</th>
                                        <th scope="col">Стоимость</th>
                                        <th scope="col">Описание</th>
                                        <th scope="col">Назначение</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($fertilizers AS $fertilizer)
                                        <tr>
                                            <th scope="row">{{ $fertilizer->id }}</th>
                                            <td>{{ $fertilizer->title }}</td>
                                            <td>{{ number_format($fertilizer->nitrogen_norm, 2) }}</td>
                                            <td>{{ number_format($fertilizer->phosphorus_norm, 2) }}</td>
                                            <td>{{ number_format($fertilizer->potassium_norm, 2) }}</td>
                                            <td>{{ $fertilizer->category->title }}</td>
                                            <td>{{ $fertilizer->district }}</td>
                                            <td>{{ number_format($fertilizer->price, 2) }}</td>
                                            <td>{{ $fertilizer->desc }}</td>
                                            <td>{{ $fertilizer->purpose }}</td>
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
