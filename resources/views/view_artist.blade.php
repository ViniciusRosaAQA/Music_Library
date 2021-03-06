@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Artist') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('viewinfoartist')}}" aria-label="{{ __('Edit Artist/Band') }}">
                        {{ csrf_field() }}
                <div class="form-group row">
                <label for="artist" class="col-md-4 col-form-label text-md-right">{{ __('Select Artist') }}</label>
                    <div class="col-md-6">
                        <select class="form-control" name="name">
                            @foreach ($artist_view as $linha)
                                <option> {{$linha['name']}} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('View Artist/Band') }}
                                </button>
                            </div>
                        </div>
                    </form>
                <div class="form-group row">
                  <h6> <a href="{{route('artistregister')}}"> Register Artist </a> </h6>
                </div>
                    <div class="form-group row">
                        <h6> <a href="{{route('editartist')}}"> Edit Artist </a> </h6>
                    </div>
                    <div class="form-group row">
                        <h6> <a href="{{route('deleteartist')}}"> Delete Artist </a> </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
