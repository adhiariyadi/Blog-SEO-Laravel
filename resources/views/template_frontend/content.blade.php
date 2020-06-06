@include('template_frontend.head')

@yield('head')

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<div id="hot-post" class="row hot-post">
			<div class="col-md-8 hot-post-left">
				@yield('isi')
			</div>
			@include('template_frontend.widget')
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
@include('template_frontend.footer')
