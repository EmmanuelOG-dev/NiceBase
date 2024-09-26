<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $reference?->name) }}" id="name" placeholder="Name">
            @error('name')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
        <div class="form-group mb-2 mb20">
            <label for="build_year" class="form-label">{{ __('Build Year') }}</label>
            <input type="text" name="build_year" class="form-control @error('build_year') is-invalid @enderror" value="{{ old('build_year', $reference?->build_year) }}" id="build_year" placeholder="Build Year">
            @error('build_year')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_brand" class="form-label">{{ __('Brand') }}</label>
            <select name="id_brand" class="form-select @error('id_brand') is-invalid @enderror" id="id_brand">
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}" @selected(old('id_brand', $reference->id_brand) == $brand->id)>{{ $brand->brand }}</option>
                @endforeach
            </select>
            @error('id_brand')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_category" class="form-label">{{ __('Category') }}</label>
            <select name="id_category" class="form-select @error('id_category') is-invalid @enderror" id="id_category">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('id_category', $reference->id_category) == $category->id)>{{ $category->category }}</option>
                @endforeach
            </select>
            @error('id_category')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
        <div class="form-group mb-2 mb20">
            <label for="engine_size" class="form-label">{{ __('Engine Size') }}</label>
            <input type="text" name="engine_size" class="form-control @error('engine_size') is-invalid @enderror" value="{{ old('engine_size', $reference?->engine_size) }}" id="engine_size" placeholder="Engine Size">
            @error('engine_size')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>