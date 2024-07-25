@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (auth()->check())
                        @if (auth()->user()->status == 'admin')
                            <div class="alert alert-info" role="alert">
                                Ini halaman admin.
                            </div>
                        @elseif (auth()->user()->status == 'user')
                            <div class="alert alert-info" role="alert">
                                Ini halaman user.
                            </div>
                        @endif
                    @else
                        <div class="alert alert-warning" role="alert">
                            Anda belum login.
                        </div>
                    @endif
                    
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
