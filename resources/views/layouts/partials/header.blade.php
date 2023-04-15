<header>
    <h1>Tu mejor Gestor de Equipos de la Liga de Futbol de Catalunya</h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active':''}}">Home</a>
            </li>
            <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active':''}}">Equipos</a>
            </li>
            <li><a href="{{route('partidos')}}" class="{{request()->routeIs('partidos') ? 'active':''}}">Partidos</a>
            </li>
            <li><a href="{{route('clasificatorias')}}" class="{{request()->routeIs('clasificatorias') ? 'active':''}}">Clasificatorias</a>
            </li>
            <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active':''}}">Nosotros</a>
            </li>
            <li><a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.index') ? 'active':''}}">Contáctanos</a>
            </li>
        </ul>
    </nav>
</header>