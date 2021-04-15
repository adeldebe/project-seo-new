@extends('home')

@section('judul')
  <div>
    Comments
  </div>
@endsection
  
@section('main')
<div class="container">
<div class="tab-content pl-3 pt-2" id="nav-tabContent">
	<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
		<div class="col-lg-12">
			<div class="card">
			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All ()</a>
					<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Trash ()</a>
					<div class="page-header float-right">
							<div class="card-body text-right">
								<button type="button" class="btn btn-primary">Newest</button>
								<button type="button" class="btn btn-primary">Oldest</button>
							</div>
						</div>
				</div>
			</nav>
			</div>
		</div>
	</div>
</div>
		<div class="tab-content pl-3 pt-2" id="nav-tabContent">
			<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
				<div class="col-lg-12">
					@foreach ($komen as $kmn)
					<div class="card">
						<div class="card-body">
							<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;">
								<html>
								<head></head>
								<body></body>
								</html>
							</iframe>
								<div class="media mb-4">
									<img class="user-avatar rounded-circle" src="{{ asset('style/images/admin.png') }}" alt="image" width="50px">
									<div class="media-body">
										<h5 class="title mb-1"> {{ $kmn->name }}</h5>
										<div class="meta mb-3"><span class="date">Published {{ $kmn->created_at->diffForHumans() }} .</span>
												    <span class="time">{{ $kmn->email }}</span>
										</div>
										<div>{{ $kmn->comment }}</div>
									</div>
								</div>
							<div class="page-header float-right">
								<a href="#ti-trash"><i class="ti-trash"></i> Trash<span class="icon-name"></span></a>
								<a href="#reply"><i class="fa fa-mail-reply"></i> Reply<span class="text-muted"></span></a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
				<div class="col-lg-11">
					<div class="card">
						<div class="card-body">
							<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;">
								<html>
								<head></head>
								<body></body>
								</html>
							</iframe>
								<div class="fa-hover col-lg-3 col-md-6"><i class="fa fa-comments"></i><p> No deleted comments.</p>
								</div>
							<canvas id="barChart" width="532" height="266" style="display: block; width: 532px; height: 266px;">
							</canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection