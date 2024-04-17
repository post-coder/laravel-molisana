<header>

    <img class="logo" src="{{ Vite::asset('resources/img/marchio-sito-test.png') }}" alt="Logo la molisana">

    {{-- navbar --}}
    <nav class="nav navbar-dark ">
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active"><a href="{{route('home')}}">Prodotti</a></li>
            <li>News</li>
        </ul>
    </nav>
    {{-- fine navbar --}}
</header>