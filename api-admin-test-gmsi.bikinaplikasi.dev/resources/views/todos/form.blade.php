<div class="form-group {{ $errors->has('activity groups') ? 'has-error' : ''}}">
    <label for="activity groups" class="control-label">{{ 'activity groups' }}</label>

    <select name="activity_group_id" class="form-control form-control-line" id="activity_groups" required>
        @foreach ($activityGroups as $optionKey => $optionValue)
            <option value="{{ $optionKey }}"
                {{ (isset($todos->activity_groups) && $todos->activity_groups == $optionValue) || old('activity_groups') == $optionValue ? 'selected' : ''}}>
                {{ $optionValue }}</option>
        @endforeach
    </select>

    @error('activity_groups')
    <span class="invalid-feedback text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ ucwords('title') }}</label>
    <div class="col-md-12">
        <input placeholder="title" class="form-control form-control-line @error('title') is-invalid @enderror"
               name="title" type="text" id="title" value="{{ isset($todos->title) ? $todos->title : old('title') }}"
               required>

        @error('title')
        <span class="invalid-feedback text-danger" role="alert">
        <strong>{{ $message }}</strong>
    </span>
        @enderror
    </div>

</div>

<div class="form-group {{ $errors->has('is_active') ? 'has-error' : ''}}">
    <label for="is_active" class="control-label">{{ ucwords('Is Active') }}</label>
    <div class="col-md-12">
        <input placeholder="is_active" class="form-control form-control-line @error('is_active') is-invalid @enderror"
               name="is_active" type="number" min=0 max=1 id="is_active" value="{{ isset($todos->is_active) ? $todos->is_active : old('is_active') }}"
               required>

        @error('is_active')
        <span class="invalid-feedback text-danger" role="alert">
        <strong>{{ $message }}</strong>
    </span>
        @enderror
    </div>

</div>

<div class="form-group {{ $errors->has('priority') ? 'has-error' : ''}}">
    <label for="priority" class="control-label">{{ 'priority' }}</label>

    <select name="priority" class="form-control form-control-line" id="priority" required>
        @foreach (['very-high', 'medium', 'low'] as $optionKey => $optionValue)
            <option value="{{ $optionValue }}"
                {{ (isset($todos->priority) && $todos->priority == $optionValue) || old('priority') == $optionValue ? 'selected' : ''}}>
                {{ $optionValue }}</option>
        @endforeach
    </select>

    @error('priority')
    <span class="invalid-feedback text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Simpan</button>
    </div>
</div>
