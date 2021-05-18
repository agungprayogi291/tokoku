
			<div class=" col-md-6 ">
				<label for="" class="form-label">Nama Produk</label>
				<input type="text" class="form-control" name="nama_produk" value="{{old('nama_produk') ?? $produk->nama_produk}}">
				@error('nama_produk')
				<span class="text-danger">
					{{$message}}
				</span>
				@enderror
			</div>
			<div class=" col-md-6">
				<label for="" class="form-label">Stock Produk</label>
				<input type="number" class="form-control"  name="stock_produk" value="{{old('stock_produk') ?? $produk->stock_produk}}">
				@error('stock')
				<span class="text-danger">
					{{$message}}
				</span>
				@enderror
			</div>
			
			<div class="col-xl-12 col-md-6 mt-3 input-group ">
				<input type="file"  name="image" accept= "image/*">
				
				@error('image_produk')
				<span class="text-danger">
					{{$message}}
				</span>
				@enderror
			</div>
		
			<div class="col-xl-12 col-md-6 mt-3">
				<textarea name="description" id="" cols="30" rows="8" class="form-control" placeholder="description....">{{old('description') ?? $produk->description}}</textarea>
				@error('description')
				<span class="text-danger">
					{{$message}}
				</span>
				@enderror
			</div>
			<div class="form-group mt-2">	
               <input type="number" name="harga" class="form-control" value="{{old('harga') ?? $produk->harga}}">
               @error('harga')
               <span class="text-danger">
               	{{$message}}
               </span>
               @enderror
			</div>
			
			<div class="col-md-12 mt-2 input-group">	
				<label for="category" class="input-group-text" >category</label>
				<select name="categories_id" class="form-select form-control" id="category" >
					<option value="{{$produk->categories_id}}">chose...</option>
					@foreach($categories as $category)
					<option value="{{old('categories_id') ?? $category->id}}">{{old('categoriest_id') ?? $category->nama_kategory}}</option>
					@endforeach
				</select>
			</div>
			

			<input type="hidden" name="users_id" value="{{Auth()->user()->id}}">
			<input type="text" value="{{$produk->image_produk}}" name="image_produk" >
		
			<div class="col-md-6 mt-2  ">	
				<button type="submit" name="submit" class="btn btn-success " >Upload</button>
			</div>