@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit existing user') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('useraction')}}" aria-label="{{ __('Edit existing user') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="artist" class="col-md-4 col-form-label text-md-right">{{ __('Select user') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="name">
                                    @foreach ($userslist as $linha)
                                        <option> {{$linha['name']}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" name="actionbutton" value="edit">
                                    {{ __('Edit user') }}
                                </button>
                                <button type="submit" class="btn btn-primary" name="actionbutton" value="remove">
                                    {{ __('Remove user') }}
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
