@extends('home')

@section('judul')
  <div>
    Tambah Data
  </div>
@endsection

@section('main')
<div class="row">
		<div class="col-md-8 offset-sm-2">
			<form action="{{ url("/article") }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="judul">Judul:</label>
					<input class="form-control" type="text" name="judul">
				</div>
				<div class="form-group">
					<label for="url_artikel">url artikel:</label>
					<input class="form-control" type="text" name="url_artikel">
				</div>
				<div class="form-group">
					<label for="permalink">permalink:</label>
					<input class="form-control" type="text" name="permalink">
				</div>
				<div class="form-group">
					<label for="isi_artikel">isi artikel:</label>
					<textarea class="form-control" name="isi_artikel" id="isi_artikel" rows="5"></textarea>
				</div>
				<div class="form-group">
					<label for="penulis">penulis</label>
					<input type="text" name="penulis" class="form-control" id="penulis">
				</div>
				<div class="form-group">
					<label for="category_id">Category</label>
					<select class="form-control" name="category_id" id="category_id">
						<option value="" holder>Pilih Kategory</option>
						@foreach( $category as $result)
						<option value="{{ $result->id}}">{{ $result->name_kategori}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
	            	<label for="tags">Tag</label>   
	                    <select data-placeholder="pilih tag" multiple="" name="tags[]" class="standardSelect" style="display: none;>
	                           @foreach( $tags as $result)
	                           <option value="{{ $result->id }}">{{ $result->name }}</option>
	                           @endforeach
	                    </select>                   
	            </div>
				<div class="form-group">
					<label for="gambar">gambar:</label>
					<input class="form-control" type="file" name="gambar">
				</div>
				<button type="submit" class="btn btn-primary">Tambah Data</button>
			</form>
		</div>
	</div>
 
 <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
 <script>
                CKEDITOR.replace( 'isi_artikel' );
  </script>
@endsection