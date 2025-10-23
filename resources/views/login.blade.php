@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height:60vh">
    <div class="card login-card p-4" style="width:350px">
        <h4 class="text-center text-success mb-3">Login Petani</h4>
        @if(isset($error))
            <div class="alert alert-danger text-center">
                {{ $error }}
            </div>
        @endif
        <form action="{{ route('keLogin') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <button class="btn btn-success w-100">Login</button>
        </form>
    </div>
</div>
@endsection
