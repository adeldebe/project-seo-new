@extends('home')

@section('judul')
  <div>
    Comments
  </div>
@endsection
  
@section('main')
  	@if(Session::has('Pesan'))
        <div class="alert alert-success">
          {{Session::get('Pesan')}}
        </div>
    @endif
<div class="breadcrumbs">
            <div class="col-sm-7">
                <div class="page-header float-left">
                    <div class="page-title">
                        <ul class="nav nav-tabs">
                          <li class="nav-item">
                          <a class="nav-link" href="/comments">All <span class="badge badge-primary">({{ \App\Comment::totalSampah() }})</span></a>
                          </li>
                          <li class="nav-item">
                          <a class="nav-link" href="{{ route('tampil_hapus')}}">Trash ()<span class="badge badge-primary"></span></a>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ul class="breadcrumb text-right">
                            <button class="btn btn-primary btn-sm">Newest</button>&nbsp
							<button class="btn btn-primary btn-sm">Oldest</button>
                        </ul>
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
										<h5 class="title mb-1"> {{ $kmn->name }} . id artikel-{{$kmn->id_article}}</h5>
										<div class="meta mb-3"><span class="date">Published {{ $kmn->created_at->diffForHumans() }} .</span>
												    <span class="time">{{ $kmn->email }}</span>
										</div>
										<div>{{ $kmn->comment }}</div>
									</div>
								</div>
							<div class="page-header float-right">
								<a href="/comments/{{$kmn->id}}/delete"><i class="ti-trash"></i> Delete<span class="icon-name"></span></a>
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