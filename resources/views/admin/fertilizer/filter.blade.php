<section class="filter content my-3">
    <form action="{{ route('admin.fertilizer.index') }}" method="POST">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <input type="text" name="title" class="form-control" id="title"
                           placeholder="Название" value="{{ isset($query['title']) ? $query['title'] : '' }}">
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <select multiple class="form-control" name="culture_group_id[]">
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
