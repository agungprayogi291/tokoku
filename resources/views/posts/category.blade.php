<div class="container">
<div class="row mb-5">
	<h4>category</h4>
	@foreach($categories as $category)
	<div class="col-md-2  col-sm-4 card text-center shadow-sm">
		<a type="submit" href="produks/{{$category->nama_kategory}}/show" class="py-2 text-decoration-none text-info text-wrap">{{$category->nama_kategory}}</a>
	</div>
	@endforeach
</div>	
</div>
