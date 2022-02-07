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
                            <h1 class="m-0">Редактировать удобрение</h1>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <form action="{{ route('admin.fertilizer.update', $fertilizer->id) }}" method="POST">
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="title">Название</label>
                                    <input type="text" name="title" class="form-control" id="title"
                                           placeholder="Название" value="{{ (empty(old('title'))) ? $fertilizer->title : old('title') }}">
                                    @error('title')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="nitrogen_norm">Aзотная норма</label>
                                            <input type="number" step="any" min="0" name="nitrogen_norm" class="form-control"
                                                   id="nitrogen_norm" placeholder="Aзотная норма"
                                                   value="{{ (empty(old('nitrogen_norm'))) ? $fertilizer->nitrogen_norm : old('nitrogen_norm') }}">
                                            @error('nitrogen_norm')
                                            <div class="text-danger">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label for="phosphorus_norm">Норма фосфора</label>
                                            <input type="number" step="any" min="0" name="phosphorus_norm" class="form-control"
                                                   id="phosphorus_norm" placeholder="Норма фосфора"
                                                   value="{{ (empty(old('phosphorus_norm'))) ? $fertilizer->phosphorus_norm : old('phosphorus_norm') }}">
                                            @error('phosphorus_norm')
                                            <div class="text-danger">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="potassium_norm">Норма калия</label>
                                            <input type="number" step="any" min="0" name="potassium_norm" class="form-control"
                                                   id="potassium_norm" placeholder="Норма калия"
                                                   value="{{ (empty(old('potassium_norm'))) ? $fertilizer->potassium_norm : old('potassium_norm') }}">
                                            @error('potassium_norm')
                                            <div class="text-danger">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label for="culture_group_id">Группа</label>

                                            <select name="culture_group_id" class="form-control" id="culture_group_id">
                                                @foreach($cultureGroups AS $group)
                                                    <option {{ (old('culture_group_id') == $group->id) ? ' selected' : ($fertilizer->culture_group_id == $group->id ? ' selected' : '') }}
                                                            value="{{ $group->id }}">
                                                        {{ $group->title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('culture_group_id')
                                            <div class="text-danger">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="price">Цена</label>
                                            <input type="number" step="any" min="0" name="price" class="form-control"
                                                   id="price" placeholder="Цена"
                                                   value="{{ (empty(old('price'))) ? $fertilizer->price : old('price') }}">
                                            @error('price')
                                            <div class="text-danger">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="region">Район</label>
                                    <input type="text" name="district" class="form-control" id="district"
                                           placeholder="Район" value="{{ (empty(old('district'))) ? $fertilizer->district : old('district') }}">
                                    @error('district')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="purpose">Назначение</label>
                                    <input type="text" name="purpose" class="form-control" id="purpose"
                                           placeholder="Назначение" value="{{ (empty(old('purpose'))) ? $fertilizer->purpose : old('purpose') }}">
                                    @error('purpose')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="desc">Описание</label>
                                    <textarea class="form-control" name="desc" id="desc" rows="3" placeholder="Описание">{{ (empty(old('desc')))? $fertilizer->desc : old('desc') }}</textarea>
                                    @error('desc')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Обновить</button>
                                    <a href="{{ route('admin.fertilizer.index') }}" type="button" class="btn btn-danger">К списку</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
