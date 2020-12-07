@extends('partial.auth')

@section('title', 'Masuk')

@section('content')
<body>
    <div id="blur">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="box" method="post" action="{{ url('login') }}">
                            <h1>Login</h1>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                            @endif
                            <p class="text-muted"> Please enter your email and password!</p>
                            @csrf 
                            <input type="text" class="form-control" name="email" autofocus placeholder="Email"> 
                            <input type="password" class="form-control" name="password" placeholder="Password"> 
                            <input type="submit" name="login" value="Login">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
