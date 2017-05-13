@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Transaksi</div>

                <div class="panel-body">
                    <p>Detail Transaksi<p>
                    @foreach($transaksi as $trans)
                    <p>Outlet : {{$trans->outlet->name}} <br>
                    Nama Product : {{$trans->product->name}} <br>
                    Harga : {{$trans->product->price}} <br>
                    Quantity: {{$trans->quantity}} <br>
                    Total:{{$trans->total}} </p>
                    <hr />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection