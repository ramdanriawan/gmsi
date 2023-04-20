
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ ucwords('title') }}</label>
    <div class="col-md-12">
        <input placeholder="title" class="form-control form-control-line @error('title') is-invalid @enderror"
               name="title" type="text" id="title" value="{{ isset($activity_groups->title) ? $activity_groups->title : old('title') }}"
               required>

        @error('title')
        <span class="invalid-feedback text-danger" role="alert">
        <strong>{{ $message }}</strong>
    </span>
        @enderror
    </div>

</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ ucwords('email') }}</label>
    <div class="col-md-12">
        <input placeholder="email" class="form-control form-control-line @error('email') is-invalid @enderror"
               name="email" type="text" id="email" value="{{ isset($activity_groups->email) ? $activity_groups->email : old('email') }}"
               required>

        @error('email')
        <span class="invalid-feedback text-danger" role="alert">
        <strong>{{ $message }}</strong>
    </span>
        @enderror
    </div>

</div>

<div class="form-group">
    <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Simpan</button>
    </div>
</div>
