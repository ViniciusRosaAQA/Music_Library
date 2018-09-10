@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Info Artist') }}</div>
                <div class="card-body">
                    @foreach ($artistinfo as $linha)
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Artist name:') }}</label>
                            <div class="col-md-6">
                                <label for="name" class="form-control">{{ $linha['name'] }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image name:') }}</label>
                            <div class="col-md-6">
                                <label for="image" class="form-control">{{ $linha['image'] }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="genre" class="col-md-4 col-form-label text-md-right">{{ __('Genre name:') }}</label>
                            <div class="col-md-6">
                                <label for="genre" class="form-control">{{ $linha['genre'] }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description:') }}</label>
                            <div class="col-md-6">
                                <label for="name" class="form-control">{{ $linha['description'] }}</label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection