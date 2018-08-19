@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! {{ Auth::user()  }}

                    @if(!empty($customers))
                        <ul>
                            @foreach($customers as $customer)
                                <li><?=$customer->name?></li>
                            @endforeach
                        </ul>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
