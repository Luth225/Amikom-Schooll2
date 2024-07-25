@extends('layouts.frontend.app', [
    'title' => 'List Agenda',
])

@section('content')
@if($agendas->count() > 0)
<section class="upcoming-events section-padding-100-0 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>List Agenda</h3>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($agendas as $agenda)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                    <!-- Events Thumb -->
                    <div class="events-thumb">
                        <img src="{{ asset('img/bg') }}/agenda.png" alt=""> <!-- Ganti dengan gambar agenda jika ada -->
                        <h6 class="event-date">{{ $agenda->tgl_mulai }} - {{ $agenda->tgl_selesai }} | BY : {{ $agenda->user->name ?? 'Admin' }}</h6>
                        <h4 class="event-title">{{ $agenda->judul }}</h4>
                    </div>
                    <div>
                        <a href="{{ route('agenda.show', $agenda->id) }}" class="btn btn-primary col-lg">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="pagination justify-content-center">
                {{ $agendas->links() }}
            </div>
        </div>
    </div>
</section>
@endif
@stop
