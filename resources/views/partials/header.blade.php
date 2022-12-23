<?php

$links = config('db.main-menu');

?>


<header class="container">
    <div class="logo">
        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="Logo DC-comics">
    </div>

    <nav>
        <ul>
          @foreach ($links as $link)
              <a class="{{ Route::CurrentRouteName() === $link['route_name'] ? 'active ' : '' }}text-uppercase" href="{{ route($link['route_name']) }}">
                  <li>{{$link['text']}}</li>
              </a>
          @endforeach

        </ul>
    </nav>
</header>
