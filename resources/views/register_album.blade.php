@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register Album') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('albumregisteraction')}}" aria-label="{{ __('Register') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name Album') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name='name' required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cover" class="col-md-4 col-form-label text-md-right">{{ __('Cover/Photo') }}</label>

                            <div class="col-md-6">
                                <input id="cover" type="file" class="form-control" name='cover' required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>

                            <div class="col-md-6">
                                <input id="year" type="text" class="form-control" name='year' required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="band" class="col-md-4 col-form-label text-md-right">{{ __('Select Band/Artist') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="band">
                                    @foreach ($album_register_view as $linha)
                                    <option> {{$linha['name']}} </option>
                                    @endforeach
                                </select>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="song" class="col-md-4 col-form-label text-md-right">{{ __('Song') }}</label>
                            <div class="col-md-6">
                                    <input id="song" type="text" class="form-control" name='song' required>
                                </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit Album') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
