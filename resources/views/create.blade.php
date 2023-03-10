@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="posts" method="post">
    @csrf
    <div class="form-group">
        <label for="title">@lang('Title')</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required>
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="extract">{{ __('Extract') }}</label>
        <input type="text" class="form-control @error('extract') is-invalid @enderror" id="extract" name="extract" value="{{ old('extract') }}" required>
        @error('extract')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="content">@lang('Content')</label>
        <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" required>{{ old('content') }}</textarea>
        @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="expirable">{{ __('Expirable') }}</label>
        <input type="checkbox" class="form-control" id="expirable" name="expirable" {{ old('expirable') ? 'checked' : '' }}>
    </div>
    <div class="form-group">
        <label for="caducable">@lang('Caducable')</label>
        <input type="checkbox" class="form-control" id="caducable" name="caducable" {{ old('caducable') ? 'checked' : '' }}>
    </div>
    <div class="form-group">
        <label for="comentable">{{ __('Comentable') }}</label>
        <input type="checkbox" class="form-control" id="comentable" name="comentable" {{ old('comentable') ? 'checked' : '' }}>
    </div>
    <div class="form-group">
        <label for="access">@lang('Access')</label>
        <select class="form-control" id="access" name="access">
            <option value="public" {{ old('access') == 'public' ? 'selected' : '' }}>{{ __('posts.public') }}
            <option value="public">@lang('Public')</option>
            <option value="private">@lang('Private')</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
  