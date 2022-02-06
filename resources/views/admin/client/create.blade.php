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
                            <h1 class="m-0 d-inline align-middle">Добавить клиента</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <form action="{{ route('admin.client.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Название</label>
                                    <input type="text" name="title" class="form-control" id="title"
                                           placeholder="Название" value="{{ (empty(old('title'))) ? '' : old('title') }}">
                                    @error('title')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="region">Регион</label>
                                    <input type="text" name="region" class="form-control" id="region"
                                           placeholder="Регион" value="{{ (empty(old('region'))) ? '' : old('region') }}">
                                    @error('region')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="title">Стоимость поставки</label>
                                            <input type="number" step="any" min="0" name="delivery_price" class="form-control"
                                                   id="delivery_price" placeholder="Стоимость поставки"
                                                   value="{{ (empty(old('delivery_price'))) ? '' : old('delivery_price') }}">
                                            @error('delivery_price')
                                            <div class="text-danger">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label for="agreement_date">Дата договора</label>
                                            <input type="text" name="agreement_date" class="form-control" id="agreement_date"
                                                   value="{{ (empty(old('agreement_date'))) ? '' : old('agreement_date') }}">
                                            @error('agreement_date')
                                            <div class="text-danger">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                    <a href="{{ route('admin.client.index') }}" type="button" class="btn btn-danger">Вернутся</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
