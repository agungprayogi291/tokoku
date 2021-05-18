@extends('layouts.dashboard')
@section('title','buat produk')
@section('content')

<div class="container">

</div>
	<div class="container">
		<form action="/dashboard/produk/post" class="row g-3" method="post" enctype="multipart/form-data">
			@csrf
			@include('dashboard.admin.produk.form-control');	
		</form>
	</div>

@endsection