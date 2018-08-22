@extends('layouts.app')
@section('title')
    {{ __('messages.title') . ' - ' . __('messages.users') }}
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


                <div class="table-container">
                    <table class="table is-bordered is-striped is-hoverable is-fullwidth table-responsive">
                        <thead>
                        <tr>
                            <th>{{ __('table.name-surname') }}</th>
                            <th>{{ __('table.email') }}</th>
                            <th>Admin</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(!empty($users))
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->is_admin ? __('messages.yes') : __('messages.no') }}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
                {{ $users->render('pagination::default') }}
            </div>
        </div>
    </section>
@endsection
