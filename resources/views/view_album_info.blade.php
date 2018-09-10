@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Info Album') }}</div>
                <div class="card-body">
                    @foreach ($albuminfo as $linha)
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Album name:') }}</label>
                            <div class="col-md-6">
                                <label for="name" class="form-control">{{ $linha['name'] }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cover" class="col-md-4 col-form-label text-md-right">{{ __('Cover name:') }}</label>
                            <div class="col-md-6">
                                <label for="cover" class="form-control">{{ $linha['cover'] }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Year:') }}</label>
                            <div class="col-md-6">
                                <label for="year" class="form-control">{{ $linha['year'] }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="band" class="col-md-4 col-form-label text-md-right">{{ __('Band/Artist name:') }}</label>
                            <div class="col-md-6">
                                <label for="band" class="form-control">{{ $linha['band'] }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="song" class="col-md-4 col-form-label text-md-right">{{ __('Song name:') }}</label>
                            <div class="col-md-6">
                                <label for="song" class="form-control">{{ $linha['song'] }}</label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection