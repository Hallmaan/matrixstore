@extends('layouts.app')

@section('title')
All
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<div class="row">
						<div class="col-md-6">							
							<button type="button" id="buttonCreateModal" class="btn btn-primary" data-toggle="modal" data-target="#createModal" style="width: 100%;">Tambah Product</button>

							<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="exampleModalLabel">Add New Product</h4>
										</div>
										@if(Auth::user()->status == "FALSE")
										<form method="POST" action="{{route('logout')}}">
											@csrf
											@else
										<form method="POST" action="{{url('supplier/addproduct/success')}}">
											@endif
											<div class="modal-body">                                                
												{{ csrf_field() }}												

												<!-- <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
													<label for="description" class="control-label">Description</label>

													<textarea id="description" class="form-control" name="description" required>{{ old('description') }}</textarea>

													@if ($errors->has('description'))
													<span class="help-block">
														<strong>{{ $errors->first('description') }}</strong>
													</span>
													@endif                                            
												</div> -->
												@if(Auth::user()->status == "FALSE")
												<div class="alert alert-danger">
  												<strong>Warning!</strong> Contact Admin for activated your accounts. You have been LOGOUT if you submit this forms.
												</div>
												@endif
												@if(Auth::user()->store_type == "Restaurant")
												<div class="form-group{{ $errors->has('makanan') ? ' has-error' : '' }}">
													<label for="makanan" class="control-label">Makanan</label>

													<input id="makanan" type="text" class="form-control" name="makanan" value="{{ old('makanan') }}" required autofocus>

													@if ($errors->has('makanan'))
													<span class="help-block">
														<strong>{{ $errors->first('makanan') }}</strong>
													</span>
													@endif                                            
												</div>

												<div class="form-group{{ $errors->has('minuman') ? ' has-error' : '' }}">
													<label for="minuman" class="control-label">Minuman</label>

													<input id="minuman" type="text" class="form-control" name="minuman" value="{{ old('seat_qty') }}" required autofocus>

													@if ($errors->has('minuman'))
													<span class="help-block">
														<strong>{{ $errors->first('minuman') }}</strong>
													</span>
													@endif                                            
												</div>  
												<div class="form-group{{ $errors->has('Hidangan') ? ' has-error' : '' }}">
													<label for="Hidangan" class="control-label">Hidangan Penutup</label>

													<input id="Hidangan" type="text" class="form-control" name="Hidangan" value="{{ old('Hidangan') }}" required autofocus>

													@if ($errors->has('Hidangan'))
													<span class="help-block">
														<strong>{{ $errors->first('Hidangan') }}</strong>
													</span>
													@endif                                            
												</div>  
												<div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }}">
													<label for="harga" class="control-label">Harga</label>

													<input id="harga" type="text" class="form-control" name="harga" value="{{ old('harga') }}" required autofocus>

													@if ($errors->has('harga'))
													<span class="help-block">
														<strong>{{ $errors->first('harga') }}</strong>
													</span>
													@endif                                            
												</div> 
												<div class="form-group{{ $errors->has('stok') ? ' has-error' : '' }}">
													<label for="stok" class="control-label">Stok</label>

													<input id="stok" type="text" class="form-control" name="stok" value="{{ old('stok') }}" required autofocus>

													@if ($errors->has('stok'))
													<span class="help-block">
														<strong>{{ $errors->first('stok') }}</strong>
													</span>
													@endif                                            
												</div> 
												<div class="form-group{{ $errors->has('Status') ? ' has-error' : '' }}">
													<label for="Status" class="control-label">Status</label>

													<input type="text" class="form-control" name="Status" list="listid" 
													id="Status" value="{{ old('Status') }}" autofocus required>
													<datalist id="listid">
														<!-- foreachtempat -->
														<option value="TRUE"></option>
														<option value="FALSE"></option>
														<!-- foreachtempat -->
													</datalist>

													@if ($errors->has('Status'))
													<span class="help-block">
														<strong>{{ $errors->first('Status') }}</strong>
													</span>
													@endif                                            
												</div>              
											@else
											<div class="form-group{{ $errors->has('alat_tulis') ? ' has-error' : '' }}">
													<label for="alat_tulis" class="control-label">Alat Tulis</label>

													<input id="alat_tulis" type="text" class="form-control" name="alat_tulis" value="{{ old('alat_tulis') }}" required autofocus>

													@if ($errors->has('alat_tulis'))
													<span class="help-block">
														<strong>{{ $errors->first('alat_tulis') }}</strong>
													</span>
													@endif                                            
												</div>

												<div class="form-group{{ $errors->has('alat_hapus') ? ' has-error' : '' }}">
													<label for="alat_hapus" class="control-label">Alat Hapus</label>

													<input id="alat_hapus" type="text" class="form-control" name="alat_hapus" value="{{ old('alat_hapus') }}" required autofocus>

													@if ($errors->has('alat_hapus'))
													<span class="help-block">
														<strong>{{ $errors->first('alat_hapus') }}</strong>
													</span>
													@endif                                            
												</div>  
												<div class="form-group{{ $errors->has('kertas') ? ' has-error' : '' }}">
													<label for="kertas" class="control-label">Kertas</label>

													<input id="kertas" type="text" class="form-control" name="kertas" value="{{ old('kertas') }}" required autofocus>

													@if ($errors->has('kertas'))
													<span class="help-block">
														<strong>{{ $errors->first('kertas') }}</strong>
													</span>
													@endif                                            
												</div>  
												<div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }}">
													<label for="harga" class="control-label">Harga</label>

													<input id="harga" type="text" class="form-control" name="harga" value="{{ old('harga') }}" required autofocus>

													@if ($errors->has('harga'))
													<span class="help-block">
														<strong>{{ $errors->first('harga') }}</strong>
													</span>
													@endif                                            
												</div> 
												<div class="form-group{{ $errors->has('stok') ? ' has-error' : '' }}">
													<label for="stok" class="control-label">Stok</label>

													<input id="stok" type="text" class="form-control" name="stok" value="{{ old('stok') }}" required autofocus>

													@if ($errors->has('stok'))
													<span class="help-block">
														<strong>{{ $errors->first('stok') }}</strong>
													</span>
													@endif                                            
												</div>
												<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
													<label for="status" class="control-label">Status</label>

													<input type="text" class="form-control" name="status" list="listid" 
													id="status" value="{{ old('status') }}" autofocus required>
													<datalist id="listid">
														<!-- foreachtempat -->
														<option value="TRUE"></option>
														<option value="FALSE"></option>
														<!-- foreachtempat -->
													</datalist>

													@if ($errors->has('status'))
													<span class="help-block">
														<strong>{{ $errors->first('status') }}</strong>
													</span>
													@endif                                            
												</div>
												@endif
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>                                    
												<button type="submit" class="btn btn-success">Create</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br>
            <div class="card card-default">
                <div class="card-header">{{ Auth::user()->store_type }} View Product</div>
                
               	<div class="table-responsive">
               	 	
						
 				<table class="table table-bordered table-hover">
 						
							<thead>
							@if(Auth::user()->store_type == "Restaurant")
								<tr>
									<th>ID</th>
									<th>Makanan</th>
									<th>Minuman</th>
									<th>Hidangan</th>
									<th>Status</th>
									<th>Option</th>					
								</tr>
							</thead>
							<tbody>
								@foreach($restaurant as $key)  
								<tr>
									<td>{{$key->id}}</td>
									<td>{{$key->makanan}}</td>
									<td>{{$key->minuman}}</td>
									<td>{{$key->hidangan_penutup}}</td>
									<td>{{$key->status}}</td>
									<td><div class="col-md-6">
											<a href="#" class="btn btn-warning pull-left" role="button"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>Edit</a>
										</div>
										<br>
										<div class="col-md-6">
											<a href="{{url('supplier/product/destroy/'.$key->id)}}" class="btn btn-danger pull-right" role="button">Delete</a>
										</div>			
										</td>
								</tr>
								@endforeach
							</tbody>
								@else
								<thead>
									@foreach($stationary as $key)  
								<tr>
									<th>ID</th>
									<th>Alat Tulis</th>
									<th>Alat Hapus</th>
									<th>Kertas</th>
									<th>Status</th>
									<th>Option</th>					
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>{{$key->id}}</td>
									<td>{{$key->alat_tulis}}</td>
									<td>{{$key->alat_hapus}}</td>
									<td>{{$key->kertas}}</td>
									<td>{{$key->status}}</td>
									<td><div class="col-md-6">
											<a href="#" class="btn btn-warning pull-left" role="button"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>Edit</a>
										</div>
										<br>
										<div class="col-md-6">
											<a href="{{url('supplier/product/destroy/'.$key->id)}}" class="btn btn-danger pull-right" role="button">Delete</a>
										</div>			
										</td>
								</tr>
								@endforeach
							</tbody>
								@endif
							</body>		
			</table>
			</div>
            </div>
        </div>
    </div>
</div>

@if (session('code_error'))
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#createModal').modal('show');
	});
</script>
@endif
@endsection

