@extends('../components/app')
@section('title','login')
@section('content-main')

<div class="container  mt-5">
	<div class="card col-md-8 bg-white shadow m-auto">
		<div class="container p-5">
			<h2 class="text-center ">Registrasi</h2>
			<form action="{{route('registrasi')}}" class="form " method="post">
				@csrf
				<div class="form-group mt-3">
					<label for="nama" class="">nama</label>
					<input id="nama" type="text" class=" form-control border-top-0 border-end-0 border-start-0 " name="nama" required>
				</div>
				<div class="form-group mt-3">
					<label for="email">E-mail</label>
					<input id="email" type="email" class="form-control border-top-0 border-start-0 border-end-0" name="email" required>
				</div>
				<div class="form-group mt-3">
					<label for="password">password</label>
					<input id="password" type="password" class="form-control border-top-0 border-start-0 border-end-0" name="password" required="">
				</div>
				<div class="form-group mt-3 text-end">
					<a href=""  name="back" class="btn btn-danger">Back</a>
					<input type="submit" name="submit" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>

@endsection
