@extends('layouts.dashboard')
@section('content')
<div class="container">
	<h1>Daftar category</h1>


	<form class="d-flex col-md-10 col-sm-12" action="/category" method="post">
		@csrf
		<div class="input-group  ">
			<input type="text" class="form-control"  aria-label="category" aria-describedby="button-addon2" name="nama_kategory">
			<button class="btn btn-outline-secondary " type="submit" id="button-addon2"><i class="bi bi-add"></i>ADD</button>
		</div>
	</form>

	<table class="table table-bordered mt-5 table-hover">
			<thead>	
                <tr>
                	<th>category</th>
                </tr>
			</thead>	
			<tbody>	
					@foreach($categories as $category)
						<tr>
							<td>{{$category->nama_kategory}}</td>
						</tr>
					@endforeach
			</tbody>	

		
	</table>
	<div class="d-flex justify-content-center mb-5">
		{{$categories->links()}}
	</div>
	
</div>
@endsection