@extends('layouts.app')
@section('title')
    {{ __('messages.title') }}
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
                        <th>{{ __('table.name-surname') }}</th>
                        <th>{{ __('table.birth-date') }}</th>
                        <th>{{ __('table.address') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(!empty($customers))
                        @foreach($customers as $customer)
                            <tr>
                                <td>{{ $customer->name . ' ' . $customer->surname  }}</td>
                                <td>{{ $customer->birth->format('m/d/Y') }}</td>
                                <td>{{ $customer->address }}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                    {{ $customers->render('pagination::default') }}
            </div>
        </div>
    </section>
@endsection
