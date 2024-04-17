
@extends('home')

@section('content')
<div class="container-fluid">
    
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Upload Data</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download Format</a>
    </div>
    <div class="card o-hidden border-0 shadow-lg my-3">
        <div class="card-body">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-0">                                 
                        <form action="{{ route('dttot.upload') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')                                                                                                                                             
                            <div class="mb-4">
                                <label for="formFile" class="form-label">Pilih File Excel</label>                                         
                                <input class="form-control" type="file" id="formFile" name="file">
                                
                            </div>                                                 
                            <div class="col-4 d-inline">
                                <a href="{{ route('dttot.delete') }}" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                            </div>
                            @if ($count != 0)
                            <div class="col-3 d-inline">
                                <span class="text" style="color: red">Hapus data lama</span>
                            </div>    
                            @else
                            <div class="col-3 d-inline">
                                <button type="submit" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Upload Data</span>
                                </button>
                            </div>
                            @endif                                                                                                                                                                                        
                        </form>
                        <hr>
                        <div class="row">
                            <h5 class="ml-md-3 text-black-50">Data Terupload : {{ $count }} - {{ $create ?? null }}</h5>
                        </div>                                                                          
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection