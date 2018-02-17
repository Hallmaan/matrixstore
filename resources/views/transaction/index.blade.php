@extends('layouts.app')

@section('title')
All
@endsection

@section('content')

<!-- <div class="container"> -->
    <div class="row justify-content-center">
        <div class="col-md-8">
        	  <br>
                <button type="button" class="btn btn-primary">Add Transaction</button>
               	<br>
               	<br>
            <div class="card card-default">
                <div class="card-header">{{ Auth::user()->store_type }} Transaction Succesfully</div>
              
               	<div class="table-responsive">
               	 	
						
 				<table class="table table-bordered table-hover">
 						
							<thead>
							
								<tr>
									<th>ID</th>
									<th>Kode Transaksi</th>
									<th>Kode Customer</th>
									<th>Kode Supplier</th>
									<th>Kode Produk</th>
									<th>Jumlah</th>
									<!-- <th>Keterangan</th> -->
									<!-- <th>Created At</th> -->
									<th>Status</th>				
									<th>Option</th>			
								</tr>
							</thead>
								<tbody>
						@foreach($transactiontrue as $key)
								<tr>                                    
									<td>{{$key->id}}</td>
									<td>{{$key->transaksi_code}}</td>
									<td>{{$key->customer_code}}</td>
									<td>{{$key->supplier_code}}</td>
									<td>{{$key->product_code}}</td>
									<td>{{$key->jumlah}}</td>
									<!-- <td>Keterangan</td>					 -->
									<!-- <td>Created at</td> -->
									<td>{{$key->status}}</td>
									<td>
										<div class="col-md-6">
											<a href="#" class="btn btn-danger" role="button">Delete</a>
										</div>
									</td>
								</tr>
						@endforeach
							</tbody>		
			</table>
			<!-- </div> -->
            </div>
        </div>
        <br>
        <div class="card card-default">
                <div class="card-header">{{ Auth::user()->store_type }} Transaction Pending</div>
              
               	<div class="table-responsive">
               	 	
						
 				<table class="table table-bordered table-hover">
 						
							<thead>
							
								<tr>
									<th>ID</th>
									<th>Kode Transaksi</th>
									<th>Kode Customer</th>
									<th>Kode Supplier</th>
									<th>Kode Produk</th>
									<th>Jumlah</th>
									<!-- <th>Keterangan</th> -->
									<!-- <th>Created At</th> -->
									<th>Status</th>				
									<th>Option</th>			
								</tr>
							</thead>
								<tbody>
					@foreach($transactionfalse as $key)
								<tr>                                    
									<td>{{$key->id}}</td>
									<td>{{$key->transaksi_code}}</td>
									<td>{{$key->customer_code}}</td>
									<td>{{$key->supplier_code}}</td>
									<td>{{$key->product_code}}</td>
									<td>{{$key->jumlah}}</td>
									<!-- <td>Keterangan</td>					 -->
									<!-- <td>Created at</td> -->
									<td>{{$key->status}}</td>
									<td>
										<div class="col-md-6">
											<a href="{{url('transaction/index/activate/'.$key->id)}}" class="btn btn-success pull-left" role="button"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>Accept</a>
										</div>
										<br>
										<div class="col-md-6">
											<a href="#" class="btn btn-danger pull-right" role="button">Delete</a>
										</div>
									</td>
								</tr>
						@endforeach
							</tbody>		
			</table>
			<!-- </div> -->
            </div>
        </div>

       

@endsection

