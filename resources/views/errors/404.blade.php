@extends('layouts.app')
@section('title')
    {{ __('messages.404-not-found') }}
@endsection

@section('content')
    <section class="columns is-multiline is-fullheight">
        <div class="container column is-12">
            <div class="content has-text-centered">
                <h1 class="title is-size-1">{{ __('messages.404-not-found') }}</h1>
                <hr >
                <h4 class="subtitle is-size-4">{{ __('messages.404-message') }}</h4>
                <i class="far fa-sad-cry fa-10x has-text-danger"></i>
            </div>
        </div>
        <div class="container column is-4">
            <div class="has-text-centered">
                <a href="{{ url('/') }}" class="button is-link is-fullwidth">Go to Home</a>
            </div>
        </div>
    </section>
@endsection
