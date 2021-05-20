@extends('layouts.app')

@section('title','tokoku')

@section('category')
<a class="nav-link dropdown-toggle col-2  text-end " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		        kategori
		    </a>

		    <ul class="dropdown-menu bg-white shadow" aria-labelledby="navbarDropdown">
		    	<div class="container">
		    		<div class="row">	
		    			@foreach($categories as $category)
			    			<div class="col">	
			    				<li><a class="dropdown-item" href="#">{{$category->nama_kategory}}</a></li>
			    			</div>
				     	@endforeach
			         </div>
		    	</div>
		    </ul>

@endsection
@section('content-main')


<div class="container contain mt-5 " id="carousel-top-product"> 
	<div id="carouselExampleCaptions" class="carousel slide  shadow " data-bs-ride="carousel" >
	  <div class="carousel-indicators">
	    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
	    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
	  </div>
	  <div class="carousel-inner" id="hot-product">
	    <div class="carousel-item active">
	      <img src="/img/upload/1619244329-produk-1619244329.jpg" class="d-block " alt="img" width="200px">
	      <div class="carousel-caption d-none d-md-block">
	        <h5>Second slide label</h5>
	        <p>Some representative placeholder content for the second slide.</p>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="/img/upload/1619244251-produk-1619244251.jpg" class="d-block " alt="img" width="200px">
	      <div class="carousel-caption d-none d-md-block">
	        <h5>Second slide label</h5>
	        <p>Some representative placeholder content for the second slide.</p>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="/img/upload/1619228208-produk-1619228208.jpg" class="d-block " alt="img" width="200px">
	      <div class="carousel-caption d-none d-md-block">
	        <h5>Third slide label</h5>
	        <p>Some representative placeholder content for the third slide.</p>
	      </div>
	    </div>
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Next</span>
	  </button>
	</div>
</div>


<div class="container col-sm-10 mt-5 ">
	@include('posts.category')		
	@include('posts.produks')	
</div>
								
@endsection
