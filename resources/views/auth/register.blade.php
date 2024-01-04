@extends('layout.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" class="w-full bg-gray-100 p-2 rounded-lg border-2 @error('name') border-red-500  @enderror" value="{{ old('name') }}">
                    
                    @error('name')
                        <div class="mt-2 text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" id="username" name="username" placeholder="Username" class="w-full bg-gray-100 p-2 rounded-lg border-2 @error('username') border-red-500 @enderror" value="{{ old('username') }}">

                    @error('username')
                        <div class="mt-2 text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" class="w-full bg-gray-100 p-2 rounded-lg border-2 @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                    @error('email')
                        <div class="mt-2 text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" id="password" name="password" placeholder="Choose a Password" class="w-full bg-gray-100 p-2 rounded-lg border-2 @error('password') border-red-500 @enderror" value="">

                    @error('password')
                        <div class="mt-2 text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Password again</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repeat your password" class="w-full bg-gray-100 p-2 rounded-lg border-2 @error('password_confirmation') border-red-500 @enderror" value="">

                    @error('password_confirmation')
                        <div class="mt-2 text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="w-full rounded bg-blue-500 text-white font-medium p-3">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection