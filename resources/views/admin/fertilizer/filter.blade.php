<section class="filter content my-3">
    <div class="container-fluid mb-3">
        <div class="row">
            <div class="col-12">
                <a data-toggle="collapse" href="#filters-form" class="text-decoration-none">
                    <i class="fas fa-filter align-middle"></i> Фильтры
                </a>
            </div>
        </div>
    </div>
    <form action="{{ route('admin.fertilizer.index') }}" method="POST" class="collapse" id="filters-form">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 col-md-2 mb-2">
                    <input type="text" name="title" class="form-control-sm form-control"
                           placeholder="Название" value="{{ isset($query['title']) ? $query['title'] : '' }}">
                </div>
                <div class="col-6 col-md-2 mb-2">
                    <select class="selectpicker bg-white w-100" multiple name="culture_group_id[]"
                            data-live-search="true" title="Категории">
                        @foreach($cultureGroups AS $group)
                            <option
                                value="{{ $group->id }}"
                                {{ (isset($query['culture_group_id']) && in_array($group->id, $query['culture_group_id'])) ? ' selected' : '' }}>
                                {{ $group->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6 col-md-2 mb-2">
                    <input type="text" name="desc" class="form-control-sm form-control"
                           placeholder="Описание" value="{{ isset($query['desc']) ? $query['desc'] : '' }}">
                </div>
                <div class="col-6 col-md-2 mb-2">
                    <input type="text" name="purpose" class="form-control-sm form-control"
                           placeholder="Назначение" value="{{ isset($query['purpose']) ? $query['purpose'] : '' }}">
                </div>
                <div class="col-12 col-md-4 mb-2">
                    <div class="row">
                        <div class="col-6">
                            <input type="number" class="form-control-sm form-control d-inline-block" name="price_from" placeholder="Цена ОТ" min="0" value="{{ isset($query['price_from']) ? $query['price_from'] : '' }}">
                        </div>
                        <div class="col-6">
                            <input type="number" class="form-control-sm form-control d-inline-block" name="price_till" placeholder="Цена ДО" min="0" value="{{ isset($query['price_till']) ? $query['price_till'] : '' }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-2">
                    <div class="row">
                        <div class="col-6">
                            <input type="number" class="form-control-sm form-control d-inline-block" name="nitrogen_norm_from" placeholder="Азот ОТ" min="0" value="{{ isset($query['nitrogen_norm_from']) ? $query['nitrogen_norm_from'] : '' }}">
                        </div>
                        <div class="col-6">
                            <input type="number" class="form-control-sm form-control d-inline-block" name="nitrogen_norm_till" placeholder="Азот ДО" min="0" value="{{ isset($query['nitrogen_norm_till']) ? $query['nitrogen_norm_till'] : '' }}">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-2">
                    <div class="row">
                        <div class="col-6">
                            <input type="number" class="form-control-sm form-control d-inline-block" name="phosphorus_norm_from" placeholder="Фосфор ОТ" min="0" value="{{ isset($query['phosphorus_norm_from']) ? $query['phosphorus_norm_from'] : '' }}">
                        </div>
                        <div class="col-6">
                            <input type="number" class="form-control-sm form-control d-inline-block" name="phosphorus_norm_till" placeholder="Фосфор ДО" min="0" value="{{ isset($query['phosphorus_norm_till']) ? $query['phosphorus_norm_till'] : '' }}">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-2">
                    <div class="row">
                        <div class="col-6">
                            <input type="number" class="form-control-sm form-control d-inline-block" name="potassium_norm_from" placeholder="Калий ОТ" min="0" value="{{ isset($query['potassium_norm_from']) ? $query['potassium_norm_from'] : '' }}">
                        </div>
                        <div class="col-6">
                            <input type="number" class="form-control-sm form-control d-inline-block" name="potassium_norm_till" placeholder="Калий ДО" min="0" value="{{ isset($query['potassium_norm_till']) ? $query['potassium_norm_till'] : '' }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-right">
                <div class="col-12">
                    <button type="submit" class="btn btn-sm">
                        <i class="fas fa-search"></i> Искать
                    </button>
                    <button id="clear-filters" type="button" class="btn btn-sm btn-danger">
                        <i class="fas fa-eraser"></i> Сбросить
                    </button>
                </div>
            </div>
        </div>
    </form>
</section>
