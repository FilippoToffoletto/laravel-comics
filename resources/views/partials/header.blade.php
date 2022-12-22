<header class="container">
    <div class="logo">
        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="Logo DC-comics">
    </div>

    <nav>
        <ul>
            <a class="{{ Route::CurrentRouteName() === 'home' ? 'active ' : '' }}" href="{{ route('home') }}"><li>HOME</li></a>
          <a class="{{ Route::CurrentRouteName() === 'personaggi' ? 'active ' : '' }}" href="{{ route('personaggi') }}"><li>CHARACTERS</li></a>
          <a class="{{ Route::CurrentRouteName() === 'fumetti' ? 'active' : '' }}" href="{{ route('fumetti') }}"><li>COMICS</li></a>
          <a class="{{ Route::CurrentRouteName() === 'film' ? 'active' : '' }}" href="{{ route('film') }}">
            <li>MOVIES</li></a>
          <a class="{{ Route::CurrentRouteName() === 'tv' ? 'active' : '' }}" href="{{ route('tv') }}">
            <li>TV</li></a>
          <a class="{{ Route::CurrentRouteName() === 'giochi' ? 'active' : '' }}" href="{{ route('giochi') }}"><li>GAMES</li></a>
          <a class="{{ Route::CurrentRouteName() === 'collezionabili' ? 'active' : '' }}" href="{{ route('collezionabili') }}"><li>COLLECTIBLES</li></a>
          <a class="{{ Route::CurrentRouteName() === 'video' ? 'active' : '' }}" href="{{ route('video') }}"><li>VIDEOS</li></a>
          <a class="{{ Route::CurrentRouteName() === 'fans' ? 'active' : '' }}" href="{{ route('fans') }}"><li>FANS</li></a>
          <a class="{{ Route::CurrentRouteName() === 'news' ? 'active' : '' }}" href="{{ route('news') }}"><li>NEWS</li></a>
          <a class="{{ Route::CurrentRouteName() === 'shop' ? 'active' : '' }}" href="{{ route('shop') }}"><li>SHOP</li></a>
        </ul>
    </nav>
</header>
