@extends('layouts.dashboard')
@section('content')

<div class="container">
	<form action="/dashboard/produk/update" method="post"  enctype="multipart/form-data">
		@method('patch')
		@csrf
		<input type="hidden" value="{{$produk->id}}" name="id">
		@include('dashboard.admin.produk.form-control')
	</form>
</div>

@endsection