<section class="filter">
    <form action="{{ route('admin.fertilizer.index') }}" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <input type="text" name="title" class="form-control" id="title"
                           placeholder="Название" value="{{ (empty(old('title'))) ? '' : old('title') }}">
                    @error('title')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col-6">
                    <button type="submit" class="btn btn-primary">Искать</button>
                </div>
            </div>
        </div>
    </form>
</section>
