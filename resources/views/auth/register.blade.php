@extends('layouts.app')
@section('content')
    <div>
        <div >
            <form action="" method="post">
            @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your name" value=>
                </div>

                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username" value="">
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your email" value="">
                </div>

                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a password" value="">
                </div>
                
                <div>
                    <label for="password_confirmation" class="sr-only">Confirm password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" value="">
                </div>

                <div>
                    <button type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection