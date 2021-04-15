@extends('home')

@section('judul')
	<div>
		Tag
	</div>
@endsection

@section('main')
	
    <div class="content mt-3">
     <div class="animated fadeIn">
       <div class="row">
         <div class="col-md-12">
         	
         	@if(Session::has('succes'))
         		<div class="alert alert-success" role="alert">
	      			{{Session('succes')}}
	      		</div>
			@endif 

			@if(count($errors)>0)
				@foreach($errors->all() as $errors)
				    <div class="alert alert-danger" role="alert">
				    	{{ $errors }}
				    </div>
				@endforeach
			@endif 
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
				Add Tag
			</button>
			<br><br>
           <div class="card">  
             <div class="row">
               <div class="col-sm-12">
				 <table class="table table-striped dataTable no-footer">
				 	<thead>
					 	<tr>
					 		<th>No</th>
					 		<th>Nama tag</th>
					 		<th>slug</th>
					 		<th>action</th>
				 		</tr>
				 	</thead>
				 	<tbody>
				 		@foreach($tag as $data)
				 		<tr>
				 		<td>{{ $data->id}}</td>
				 		<td>{{ $data->name}}</td>
				 		<td>{{ $data->slug}}</td>
				 		<td>
				 			<form action="{{ route('tag.destroy', $data->id) }}" method="post" >
				 				@csrf
				 				@method('delete')
				 			<button class="btn btn-danger btn-sm" onclick="return confirm('Apa anda yakin')">delete</button>
				 			</form>
				 		</td>
				 		</tr>
				 		@endforeach
				 	</tbody>
				 </table>

				 </div>
              </div>
            </div>
             {{ $tag->links() }}
          </div>
        </div>
      </div>
    </div>

				 <!-- kelas add new category  -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Tambah Tag</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form action="{{ route('tag.store') }}" method="post">
							@csrf
							<div class="form-group">
								<label for="name">Nama Tag:</label>
								<input class="form-control" type="text" name="name">
							</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
				        <button type="submit" class="btn btn-primary">Simpan</button>
				      	</form>
				      </div>
				    </div>
				  </div>
				</div>

				 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@endsection