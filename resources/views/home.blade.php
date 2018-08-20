@extends('layouts.app')
@section('title')
    {{ __('messages.title') }}
@endsection

@section('content')
<section class="columns is-multiline is-fullheight">

    @include('layouts.sidebar')

    <div class="container-fluid column is-9">
        @include('layouts.tiles')
    </div>
</section>
@endsection
