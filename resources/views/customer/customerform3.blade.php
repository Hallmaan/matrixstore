@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="">
                <div class="panel-heading"><legend>Please choose Product what you want</legend></div>

                <div class="panel-body">
                	<div class="row">
                    @foreach($product as $key)
                    <!-- <?php
                    ?> -->        
                    <br>                
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">Product</div>
                            <form action="{{url('customer/transaction/success')}}" method="POST">
                                {{csrf_field()}}
                                <center>
                                    <br>
                                <div class="panel-body">   
                                	<h5>Makanan : {{$key->makanan}}</h5>                            
                                    <h5>Minuman : {{$key->minuman}}</h5>
                                    <h5>Hidangan Penutup : {{$key->hidangan_penutup}}</h5>	
                                	<h5>Stok : {{$key->stok}}</h5>
                                	<h5>Harga : {{$key->harga}}</h5>		
                                </div>
                                </center>
                                <div class="panel-footer panel-primary">
                                    <input type="hidden" value="{{$key->id}}" name="id">
                                    <br>
                                    <button class="btn btn-primary btn-lg" style="width: 100%;" type="submit">Beli</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
