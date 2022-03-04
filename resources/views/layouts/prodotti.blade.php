<div class="view">
    <div class="container">
      <div class="titolo">
        <h3>Current Series</h3>
      </div>
      <div class="productsList">
        @foreach ($fumetti as $indice => $fumetto)
        <div class="product">
            <div class="immagine">
              <img src="{{$fumetto['thumb']}}" alt="{{$fumetto['series']}}" />
            </div>
        
            <h5>{{ $fumetto['series'] }}</h5>
          </div>
        @endforeach
      </div>
    </div>
  </div>
