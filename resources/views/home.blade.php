@extends('layouts.app')

@section('content')
<div class="container d-flex">
    <div class="w-50">
        <div class="col-md-8 mb-5">
            <div class="card">
                <div class="card-header">Port folio</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <button class="btn btn-primary">voir</button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-50">
        <div class="col-md-8 mb-5">
            <div class="card">
                <div class="card-header">Blog</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <button class="btn btn-success">voir</button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-50">
        <div class="col-md-8 mb-5">
            <div class="card">
                <div class="card-header">Contact</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <button class="btn btn-danger">voir</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
