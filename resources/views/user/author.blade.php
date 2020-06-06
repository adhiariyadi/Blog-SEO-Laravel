@extends('template_frontend.content')
@section('head')
<div class="section">
	<div class="container">
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 text-center">
                        <div class="author">
                            <img class="author-img center-block" src="{{ asset('assets/img/avatar/avatar-1.png') }}" alt="">
                            <h1 class="text-uppercase">{{ $user->name }}</h1>
                            <ul class="author-social">
                                <li><a href="https://www.facebook.com/profile.php?id=100007787444809"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://api.whatsapp.com/send?phone=6281246835129"><i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCSU_al9Rti8l4AQtgb4dZlg?view_as=subscriber"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="https://www.instagram.com/adhiariyadi_/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('isi')
    @foreach ($data as $d)
        <div class="post post-row">
            <a class="post-img" href="{{ route('blog.isi', $d->slug) }}"><img src="{{ asset( $d->gambar ) }}" alt=""></a>
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
@endsection
