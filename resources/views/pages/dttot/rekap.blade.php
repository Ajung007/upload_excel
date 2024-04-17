
@extends('home')

@section('content')
<div class="container-fluid">
    
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <!-- Page Heading -->
    <div class="container-fluid">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    {{ $dataTable->table() }}
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush