@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div class="text-center px-xl-3">
                    <button class="btn btn-success btn-block" type="button" data-toggle="modal" data-target="#user-form-modal"><a href="/product-list">Product List</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
