
<style>

#mobile_dp option {
background-color: #82caff;
color:#000000f0
}

</style>

<header id="site-header" class="site-header header-v1 color-white">
	<div class="header-mobile">
		<div class="section-padding">
			<div class="section-container">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-left">
						<div class="navbar-header">
							<button type="button" id="show-megamenu" class="navbar-toggle"></button>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 header-center">
						<div class="">
							<a href="index.html">
								<label class="logo"></label>
								<!-- <img width="400" height="79" src="{{asset('assets/media/logo.png')}}" alt="Mojuri – Jewelry Store HTML Template" /> -->
							</a>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-right">
						<div class="mojuri-topcart dropdown">
						<select id="mobile_dp" class="form-select changeLang" style="border: 1px solid dark;color: white;">
								<option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
								<option value="jp" {{ session()->get('locale') == 'jp' ? 'selected' : '' }}>Japenese</option>

							</select>
						</div>
					</div>
				</div>
			</div>
		</div>

		
	</div>

	<div class="header-desktop">
		<div class="header-wrapper">
			<div class="section-padding">
				<div class="section-container large p-l-r">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 header-left">
							<div class="">
								
								<a href="{{route('index')}}">
									<label class="logo logo-font">Shambhavi</label>
									<!-- <img width="80" height="50" src="{{asset('assets/media/png/logo-white.png')}}" alt="Mojuri – Jewelry Store HTML Template" /> -->
								</a>
							</div>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-center header-center">
							<div class="site-navigation">
								<nav id="main-navigation">
									<ul id="menu-main-menu" class="menu">
										<li class="level-0 menu-item">
											<a href="{{route('index')}}"><span class="menu-item-text">{{ __('messages.HOME') }}</span></a>
										</li>
										<li class="level-0 menu-item">
											<a href="{{route('about-us')}}"><span class="menu-item-text">{{ __('messages.ABOUT US') }}</span></a>
										</li>
										<li class="level-0 menu-item">
											<a href="{{route('astrology')}}"><span class="menu-item-text">{{ __('messages.ASTROLOGY') }}</span></a>
										</li>

										<li class="level-0 menu-item">
											<a href="{{route('contact-us')}}"><span class="menu-item-text">{{ __('messages.CONTACT US') }}</span></a>
										</li>
									</ul>
								</nav>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 header-right">
							<!-- <div class="col-md-4"> -->
							<select class="form-select changeLang" style="border: 1px solid dark;">
								<option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
								<option value="jp" {{ session()->get('locale') == 'jp' ? 'selected' : '' }}>Japenese</option>

							</select>
							<!-- <div class="btn-group">
								<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Languages
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item"  value="en" href="#" data-locale="en" {{ session()->get('locale') == 'en' ? 'data-selected="true"' : '' }}>English</a>
									<a class="dropdown-item" href="#" data-locale="fr" {{ session()->get('locale') == 'fr' ? 'data-selected="true"' : '' }}>France</a>
									<a class="dropdown-item" href="#" data-locale="jp" {{ session()->get('locale') == 'jp' ? 'data-selected="true"' : '' }}>Japanese</a>
								</div>
							</div> -->


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
@section("script")
<script>
	var url = "{{route('lang-change')}}";

	$(".dropdown-item").on('click', function() {
		// var selectedItem = $(this).val();

		// window.location.href = url + "?lang=" +$(this).text();
	});
	$(".changeLang").change(function() {
		// alert("okay");
		window.location.href = url + "?lang=" + $(this).val();
	});
</script>
@endsection