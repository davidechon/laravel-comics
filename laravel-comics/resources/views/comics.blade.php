@extends('layout.base')

@section('pageTitle')
    Laverel Comics - Comics
@endsection

@section('mainContent')
    <h1>Comics</h1>
    {{-- @dump($comics) --}}
    <div class="container cards-container">
      <div class="card-group">
        <div class="btn-top">Current Series</div>
          <div class="row">
            @foreach ($comic as $comics)
              <ul class="card-box">
                <li>
                  <img class="card" src="{{$comics['thumb']}}" alt="{{$comics['title']}}">
                  <span class="text">{{$comics['title']}}</span>
                </li>
              </ul>
            @endforeach
            <div class="btn-button">Load more</div>
          </div> <!-- /row -->
        </div> <!-- /btn-top -->   
      </div> <!-- /card-group -->   
    </div> <!-- /container cards-container -->
@endsection