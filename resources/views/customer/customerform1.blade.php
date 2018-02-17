@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Make Transaction</div>

                 <div class="panel-body">                    
                    <form class="form-horizontal" method="GET" action="{{ url('customer/transaction/search') }}">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('store_type') ? ' has-error' : '' }}">
                                <center>
                                <label for="store_type" class="col-md-4 control-label">Choose Store Type</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="store_type">
                                                                            
                                        <option value="Restaurant">Restaurant</option>
                                        <option value="Stationary">Stationary</option>
                                        
                                    </select>
                                    <!-- <input id="route_from" type="text" class="form-control" name="route_from" value="{{ old('route_from') }}" required autofocus> -->

                                    @if ($errors->has('store_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('store_type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </center>
                            </div>
                            <center>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Cari 
                                    </button>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                            </div>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
