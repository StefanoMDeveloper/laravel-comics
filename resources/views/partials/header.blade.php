<header>
    <div class="view">
        <div class="container header-container">
          <div class="logo">
            <img src="{{ asset('images/dc-logo.png') }}" alt="">
          </div>
          <nav>
            <ul>
                @foreach ($link as $indice => $links)
                    <li>
                        <a href="{{$links['url']}}" class="active">
                            {{$links['text']}}
                        </a>
                    </li>
                @endforeach
            </ul>
          </nav>
        </div>
      </div>
</header>

