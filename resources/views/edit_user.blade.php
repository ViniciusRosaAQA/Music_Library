@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editing user') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('updateuseraction')}}" aria-label="{{ __('Register') }}">
                        {{ csrf_field() }}
                    @foreach ($useredit as $linha)

                        <div class="form-group row">
                            <label for="nameold" class="col-md-4 col-form-label text-md-right">{{ __('User selected:') }}</label>
                            <div class="col-md-6">
                                <label for="nameold" class="form-control">{{ $linha['name'] }}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('New name:') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name='name' value="{{ $linha['name']}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('New email:') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $linha['email'] }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New password:') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('New Image:') }}</label>
                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control" name="image" value="{{ $linha['image'] }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="roleacess" class="col-md-4 col-form-label text-md-right">{{ __('User level:') }}</label>
                                <div class="col-md-6">
                                    <input id="roleacess" type="text" class="form-control" name="roleacess" value="{{ $linha['roleacess'] }}" required>
                                </div>
                            </div>

                        @endforeach
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
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
