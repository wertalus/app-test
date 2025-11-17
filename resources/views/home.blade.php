@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('messages.Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('messages.You are logged in!') }}
                </div>
                <div class="card-footer d-flex justify-content-center">
                    <a href="/welcome-page" type="button" class="btn btn-success"> 

                        Zaczynamy

                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
