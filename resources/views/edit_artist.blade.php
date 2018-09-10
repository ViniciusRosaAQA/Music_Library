@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Artist/Band') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('artisteditaction')}}" aria-label="{{ __('Edit Artist/Band') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="artist" class="col-md-4 col-form-label text-md-right">{{ __('Select Artist') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="artista">
                                    @foreach ($artist_view as $linha)
                                        <option> {{$linha['name']}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('New name:') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name='name' required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="genre" class="col-md-4 col-form-label text-md-right">{{ __('New genre:') }}</label>

                            <div class="col-md-6">
                                <input id="genre" type="text" class="form-control" name='genre' required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('New description:') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name='description' required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('New image Artist/Band:') }}</label>
                            <div class="col-md-6">
                                    <input id="image" type="file" class="form-control" name='image' required>
                                </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit Artist/Band') }}
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
