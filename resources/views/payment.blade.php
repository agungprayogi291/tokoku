<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  <link rel="stylesheet" href="{{asset('Adminlte/dist/css/adminlte.min.css')}}">
</head>
<body>
  <button class="btn btn-danger">Back</button>
<div class="container"> 

<div class="row p-3">
  <div class="col-md-4 border p-4 border-danger">  
    <form action="  " method="">
     <h1> Detail barang</h1>
     <hr> 
     <div class="row"> 
      <img src="img/upload/1619228208-produk-1619228208.jpg" alt="" width="200px">
        <label for="  ">price:</label>
      <p>Rp .10000</p> 
      </div>
      <div class="row mt-5">
        <div class="col"> 
            <label for="  ">subtotal</label>
            <p>rp.089</p>
        </div> 
          <div class="col">
            <label for="">pajak</label>
                <p>-</p> 
            </div>
            <label for=" ">Total</label>
            <h4> </h4>
        </div>  
        <button class="btn btn-danger form-control">Batalkan pemesanan</button>
    </form>
  </div>  
  <div class="ml-5 col-md-6 shadow p-3">  
      <h1 class="text-center mt-3">Terimakasih Atas Pemesanan Anda</h1>
      <form class="form">
        <hr >  
          <div class="row mt-3"> 
             <div class="col text-start">
             <h3>Alamat pengiriman</h3>  
             <p>Agung prayogi</p>
             <p>sentul,semurejo,mojogedang.karanganyar</p>
             </div> 
             <div class="col text-end"> 
                <h3> informasi Pembayaran</h3>
                <p>Metode Pembayaran </p>
                <p>Status Pembayaran </p>
             </div>
          </div> 
          <hr class="mb-5"> 
          <div class="row mt-3 ">

           <h3 class="col-md-12 text-center mb-4">Payment intruction</h3>
           <p class="bg-warning">pembayaran telah dikirimkan , jika ingin membatalkan silahkan konfirmasi kembali kepada kami</p>
          </div>  
          <div class="row">
            <button class="btn btn-danger form-control">Pay</button>
          </div>
      </form>
  </div>
  
</div>
</div>
</body>