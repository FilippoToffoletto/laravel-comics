@extends('layout.main')

@section('content')
    <main>
        <div class="container">
            <div class="current">
              <div class="btn"><h4>Action Comics</h4></div>
            </div>
            <div class="row row-cols-2 card-detail">



                    <div class="col">
                            <div class="img">
                                <img src="{{$comic['thumb']}}"  alt="{{$comic['title']}}">
                            </div>
                    </div>
                    <div class="col">
                        <h1>{{$comic['title']}}</h1>
                        <h5>Sale Date: {{$comic['sale_date']}} | Price: {{$comic['price']}}</h5>
                        <h5>Type: {{$comic['type']}}</h5>
                        <p>{!! $comic['description'] !!}</p>
                        <h5>Artists:</h5>
                        <ul class="d-flex">
                            @foreach ($comic['artists'] as $artist)
                                <li>{{$artist}}</li>
                            @endforeach
                        </ul>
                    </div>




            </div>
        </div>
    </main>
@endsection
