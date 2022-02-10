<section class="filter content my-3">
    <form action="{{ route('admin.fertilizer.index') }}" method="POST">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <input type="text" name="title" class="form-control"
                           placeholder="Название" value="{{ isset($query['title']) ? $query['title'] : '' }}">
                </div><!--
                <div class="col-2">
                    <select multiple class="form-control" name="culture_group_id[]">
                        @foreach($cultureGroups AS $group)
                            <option
                                value="{{ $group->id }}"
                                {{ (isset($query['culture_group_id']) && in_array($group->id, $query['culture_group_id'])) ? ' selected' : '' }}>
                                {{ $group->title }}
                            </option>
                        @endforeach
                    </select>
                </div>-->
                <div class="col-2">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css"/>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

                    <select class="selectpicker bg-white" multiple name="culture_group_id[]" data-live-search="true">
                        @foreach($cultureGroups AS $group)
                            <option
                                value="{{ $group->id }}"
                                {{ (isset($query['culture_group_id']) && in_array($group->id, $query['culture_group_id'])) ? ' selected' : '' }}>
                                {{ $group->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mt-2 text-right">
                <div class="col-12">
                    <button type="submit" class="btn btn-info">
                        <i class="fas fa-search"></i> Искать
                    </button>
                    <button id="clear-filters" type="button" class="btn btn-danger">
                        <i class="fas fa-eraser"></i> Сбросить
                    </button>
                </div>
            </div>
        </div>
    </form>
</section>
