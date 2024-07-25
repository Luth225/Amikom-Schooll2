@extends('layouts.backend.app', [
    'title' => 'Manage Agenda',
    'contentTitle' => 'Manage Agenda',
])

@section('content')
<x-alert></x-alert>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.agenda.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
            </div>
            <div class="card-body table-responsive">
                <table id="dataTable1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Tgl Upload</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php 
                    $no=1;
                @endphp

                @foreach($agenda as $agd)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $agd->judul }}</td>
                  <td>{{ $agd->tgl }}</td>
                  
                  <td>
                    <div class="row ml-2">
                        <a href="{{ route('admin.agenda.edit', $agd->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>

                        <form method="POST" action="{{ route('admin.agenda.destroy', $agd->id) }}">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin hapus ?')" type="submit" class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i></button>
                        </form>
                    </div>
                  </td>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
