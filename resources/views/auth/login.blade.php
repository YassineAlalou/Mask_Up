@extends('layouts.app')

@section('content')
<div class="container">
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first" >
                <img src="././img/Logo.png" alt="User Icon" style="height: 100px; weight: 100px; margin-bottom: 20px;"/>
            </div>

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="email" id="login" class="fadeIn second @error('email') is-invalid @enderror" name="email" placeholder="email" value="{{ old('email') }}">
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <input id="password" type="password" class="fadeIn third @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>


        </div>
    </div>

</div>
@endsection
