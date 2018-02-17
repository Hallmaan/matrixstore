@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user()->status == "FALSE")
                    <div class="alert alert-danger">
                    <strong>Warning!</strong> Your Contact Admin For Activated Your Accounts.
                    </div>
                    @elseif(Auth::user()->status == "TRUE")

                    You are logged in!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
