@extends('home')

@section('judul')
	<div>
		Articles
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
                          <a class="nav-link" href="#">Publish<span class="badge badge-primary"></span></a>
                          </li>
                          <li class="nav-item">
                          <a class="nav-link" href="#">Drafts<span class="badge badge-primary"></span></a>
                          </li>
                          <li class="nav-item">
                          <a class="nav-link" href="#">Scheduled<span class="badge badge-primary"></span></a>
                          </li>
                          <li class="nav-item">
                          <a class="nav-link" href="#">Trashed<span class="badge badge-primary"></span></a>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><div class="fa-hover col-lg-3 col-md-6"><a href="#search"><i class="fa fa-search"></i></a></div></li>
                        </ol>
                    </div>
                </div>
        </div>
    </div>

    <div class="content mt-3">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-md-12">
            <div class="card">  
              <div class="row">
                <div class="col-sm-12">
                  <table id="bootstrap-data-table" class="table table-striped dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info">
                      <thead>
                          <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 204px;">Articles</th>
                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 336px;">Author</th>
                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;">Categories</th>
                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 116px;">tags</th>
                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 116px;"><a href="{{ url("article/create") }}" class="btn btn-outline-info">add new</a</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($article as $data)
                        <tr>
                          <td>{{ $data -> judul }}</td>
                          <td>{{ $data -> penulis}}</td>
                          <td>
                            {{ $data->category->name_kategori}}
                          </td>
                          <td>
                            @foreach($data->tags as $tag)
                            <ul>
                              <li>{{ $tag->name }}</li>
                            </ul>
                            @endforeach   
                          </td>
                          <!-- <td>
                            <img src="{{ asset( $data->gambar) }}" class="img-fluid" style="width: 100px">
                          </td> -->
                          <td>
                            <a type="button" class="btn btn-success btn-sm" href="{{ url("article/{$data->id}/edit") }}">edit</a>
                            <a href="/article/{{$data->id}}/delete" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Apa anda yakin')">delete</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection