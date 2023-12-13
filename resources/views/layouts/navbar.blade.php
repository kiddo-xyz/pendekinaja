<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>PendekinAja.com</title>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <title>Document</title>
</head>
<body>
    <nav>
        <ul class="navitems">
            @guest
            {{-- <li><a href="{{route('dashboard')}}" :active="request()->routeIs('dashboard')">Beranda</a></li> --}}
            <li><a href="{{route('login')}}">Masuk</a></li>
            <li class="atau">|</li>
            <li><a href="{{route('register')}}"">Daftar</a></li>

            @else
            <li><a href="{{route('dashboard')}}" :active="request()->routeIs('dashboard')">Beranda</a></li>
            <li><a href="{{route('user.links')}}" :active="request()->routeIs('user.links')">Tautan</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a></li>
            <!-- Logout form -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @endguest
        </ul>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>