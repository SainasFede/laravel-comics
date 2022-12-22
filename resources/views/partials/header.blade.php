<header>

    <div class="logo">
      <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC">
    </div>

      <ul>
        <li><a class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}}" href="{{Route('characters')}}"><h4>CHARACTERS</h4></a></li>
        <li><a class="{{Route::currentRouteName() === 'comics' ? 'active' : ''}}" href="{{Route('comics')}}"><h4>COMICS</h4></a></li>
        <li><a class="{{Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="{{Route('movies')}}"><h4>MOVIES</h4></a></li>
        <li><a class="{{Route::currentRouteName() === 'tv' ? 'active' : ''}}" href="{{Route('tv')}}"><h4>TV</h4></a></li>
        <li><a class="{{Route::currentRouteName() === 'games' ? 'active' : ''}}" href="{{Route('games')}}"><h4>GAMES</h4></a></li>
        <li><a class="{{Route::currentRouteName() === 'collectibles' ? 'active' : ''}}" href="{{Route('collectibles')}}"><h4>COLLECTIBLES</h4></a></li>
        <li><a class="{{Route::currentRouteName() === 'videos' ? 'active' : ''}}" href="{{Route('videos')}}"><h4>VIDEOS</h4></a></li>
        <li><a class="{{Route::currentRouteName() === 'fans' ? 'active' : ''}}" href="{{Route('fans')}}"><h4>FANS</h4></a></li>
        <li><a class="{{Route::currentRouteName() === 'news' ? 'active' : ''}}" href="{{Route('news')}}"><h4>NEWS</h4></a></li>
        <li><a class="{{Route::currentRouteName() === 'shop' ? 'active' : ''}}" href="{{Route('shop')}}"><h4>SHOP</h4></a></li>
      </ul>

  </header>
