<div class="form-group">
    <label for="first_name">First name</label>
    <input type="text" class="form-control @error('first_name') is-invalid @enderror" value="{{old('first_name', $user->first_name)}}" id="first_name" placeholder="Enter first name" name="first_name">
    @error('first_name')
    <span class="error invalid-feedback">
        {{$message}}
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="last_name">Last name</label>
    <input type="text" class="form-control @error('last_name') is-invalid @enderror" value="{{old('last_name', $user->last_name)}}" id="last_name" placeholder="Enter last name" name="last_name">
    @error('last_name')
    <span class="error invalid-feedback">
        {{$message}}
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{old('email', $user->email)}}" id="email" placeholder="Enter email" name="email">
    @error('email')
    <span class="error invalid-feedback">
        {{$message}}
    </span>
    @enderror
</div>
<div class="form-group">
    <label>Custom Select</label>
    <select class="custom-select @error('role_id') is-invalid @enderror" name="role_id">
        <option value="">{{ __('-- Select Role --') }}</option>
        @foreach ($roles as $k => $v)
            <?php
            if (old('role_id', $user->role_id) == $k) {
                $selected = 'selected';
            } else {
                $selected = '';
            }
            ?>
        <option value="{{ $k }}" {{ $selected }}>{{ ucwords($v) }}</option>
        @endforeach
    </select>
    @error('role_id')
    <span class="invalid-feedback" role="alert">
                {{ $message }}
    </span>
    @enderror
</div>
@if($show)
<div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter Password" name="password">
    @error('password')
    <span class="error invalid-feedback">
        {{$message}}
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="password_confirmation">Password</label>
    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Confirm Password" name="password_confirmation">
    @error('password_confirmation')
    <span class="error invalid-feedback">
        {{$message}}
    </span>
    @enderror
</div>
@endif

