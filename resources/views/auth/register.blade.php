@extends('layouts.app')

@section('content')
-	<body>
    <div class="container">
        <div class="form-container">
            <h2>Register</h2>
            <form method="POST" action="{{ url('register') }}">
                @csrf
                <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password:</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>
                        <div class="form-group">
                            <button type="submit">Register</button>
                        </div>

                <div class="form-group links">
                    have acoount? <a href="{{ route('login') }}">Login</a>
                </div>
            </form>
        </div>
    </div>
</body>

@endsection