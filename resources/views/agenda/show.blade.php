@extends('layouts.frontend.app', [
    'title' => 'Detail Agenda',
])

@section('content')
<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url({{ asset('img/bg/agenda.png') }});">
    <div class="blog-details-headline">
        <h3>{{ $agenda->judul }}</h3>
    </div>
</div>
<!-- ##### Catagory Area End ##### -->

<!-- ##### Blog Details Content ##### -->
<div class="blog-details-content section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <!-- Blog Details Text -->
                <div class="blog-details-text">
                    <p><strong>Tanggal Mulai:</strong> {{ $agenda->tgl_mulai }}</p>
                    <p><strong>Tanggal Selesai:</strong> {{ $agenda->tgl_selesai }}</p>
                    <p><strong>Jam Mulai:</strong> {{ $agenda->jam_mulai }}</p>
                    <p><strong>Jam Selesai:</strong> {{ $agenda->jam_selesai }}</p>
                    <p><strong>Deskripsi:</strong></p>
                    {!! $agenda->deskripsi !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
