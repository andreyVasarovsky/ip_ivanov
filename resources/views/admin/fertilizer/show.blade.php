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
                            <h1 class="m-0 d-inline">Просмотр удобрения</h1>
                            <a href="{{ route('admin.fertilizer.edit', $fertilizer->id) }}" class="link-icon">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.fertilizer.destroy', $fertilizer->id) }}" method="POST" class="d-inline">
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
                        <div class="col-12">
                            <table class="table close-borders">
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
                                <tr>
                                    <th scope="row">{{ $fertilizer->id }}</th>
                                    <th>{{ $fertilizer->title }}</th>
                                    <th>{{ number_format($fertilizer->nitrogen_norm, 2) }}</th>
                                    <th>{{ number_format($fertilizer->phosphorus_norm, 2) }}</th>
                                    <th>{{ number_format($fertilizer->potassium_norm, 2) }}</th>
                                    <th>{{ $fertilizer->category->title }}</th>
                                    <th>{{ $fertilizer->district }}</th>
                                    <th>{{ number_format($fertilizer->price, 2) }}</th>
                                    <th>{{ $fertilizer->desc }}</th>
                                    <th>{{ $fertilizer->purpose }}</th>
                                </tr>
                                </tbody>
                            </table>

                            <a href="{{ route('admin.fertilizer.index') }}" type="button" class="btn btn-danger">Вернутся</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
