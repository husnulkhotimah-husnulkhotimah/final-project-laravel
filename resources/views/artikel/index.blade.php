@extends('pages.article')

@section('artikel')
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
        @forelse ($artikel as $item)
<<<<<<< HEAD
<div class="card-group">
    <div class="card">
      <img class="card-img-top" src="{{ asset('/gambar/' . $item->gambar) }}" alt="Card image cap" width="200px" height="220px">
      <div class="card-body">
        <h5 class="card-title">{{ $item->judul }}</h5>
        <p class="card-text">{!! Str::limit($item->isi, 30) !!}</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">
            @auth
        <a href="/artikel/{{ $item->id }}" class="btn btn-primary">Lihat</a>
        <a href="/artikel/{{ $item->id }}/edit" class="btn btn-primary">Edit</a>
        <form action="/artikel/{{ $item->id }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete" class="btn btn-danger btn-sm m-1">
        </form>
    @endauth
    @guest
        <a href="/artikel/{{ $item->id }}" class="btn btn-primary">Lihat</a>
    @endguest</small>
      </div>
    </div>
  </div>
        
                   
=======
            <div class="card-group">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('/gambar/' . $item->gambar) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <p class="card-text">{!! Str::limit($item->isi, 90) !!}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">
                            @auth
                                <a href="/artikel/{{ $item->id }}" class="btn btn-primary text-decoration-none">Lihat</a>
                                <a href="/artikel/{{ $item->id }}/edit"
                                    class="btn btn-primary text-decoration-none">Edit</a>
                                <form action="/artikel/{{ $item->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="delete" class="btn btn-danger mt-2 text-decoration-none">
                                </form>
                            @endauth
                            @guest
                                <a href="/artikel/{{ $item->id }}" class="btn btn-primary text-decoration-none">Lihat</a>
                            @endguest
                        </small>
                    </div>
                </div>
            </div>


>>>>>>> aa26c6660ea1a7e1a51af7d8038cfdd0fb3a0988
        @empty
            Belum ada Artikel yang dibuat
        @endforelse
    </div>
@endsection
