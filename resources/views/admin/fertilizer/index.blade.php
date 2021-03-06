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
                            <h1 class="m-0 d-inline align-middle">Удобрения</h1>
                        </div>
                        <div class="col-12 mb-2">
                            <a href="{{ route('admin.fertilizer.create') }}" type="button"
                               class="btn btn-sm btn-success d-inline">Добавить</a>
                            <a href="{{ route('admin.fertilizer.export') }}" type="button"
                               class="btn btn-sm btn-info d-inline text-white">Экспорт</a>
                            <a href="{{ route('admin.fertilizer.deleted') }}" type="button"
                               class="btn btn-sm btn-dark d-inline float-right">Посмотреть удаленные</a>
                        </div>
                        <div class="col-12">
                            <form action="{{ route('admin.fertilizer.import') }}" method="POST"
                                  enctype="multipart/form-data" class="d-inline w-25">
                                @csrf
                                <input type="file" name="file" class="form-control w-25 d-inline"
                                       accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"/>
                                <button class="btn btn-sm btn-success d-inline">Импортировать EXCEL</button>
                            </form>
                        </div>
                        <div class="col-12 mt-2">
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            @error('file')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.fertilizer.filter')
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
                                        <th scope="col">&nbsp;</th>
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
                                            <td class="actions" style="font-size: 14px;">
                                                <a href="{{ route('admin.fertilizer.show', $fertilizer->id) }}"
                                                   class="action">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.fertilizer.edit', $fertilizer->id) }}"
                                                   class="action">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.fertilizer.destroy', $fertilizer->id) }}"
                                                      method="POST" class="action">
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
