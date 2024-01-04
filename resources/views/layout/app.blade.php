<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDO</title>
</head>
<body class="bg-gray-200">

    <nav class="bg-white flex justify-between  p-6 mb-6">
        <ul class="flex items-center">
            <li>
                <a href="{{ route('todo') }}" class="p-3"> ToDO </a>
            </li>
            <li>
                <a href="{{ route('task.create') }}"> New Task </a>
            </li>

        </ul>
        <ul class="flex items-center">
            @auth
                <li>
                    <a href="" class="p-3">
                        {{ auth()->user()->name }}
                    </a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">
                        Logout
                    </button>
                    </form>
                </li>
            @endauth

            @guest
                <li>
                    <a href="{{ route('login') }}" class="p-3"> Login </a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="p-3"> Register </a>
                </li>
            @endguest
        </ul>
    </nav>
    
    @yield('content')
</body>
</html>