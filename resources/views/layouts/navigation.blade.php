<nav class=" " style="background-color:#31893d;">
	<div class="container text-end px-5">
		<a href="" class="text-decoration-none text-dark">about tokoku</a>
	</div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-white py-4 shadow-sm">
  <div class="container container-fluid ">
  	<div class="col col-lg-4  d-flex justify-content-between ">
  		 <a class="navbar-brand text-success" href="#">TOkoku</a>
	    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
  	</div>
    <div class="row col-md-8  collapse navbar-collapse " id="navbarNavDropdown">
    	<ul class="d-flex navbar-nav ">
    		<div class="col d-flex  align-item-center justify-content-center ">
    			<form action="/produk/search" method="get" class="form" enctype="multipart/form-data">
    				@csrf
    				<input type="text" placeholder="search" aria-label="Recipient's username" aria-describedby="button-addon2" name="search" value="{{old('search')}}">
					<button class="btn btn-outline-secondary " type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
    			</form>
    			
    		</div>
    		<div class="col d-flex justify-content-around">
    			<li class="nav-item">
		          <a class="nav-link {{request()->is('home') ? 'active':''}}" href="{{asset('/home')}}">Home</a>
		        </li>	
		        <li class="nav-item">
		        	<a class="nav-link" href="">Chart</a>
		        </li>
		        <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			          <i class="bi bi-person-circle" ></i>
			        </a>
			        <ul class="dropdown-menu px-2" aria-labelledby="navbarDropdownMenuLink">
			            @if(!session()->get('nama'))
							<li><a class="dropdown-item " href="/page-login" name="masuk">Masuk</a></li>
							<li><a class="dropdown-item" href="/page-register">Daftar</a></li>
						@endif
						@if(session()->get('nama'))
							<li>{{session()->get('nama')}}</li>
							<hr>
							@if(Auth()->user()->level == 'admin')
							<li><a href="/dashboard/produk" class="text-decoration-none text-dark">Dashboard</a></li>
							@endif
							<li><a href="/page-logout" class="text-decoration-none text-secondary">logout</a></li>
						@endif    		
			        </ul>
	       		</li>
	       		
    		</div>
	       
      </ul>
    </div>
  </div>
</nav>
	