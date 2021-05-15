@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Username</label>
                    <input type="text" name="username" id="name" placeholder="Your Name" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your Email" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Your Password" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Password again</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Password again" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
            </form>       
        </div>
    </div>
@endsection
