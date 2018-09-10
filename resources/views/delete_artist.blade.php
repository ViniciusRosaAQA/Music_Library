@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Delete Artist') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('deleteartistaction')}}" aria-label="{{ __('Delete Artist') }}">
                        {{ csrf_field() }}
                    <div class="form-group row">
                <label for="artist" class="col-md-4 col-form-label text-md-right">{{ __('Select Artist') }}</label>
                  <select class="form-control col-md-4" name="name">
                      @foreach ($artist_view as $linha)
                          <option> {{$linha['name']}} </option>
                      @endforeach
                    </select>
                </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Delete Artist') }}
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
