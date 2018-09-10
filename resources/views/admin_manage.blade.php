@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Manage | Actions</div>
                    <div class="card-body texto">
                    <h6> <a href="{{route('viewuser')}}">Edit user </a> </h6>
                    <h6> Register user </h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection