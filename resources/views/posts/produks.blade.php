
		<div class="row mb-5">
				@if($categories->count() == 1)
					<h4 class="text-secondary">Produk :<span class="text-dark">{{$category->nama_kategory}}</span></h4>:
				@else
			<h4>Produk</h4>
			@endif
		@foreach($produks as $produk)
				<div class="col col-lg-3 mb-5">
					<div class="card-header p-0 bg-white shadow-sm ">
						<div class="img-area">
								<img src="/{{$produk->image_produk}}" alt="" max-width="200px" height="200px">
							</div>
							<div class="card-body">
								<h5>{{$produk->nama_produk}}</h5>
								<a href="/category/{{$produk->categories->id}}/show" class=" text-decoration-none text-secondary">{{$produk->categories->nama_kategory}}</a>
								<p class="text-secondary">Penjual : {{$produk->users->name}}</p>
								<p>	{{$produk->description}}</p>
								<p>tersisa :<b> {{$produk->stock_produk}}</b></p>
								<div class="d-flex bg-secondary ">
									<div class="col col-md-9 text-white text-center py-3 p-2">
										<h6>Rp.{{$produk->harga}}</h6>
									</div>
									<div class="col bg-primary text-white d-flex align-items-center justify-content-center">
										<a href="checkout/{{$produk->id}}" class="text-white text-decoration-none ">Buy</a>
									</div>
									
								</div>		
						</div>
					</div>
				</div>
		@endforeach
</div>