@extends('layouts.app')

@section('title')
All
@endsection

@section('content')

<!-- <div class="container"> -->
    <div class="row justify-content-center">
        <div class="col-md-8">
        	  <br>
                <button type="button" class="btn btn-primary">Add Supplier</button>
               	<br>
               	<br>
            <div class="card card-default">
                <div class="card-header">List Supplier Activated</div>
              
               	<div class="table-responsive">
               	 	
						
 				<table class="table table-bordered table-hover">
 						
							<thead>
							
								<tr>
									<th>ID</th>
									<th>Supplier Name</th>
									<th>Store Name</th>
									<th>Store Address</th>
									<th>Store Type</th>
									<th>Store Slogan</th>
									<th>Supplier Code</th>
									<!-- <th>Created At</th> -->
									<th>Status</th>				
									<th>Option</th>			
								</tr>
							</thead>
								<tbody>
						@foreach($userstrue as $key)
								<tr>                                    
									<td>{{$key->id}}</td>
									<td>{{$key->name}}</td>
									<td>{{$key->store_name}}</td>
									<td>{{$key->store_address}}</td>
									<td>{{$key->store_type}}</td>
									<td>{{$key->store_slogan}}</td>
									<td>{{$key->supplier_code}}</td>					
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
                <div class="card-header">List Supplier Pending</div>
              
               	<div class="table-responsive">
               	 	
						
 				<table class="table table-bordered table-hover">
 						
							<thead>
							
								<tr>
									<th>ID</th>
									<th>Supplier Name</th>
									<th>Store Name</th>
									<th>Store Address</th>
									<th>Store Type</th>
									<th>Store Slogan</th>
									<th>Supplier Code</th>
									<!-- <th>Created At</th> -->
									<th>Status</th>				
									<th>Option</th>		
								</tr>
							</thead>
								<tbody>
								@foreach($usersfalse as $key)
								<tr>                                    
									<td>{{$key->id}}</td>
									<td>{{$key->name}}</td>
									<td>{{$key->store_name}}</td>
									<td>{{$key->store_address}}</td>
									<td>{{$key->store_type}}</td>
									<td>{{$key->store_slogan}}</td>
									<td>{{$key->supplier_code}}</td>					
									<!-- <td>Created at</td> -->
									<td>{{$key->status}}</td>
									<td>
										<div class="col-md-6">
											<a href="{{url('admin/managesupplier/activate/'.$key->id)}}" class="btn btn-success pull-left" role="button"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>Accept</a>
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

