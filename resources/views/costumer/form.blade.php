<div class="row g-2 padding-1 p-1">
    <div class="col-sm-12">
        <div class="form-group mb-2 mb20">
            <label for="dni" class="form-label">{{ __('DNI') }}</label>
            <input type="text" name="dni" class="form-control @error('dni') is-invalid @enderror" value="{{ old('dni', $costumer?->dni) }}" id="dni" placeholder="DNI">
            @error('dni')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group mb-2 mb20">
            <label for="name_costumer" class="form-label">{{ __('Name Costumer') }}</label>
            <input type="text" name="name_costumer" class="form-control @error('name_costumer') is-invalid @enderror" value="{{ old('name_costumer', $costumer?->name_costumer) }}" id="name_costumer" placeholder="Name Costumer">
            @error('name_costumer')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group mb-2 mb20">
            <label for="lastname_costumer" class="form-label">{{ __('Lastname Costumer') }}</label>
            <input type="text" name="lastname_costumer" class="form-control @error('lastname_costumer') is-invalid @enderror" value="{{ old('lastname_costumer', $costumer?->lastname_costumer) }}" id="lastname_costumer" placeholder="Lastname Costumer">
            @error('lastname_costumer')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group mb-2 mb20">
            <label for="birth_date" class="form-label">{{ __('Birth Date') }}</label>
            <input type="date" name="birth_date" class="form-control @error('birth_date') is-invalid @enderror" value="{{ old('birth_date', $costumer?->birth_date) }}" id="birth_date" placeholder="Birth Date">
            @error('birth_date')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group mb-2 mb20">
            <label for="gender" class="form-label">{{ __('Gender') }}</label>
            <select name="gender" class="form-select @error('gender') is-invalid @enderror" id="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            @error('gender')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mb-2 mb20">
            <label for="phone" class="form-label">{{ __('Phone') }}</label>
            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $costumer?->phone) }}" id="phone" placeholder="Phone">
            @error('phone')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mb-2 mb20">
            <label for="address" class="form-label">{{ __('Address') }}</label>
            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address', $costumer?->address) }}" id="address" placeholder="Address">
            @error('address')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $costumer?->email) }}" id="email" placeholder="Email">
            @error('email')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group mb-2 mb20">
            <label for="id_origin" class="form-label">{{ __('Origin') }}</label>
            <select name="id_origin" class="form-select @error('id_origin') is-invalid @enderror" id="id_origin">
                @foreach ($origins as $origin)
                    <option value="{{ $origin->id }}" @selected(old('id_origin', $costumer->id_origin) == $origin->id)>{{ $origin->origin }}</option>
                @endforeach
            </select>
            @error('id_origin')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
    </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>