@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Event Image') }}</h1>
    <div class="card shadow mb-4">
        <div class="card-header">
        <a href="{{ route('event-image.create') }}" class="btn btn-primary btn-round"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0 table-bordered" id="tableData">
                    <thead class="table-light">
                        <tr>
                            <th width="1%">#</th>
                            <th>Event Name</th>
                            <th>Image</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=0; @endphp
                        @foreach($datas as $data)
                            @php $i++; $no = ($datas->currentPage() - 1) * ($datas->perPage()) + $i; @endphp
                            <tr>
                                
                                <td scope="row">{{ $no }}</td>
                                <td>{{ $data -> event_name  }}</td>
                                <td>
                                    <img class="img-thumbnail" width="10%" src='{{ route("file.show", encrypt($data->foto)) }}' data-holder-rendered="true"></td>
                                <td>
                                    <form action="{{ route('event-image.destroy',$data->id) }}"  method="POST">
                                        <a href="{{ route('event-image.edit',$data->id) }}" class="btn btn-warning "><i class="fa fa-edit"></i> Ubah</a> 
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Konfirmasi hapus data  ?')" ><i class="fas fa-trash"></i> Hapus</button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="addnewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form action="{{route('event.store')}}" method="post">
                @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="name">Nama Event<span class="small text-danger">*</span></label>
                                    <input type="text" id="name" class="form-control" name="name" placeholder="Nama" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                <label class="form-control-label" for="name">Tanggal Event</label>
                                    <div class="datepicker date input-group">
                                        <input type="text" placeholder="Choose Date" class="form-control" name="date_agenda">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="name">Deskripsi</label>
                                    <textarea rows="4" id="description" class="form-control" name="description" ></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="name">Lokasi</label>
                                    <input type="text" id="location" class="form-control" name="location" placeholder="Lokasi" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editLabel" tabindex="-1" role="dialog" aria-labelledby="editnewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form action="{{route('event.update', 'event.id')}}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data</h5>
                        <input type="hidden" id="event_id" name="event_id">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="name">Nama Event<span class="small text-danger">*</span></label>
                                    <input type="text" id="name" class="form-control" name="name" placeholder="Nama" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                <label class="form-control-label" for="name">Tanggal Event</label>
                                    <div class="datepicker2 date input-group">
                                        <input type="text" placeholder="Choose Date" class="form-control" id="date-agenda" name="date_agenda">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="name">Deskripsi</label>
                                    <textarea rows="4" id="description" class="form-control" name="description" ></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="name">Lokasi</label>
                                    <input type="text" id="location" class="form-control" name="location" placeholder="Lokasi" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->

@endsection

