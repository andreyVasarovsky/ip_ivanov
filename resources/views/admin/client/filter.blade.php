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
    <form action="{{ route('admin.client.index') }}" method="POST" class="collapse" id="filters-form">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 col-md-2 mb-2">
                    <input type="text" name="title" class="form-control-sm form-control"
                           placeholder="Название" value="{{ isset($query['title']) ? $query['title'] : '' }}">
                </div>
                <div class="col-6 col-md-2 mb-2">
                    <select class="form-control-sm form-control bg-white w-100" name="region"
                            data-live-search="true" title="Категории">
                        <option value="" disabled {{ !isset($query['region']) ? ' selected' : '' }}>Регион</option>
                        @foreach($regions AS $regionIdx => $region)
                            <option
                                value="{{ $regionIdx }}"
                                {{ (isset($query['region']) && $regionIdx == $query['region']) ? ' selected' : '' }}>
                                {{ $region }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-md-4 mb-2">
                    <div class="row">
                        <div class="col-6">
                            <input type="number" class="form-control-sm form-control d-inline-block" name="delivery_price_from" placeholder="Цена доставки ОТ" min="0" value="{{ isset($query['delivery_price_from']) ? $query['delivery_price_from'] : '' }}">
                        </div>
                        <div class="col-6">
                            <input type="number" class="form-control-sm form-control d-inline-block" name="delivery_price_till" placeholder="Цена доставки ДО" min="0" value="{{ isset($query['delivery_price_till']) ? $query['delivery_price_till'] : '' }}">
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-4 mb-2">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" name="agreement_date_from" class="form-control-sm form-control" id="agreement_date_from_filter"
                                   value="{{ isset($query['agreement_date_from']) ? $query['agreement_date_from'] : '' }}">
                        </div>
                        <div class="col-6">
                            <input type="text" name="agreement_date_till" class="form-control-sm form-control" id="agreement_date_till_filter"
                                   value="{{ isset($query['agreement_date_till']) ? $query['agreement_date_till'] : '' }}">
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
