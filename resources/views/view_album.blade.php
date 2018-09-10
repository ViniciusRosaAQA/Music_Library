@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Album') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('viewinfoalbum')}}" aria-label="{{ __('View Album') }}">
                        {{ csrf_field() }}
                <div class="form-group row">
                <label for="artist" class="col-md-4 col-form-label text-md-right">{{ __('Select Album') }}</label>
                    <div class="col-md-6">
                  <select class="form-control" name="name">
                    @foreach ($album_view as $linha)
                    <option> {{$linha['name']}} </option>
                    @endforeach
                    </select>
                    </div>
                </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('View album') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <div class="form-group row">
                      <h6> <a href="{{route('albumregister')}}"> Register Album </a> </h6>
                    </div>
                        <div class="form-group row">
                            <h6> <a href="{{route('editalbum')}}"> Edit Album </a> </h6>
                        </div>
                        <div class="form-group row">
                            <h6> <a href="{{route('deletealbum')}}"> Delete Album </a> </h6>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
