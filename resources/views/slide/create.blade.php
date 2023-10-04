@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Slider') }}</h1>

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">


        <div class="col-lg-8 order-lg-1">

            <div class="card shadow mb-4">
                <form method="POST" action="{{ route('slide.store') }}" enctype="multipart/form-data" >
                    {{csrf_field()}}
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label for="event-option">Nama Slide</label>
                                    <input id="name" name="name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Foto</label>
                                    <input id="foto" name="foto" type="file" class="form-control">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('slide') }}" class="btn btn-warning col-md-2 mb-4">Kembali</a>
                        <button type="submit" class="btn btn-primary col-md-2 float-right mb-4">Save</button>
                    </div>
                </form>
            </div>

        </div>

    </div>

@endsection
