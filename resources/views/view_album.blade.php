@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Album') }}</div>

                <div class="card-body">
                <div class="form-group row">
                <label for="artist" class="col-md-4 col-form-label text-md-right">{{ __('Select Album') }}</label>
                  <select class="form-control">
                    @foreach ($album_view as $linha)
                    <option> {{$linha['name']}} </option>
                    @endforeach
                    </select>
                </div>

                <div class="form-group row">
                  <h6> <a href="{{route('albumregister')}}"> Register Album </a> </h6>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
