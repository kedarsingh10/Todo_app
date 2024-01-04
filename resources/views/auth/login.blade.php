@extends('layout.app')

@section('content')

<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">
        <form action="{{ route('login') }}" method="POST">
            @csrf

            @if(session('status'))
                <div class="text-red-500">
                    {{ session('status') }}
                </div>
            @endif

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

            <div class="mb-4 flex item-center">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember">Remember Me</label>
            </div>

            <div>
                <button type="submit" class="w-full rounded bg-blue-500 text-white font-medium p-3">Login</button>
            </div>
        </form>
    </div>
</div>

@endsection