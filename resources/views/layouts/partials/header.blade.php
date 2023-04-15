<header>
    <h1>Your best Manager of the Catalan Football League</h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active':''}}">Home</a>
            </li>
            <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active':''}}">Teams</a>
            </li>
            <li><a href="{{route('fixtures')}}" class="{{request()->routeIs('fixtures') ? 'active':''}}">Fixtures</a>
            </li>
            <li><a href="{{route('results')}}" class="{{request()->routeIs('results') ? 'active':''}}">Results</a>
            </li>
            <li><a href="{{route('about')}}" class="{{request()->routeIs('about') ? 'active':''}}">Abouts us</a>
            </li>
            <li><a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.index') ? 'active':''}}">Contact us</a>
            </li>
        </ul>
    </nav>
</header>