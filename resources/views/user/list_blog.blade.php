@extends('template_frontend.content')
@section('isi')
    @foreach ($data as $d)
        <div class="post post-row">
            <a class="post-img" href="{{ route('blog.isi', $d->slug) }}"><img src="{{ asset($d->gambar) }}" alt=""></a>
            <div class="post-body">
                <div class="post-category">
                    <a href="{{ route('blog.category', $d->category->slug) }}">{{ $d->category->name }}</a>
                </div>
                <h3 class="post-title"><a href="{{ route('blog.isi', $d->slug) }}">{{ $d->judul }}</a></h3>
                <ul class="post-meta">
                    <li><a href="{{ route('blog.users', Crypt::encrypt($d->users_id)) }}">{{ $d->users->name }}</a></li>
                    <li>{{ $d->created_at->format('l, H:i:s d M Y') }}</li>
                </ul>
            </div>
        </div>
    @endforeach
    <center>{{ $data->links() }}</center>
@endsection