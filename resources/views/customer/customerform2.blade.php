@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="">
                <div class="panel-heading"><legend>Please choose supplier what you want</legend></div>

                <div class="panel-body">
                    <div class="row">
                    @foreach($users as $key)
                    <?php
                    $storename = \App\User::where('id',$key->supplier_code)->value('store_name');
                    $storeaddress = \App\User::where('id',$key->supplier_code)->value('store_address');
                    // $transtype = \App\TransportationType::where('id', '=', $transgettype)->value('description');
                    ?>        
                    <br>                
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">Supplier {{ $key->store_type }}</div>
                            <form action="{{url('customer/transaction/search/product')}}/{{$key->id}}" method="POST">
                                {{csrf_field()}}
                                <center>
                                    <br>
                                <div class="panel-body">                                
                                    <h5>Store Name : {{$key->store_name}}</h5>                            
                                    <h5>Store Address : {{$key->store_address}}</h5>
                                    <h5>Store Slogan : {{$key->store_slogan}}</h5>
                                </div>
                                </center>
                                <div class="panel-footer panel-primary">
                                    <input type="hidden" value="{{$key->id}}" name="id">
                                    <br>
                                    <button class="btn btn-primary btn-lg" style="width: 100%;" type="submit">Cari</button>
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
