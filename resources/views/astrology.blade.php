@extends('layouts2.app')
@section('title', 'ASTROLOGY')
@section('hfeed page-wrapper')
<div id="site-main" class="site-main">
				<div id="main-content" class="main-content">
					<div id="primary" class="content-area">
						<div id="content" class="site-content" role="main">
							<div class="section-padding">
								<div class="section-container p-l-r">
									<div class="page-404">
										<div class="content-page-404">
											<div class="title-error">
														
											</div>
											<div class="sub-title">
											{{ __('messages.COMMING SOON') }}		
											</div>
											<div class="sub-error">
												<!-- We're really sorry but we can't seem to find the page you were looking for.		 -->
											</div>
											<a class="button" href="{{route('index')}}" style="color:white !important;">
											{{ __('messages.Back The Homepage') }}	
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection