@extends('layouts.app')
@section('title')
    {{ __('Yesevi CRM Homepage') }}
@endsection

@section('content')
<section class="columns is-multiline is-fullheight">

    @include('layouts.sidebar')

    <div class="container column is-9">
        <div class="section">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif


            <table class="table is-bordered is-striped is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th>Adı Soyadı</th>
                        <th>Doğum Tarihi</th>
                        <th>Adres</th>
                    </tr>
                </thead>
                <tbody>
                @if(!empty($customers))
                    {{ $customers }}
                    @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer->name . ' ' . $customer->surname  }}</td>
                            <td>{{ $customer->birth }}</td>
                            <td>{{ $customer->address }}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
