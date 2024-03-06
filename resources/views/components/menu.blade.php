<ul class="navbar-nav">
    
@if(auth()->check())
    @foreach(config('menu.' . auth()->user()->role) as $item)
        <li class="nav-item{{count($item['submenu']) > 0 ? ' dropdown':''}}">
            <a class="nav-link{{count($item['submenu']) > 0 ? ' dropdown-toggle':''}}" @if(count($item['submenu']) > 0) href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" @else target="iframe-pages" href="{{url($item['url'])}}" @endif>
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        @foreach($item['path_d'] as $path_d)
                            <path d="{{$path_d}}" />
                        @endforeach
                    </svg>
                </span>
                <span class="nav-link-title">
                {{ $item['text'] }}
                </span>
            </a>
            @if(count($item['submenu']) > 0)
            <div class="dropdown-menu">
                <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                        @foreach($item['submenu'] as $sub)
                        <a class="dropdown-item" target="iframe-pages" href="{{url($sub['url'])}}">
                            {{$sub['text']}}
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>    
            @endif
        </li>
    @endforeach
@endif
</ul>