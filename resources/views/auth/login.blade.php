@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                <div id="app" class="card-body">
                    <form method="POST" action="/login">
                        @csrf
                    <login-form></login-form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
