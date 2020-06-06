@extends('template_frontend.content')
@section('isi')
	<!-- row -->
	<div class="row">
		<div class="col-md-12">
			<div class="section-title">
				<h2 class="title">Beranda</h2>
			</div>
		</div>
		<!-- post -->
		@php
			$i = 1;
		@endphp
		@foreach ($data as $d)
			<div class="col-md-6">
				<div class="post">
					<a class="post-img" href="{{ route('blog.isi', $d->slug) }}"><img src="{{ asset( $d->gambar ) }}" height="250" alt=""></a>
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
			</div>
		@if ($i % 2 == 0)
			<div class="clearfix visible-md visible-lg"></div>
		@endif
		@php
			$i++;
		@endphp
		@endforeach
	</div>
	<!-- /row -->
@endsection
