@extends('home')

@section('main')

<div class="row">
		<div class="col-md-8 offset-sm-2">
			<form action="{{ url("/article/{$article->id}") }}" method="POST" enctype="multipart/form-data">
				@method('PATCH')
				@csrf
				<div class="form-group">
					<label for="judul">Judul:</label>
					<input value="{{ $article->judul }}" class="form-control" type="text" name="judul">
				</div>
				<div class="form-group">
					<label for="category_id">Category</label>
					<select class="form-control" name="category_id" id="category_id">
						<option holder>Pilih Kategory</option>
						@foreach( $category as $result)
						<option value="{{ $result->id }}"
						  @if($result->id == $article->category_id)
						  	 selected
						  @endif
							>{{ $result->name_kategori}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="url_article">url artikel:</label>
					<input value="{{ $article->url_artikel }}" class="form-control" type="text" name="url_artikel">
				</div>
				<div class="form-group">
					<label for="permalink">permalink:</label>
					<input value="{{ $article->permalink }}" class="form-control" type="text" name="permalink">
				</div>
				<div class="form-group">
					<label for="isi_artikel">isi artikel:</label>
					<textarea class="form-control" name="isi_artikel">{{ $article->isi_artikel }}</textarea>
				</div>
				<div class="form-group">
					<label for="penulis">penulis</label>
					<input value="{{ $article->penulis }}" type="text" name="penulis" class="form-control" id="penulis">
				</div>
				<div class="form-group">
	            	<label for="tags">Tag</label>   
	                    <select data-placeholder="pilih tag" multiple="" name="tags[]" class="standardSelect" style="display: none;>
	                           @foreach( $tags as $result)
	                           <option value="{{ $result->id }}"
	                           	 @foreach($article->tags as $value)
	                           	 	@if($result->id == $value->id)
	                           	 		selected
	                           	 	@endif
	                           	 @endforeach
	                           	>{{ $result->name }}</option>
	                           @endforeach
	                    </select>                   
	            </div>
				<div class="form-group">
					<label for="gambar">gambar</label>
					<input class="form-control-file" type="file" name="gambar">
				</div>
				<button type="submit" class="btn btn-primary">Edit Data</button>
			</form>
		</div>
	</div>
@endsection