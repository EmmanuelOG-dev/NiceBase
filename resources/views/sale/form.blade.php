<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_motorcycle" class="form-label">{{ __('Motorcycle') }}</label>
            <select name="id_motorcycle" class="form-select @error('id_motorcycle') is-invalid @enderror" id="id_motorcycle">
                @foreach ($motorcycles as $motorcycle)
                    <option value="{{ $motorcycle->id }}" @selected(old('id_motorcycle', $sale->id_motorcycle) == $motorcycle->id)>{{ $motorcycle->vin }} - {{ $motorcycle->reference->name }}</option>
                @endforeach
            </select>
            @error('id_motorcycle')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_seller" class="form-label">{{ __('Seller') }}</label>
            <select name="id_seller" class="form-select @error('id_seller') is-invalid @enderror" id="id_seller">
                @foreach ($sellers as $seller)
                    <option value="{{ $seller->id }}" @selected(old('id_seller', $sale->id_seller) == $seller->id)>{{ $seller->dni }} - {{ $seller->name_seller }} {{ $seller->lastname_seller }}</option>
                @endforeach
            </select>
            @error('id_seller')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_costumer" class="form-label">{{ __('Costumer') }}</label>
            <select name="id_costumer" class="form-select @error('id_costumer') is-invalid @enderror" id="id_costumer">
                @foreach ($costumers as $costumer)
                    <option value="{{ $costumer->id }}" @selected(old('id_costumer', $sale->id_costumer) == $costumer->id)>{{ $costumer->dni }} - {{ $costumer->name_costumer }} {{ $costumer->lastname_costumer }}</option>
                @endforeach
            </select>
            @error('id_costumer')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_status" class="form-label">{{ __('Status') }}</label>
            <select name="id_status" class="form-select @error('id_status') is-invalid @enderror" id="id_status">
                @foreach ($statuses as $status)
                    <option value="{{ $status->id }}" @selected(old('id_status', $sale->id_status) == $status->id)>{{ $status->status }}</option>
                @endforeach
            </select>
            @error('id_status')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>