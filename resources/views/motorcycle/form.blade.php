<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="vin" class="form-label">{{ __('Vin') }}</label>
            <input type="text" name="vin" class="form-control @error('vin') is-invalid @enderror" value="{{ old('vin', $motorcycle?->vin) }}" id="vin" placeholder="Vin">
            @error('vin')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_reference" class="form-label">{{ __('Id Reference') }}</label>
            <select name="id_reference" class="form-select @error('id_reference') is-invalid @enderror" id="id_reference">
                @foreach ($references as $reference)
                    <option value="{{ $reference->id }}" @selected(old('id_reference', $motorcycle->id_reference) == $reference->id)>{{ $reference->name }}</option>
                @endforeach
            </select>
            @error('id_reference')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>