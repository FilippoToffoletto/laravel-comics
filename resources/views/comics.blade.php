@extends('layout.main')

@section('content')
    <main>
        <div class="container">
            <div class="current">
              <div class="btn"><h4>current series</h4></div>
            </div>
            <div class="row">

                @foreach ($comics as $comic)

                    <div class="card">
                        <a href="">
                            <div class="img">
                                <img src="{{$comic['thumb']}}"  alt="{{$comic['series']}}">
                            </div>
                            <h4>{{$comic['series']}}</h4>
                        </a>
                    </div>

                @endforeach



            </div>
        </div>
        <div class="btn"><h4>load more</h4></div>
    </main>
@endsection
