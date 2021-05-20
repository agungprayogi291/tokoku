@extends('layouts.dashboard')
@section('title','produk')
@section('content')

<div  style="overflow:auto;">	
@if(session()->has('success'))
<div class="alert alert-success">
	{{session()->get('success')}}
</div>
@endif
		<table id="table_id" class="display">
			<thead>
				<tr>
					<th>Nama_produk</th>
					<th>description</th>
					<th>stock</th>
					<th>harga</th>
					<th>gambar</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($produks as $produk)
				<tr>
						<td>{{$produk->nama_produk}}</td>
						<td>{{$produk->description}}</td>
						<td>{{$produk->stock_produk}}</td>
						<td>{{$produk->harga}}</td>
						<td>
							<img src="/{{$produk->image_produk}}" alt="{{$produk->image_produk}}" width="100px">
						</td>
						<td>
							<a href="/dashboard/produk/{{$produk->id}}" class="text-danger">Delete</a>
							<a href="/dashboard/update/{{$produk->id}}" class="text-ingfo">update</a>
						</td>
				</tr>
				
				@endforeach


			</tbody>

		</table>
		
</div>	

@endsection