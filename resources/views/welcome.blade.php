@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{Auth::guest() ? 'Welcome': 'Welcome, '.Auth::user()->first_name }} </div>
                @if (Auth::guest())
                    <div class="panel-body">
                        Your Application's Landing Page.
                    </div>
                @else
                    <div class="panel-body">
                        <p>Login Berhasil</p>
                        <p>Data Anda</p>
                        <p>Nama : {{Auth::user()->first_name.' '.Auth::user()->last_name}}</br>
                           Kota : {{Auth::user()->city}}</br>
                           Tanggal Lahir : {{Auth::user()->date_of_birth}}</br>
                           Tipe User : {{Auth::user()->user_type}}
                        </p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
