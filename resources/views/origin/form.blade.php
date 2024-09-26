<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="origin" class="form-label">{{ __('Origin') }}</label>
            <input type="text" name="origin" class="form-control @error('origin') is-invalid @enderror" value="{{ old('origin', $origin?->origin) }}" id="origin" placeholder="Origin">
            @error('origin')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>