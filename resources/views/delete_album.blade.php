@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Delete Album') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('deletealbumaction')}}" aria-label="{{ __('Select Album') }}">
                        {{ csrf_field() }}
                    <div class="form-group row">
                <label for="artist" class="col-md-4 col-form-label text-md-right">{{ __('Select Album') }}</label>
                  <select class="form-control col-md-4" name="name">
                      @foreach ($album_view as $linha)
                          <option> {{$linha['name']}} </option>
                      @endforeach
                    </select>
                </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Delete Album') }}
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
