<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="dni" class="form-label">{{ __('DNI') }}</label>
            <input type="text" name="dni" class="form-control @error('dni') is-invalid @enderror" value="{{ old('dni', $seller?->dni) }}" id="dni" placeholder="DNI">
            @error('dni')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
        <div class="form-group mb-2 mb20">
            <label for="name_seller" class="form-label">{{ __('Name Seller') }}</label>
            <input type="text" name="name_seller" class="form-control @error('name_seller') is-invalid @enderror" value="{{ old('name_seller', $seller?->name_seller) }}" id="name_seller" placeholder="Name Seller">
            @error('name_seller')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
        <div class="form-group mb-2 mb20">
            <label for="lastname_seller" class="form-label">{{ __('Lastname Seller') }}</label>
            <input type="text" name="lastname_seller" class="form-control @error('lastname_seller') is-invalid @enderror" value="{{ old('lastname_seller', $seller?->lastname_seller) }}" id="lastname_seller" placeholder="Lastname Seller">
            @error('lastname_seller')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>