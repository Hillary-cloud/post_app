@extends('layouts.app')
@section('content')
    <div>
        <div >
            <form action="{{route('login')}}" method="post">
            @csrf

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your email" value="">
                </div>

                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a password" value="">
                </div>
                

                <div>
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection