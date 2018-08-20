@extends('layouts.app')

@section('content')
    <div class="columns is-centered ">
        <div class="column is-6">
            <div class="card">
                <header class="card-header"><h3 class="card-header-title">Yesevi CRM - Login</h3></header>
                <div class="card-content">
                    <form method="POST" action="{{ route('login')  }}" aria-label="{{ __('Login') }}">
                        @csrf
                        <div class="field">
                            <label for="email" class="label">{{ __('E-Mail Address')  }}</label>
                            <div class="control has-icons-left has-icons-right">
                                <input id="email" class="input {{ $errors->has('email') ? ' is-danger' : 'is-info' }}" type="email" name="email" placeholder="{{ __('E-Mail Address')  }}" value="{{ old('email') }}" required autofocus>
                                <span class="icon is-small is-left"><i class="fas fa-user"></i></span>
                            </div>
                            @if($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <div class="field">
                            <label for="password" class="label">{{ __('Password')  }}</label>
                            <div class="control has-icons-left has-icons-right">
                                <input id="password" class="input {{ $errors->has('password') ? ' is-danger' : 'is-info' }}" type="password" name="password" placeholder="{{ __('Your password')  }}" value="" required>
                                <span class="icon is-small is-left"><i class="fas fa-key"></i></span>
                            </div>
                            @if($errors->has('password'))
                                <p class="help is-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                        <div class="field">
                            <div class="control">
                                <label for="remember" class="checkbox">
                                    <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="field">
                            <button class="button is-link is-fullwidth"><span><i class="fas fa-sign-in-alt"></i> {{ __('Login') }}</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
