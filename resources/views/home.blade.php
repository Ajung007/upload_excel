@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center sm:pt-0">
            
                        <div class="container">
                            <h2>Upload Data SKK</h2>
                            <div class="row">
                                <a href="{{ route('dttot.index') }}" class="btn btn-danger">DTTOT</a>
                                <br>
                                <hr>
                                <a href="{{ route('sipendar.index') }}" class="btn btn-primary">SIPENDAR</a>
                                <br>
                                <hr>
                                <a href="{{ route('dppspm.index') }}" class="btn btn-warning">DPPSPM</a>
                                <br>
                                <hr>
                                <a href="{{ route('aml.index') }}" class="btn btn-secondary">AML Newsletter</a>
                            </div>
                        </div>
                    </div>

                </div>
        

            </div>
        </div>
    </div>
</div>
@endsection
