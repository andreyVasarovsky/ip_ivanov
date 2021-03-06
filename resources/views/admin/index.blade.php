@extends('admin.main')
@extends('admin.nav')
@section('content')
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('dist/img/admin_logo.png')}}" alt="ADMIN" height="60" width="60">
    </div>
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Админ панель</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{ $fertilizers->count() }}</h3>
                                    <p>Удобрения</p>
                                </div>
                                <div class="icon">
                                    <i class="iсon fas fa-seedling"></i>
                                </div>
                                <a href="{{ route('admin.fertilizer.index') }}" class="small-box-footer">Смотреть <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <h3> {{ $cultureGroups->count() }} </h3>
                                    <p>Гуппы удобрений</p>
                                </div>
                                <div class="icon">
                                    <i class="ico fas fa-list-alt"></i>
                                </div>
                                <a href="{{ route('admin.culture_group.index') }}" class="small-box-footer">Смотреть <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3> {{ $clients->count() }} </h3>
                                    <p>Клиенты</p>
                                </div>
                                <div class="icon">
                                    <i class="iсon fas fa-user-friends"></i>
                                </div>
                                <a href="{{ route('admin.client.index') }}" class="small-box-footer">Смотреть <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3> {{ $users->count() }} </h3>
                                    <p>Пользователи</p>
                                </div>
                                <div class="icon">
                                    <i class="ico fas fa-users-cog"></i>
                                </div>
                                <a href="{{ route('admin.user.index') }}" class="small-box-footer">Смотреть <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
