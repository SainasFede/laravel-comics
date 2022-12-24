@extends('layouts.main')

@section('content')
    <main>
        <div class="jumbotron">
            <button>CURRENT SERIES</button>
        </div>

        <section class="dc-series">
            <div class="current-series">
                @foreach ($comics as $comic)
                    <div class="card">
                        <div class="img-card">
                          <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                        </div>
                        <a href="{{route('comic_detail', ['id' => $comic['id']])}}"><h4>{{$comic['title']}}</h4></a>
                    </div>
                @endforeach

            </div>
            <button>LOAD MORE</button>
        </section>

        <section class="cards">
            <div class="list-cards">
              <ul>
                <li>
                  <div class="img-card">
                    <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="buy-comics-digital-comics" />
                  </div>
                  <a href="#">DIGITAL COMICS</a>
                </li>

                <li>
                    <div class="img-card">
                      <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="buy-comics-merchandise" />
                    </div>
                    <a href="#">DC MERCHANDISE</a>
                  </li>

                  <li>
                    <div class="img-card">
                      <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="buy-comics-shop-locator" />
                    </div>
                    <a href="#">SUBSCRIPTION</a>
                  </li>

                  <li>
                    <div class="img-card">
                      <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="buy-comics-subscriptions" />
                    </div>
                    <a href="#">COMIC SHOP LOCATOR</a>
                  </li>

                  <li>
                    <div class="img-card">
                      <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="buy-dc-power-visa" />
                    </div>
                    <a href="#">DC POWER VISA</a>
                  </li>
              </ul>
            </div>
          </section>
    </main>
@endsection
