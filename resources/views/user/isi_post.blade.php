@extends('template_frontend.content')
@section('head')
<div class="section-row">
    <div id="post-header" class="page-header">
        <div class="page-header-bg" style="background-image: url('{{ asset($data->gambar) }}');" data-stellar-background-ratio="0.5"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="post-category">
                        <a href="{{ route('blog.category', $data->category->slug) }}">{{ $data->category->name }}</a>
                    </div>
                    <h1>{{ $data->judul }}</h1>
                    <ul class="post-meta">
                        <li><a href="{{ route('blog.users', Crypt::encrypt($data->users_id)) }}">{{ $data->users->name }}</a></li>
                        <li>{{ $data->created_at->format('l, H:i:s d M Y') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('isi')
<div class="section-row">
    {!! $data->content !!}
</div>
@endsection
