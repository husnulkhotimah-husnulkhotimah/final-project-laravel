@extends('pages.forum')

@section('pertanyaan')
    <div class="row mt-3">
        @forelse ($pertanyaan as $item)
            <div class="col-4">
                <div class="card">
                    {{-- <img class="card-img-top" src="{{ asset('/gambar/' . $item->gambar) }}" height="400px"
                        alt="Card image cap"> --}}
                    <div class="card-body">
                        <h2>{{ $item->judul }}</h2>
                        <p class="card-text">{{ Str::limit($item->isi, 100) }}</p>
                        <a href="/pertanyaan/{{ $item->id }}" class="btn btn-primary">Lihat Diskusi</a>
                    </div>
                </div>
            </div>
        @empty
            Belum ada pertanyaan
        @endforelse
    </div>
@endsection
