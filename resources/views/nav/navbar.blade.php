<header class="d-flex justify-content-center py-3 menu sticky-top p-3">
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="/" class="nav-link fs-3 {{ Request::is('/') ? 'active':'' }}">Inicio</a></li>
        <li class="nav-item"><a href="/agejo" class="nav-link fs-3 {{ Request::is('agejo') ? 'active':'' }}">Agejo</a></li>
        <li class="nav-item"><a href="/ganguro" class="nav-link fs-3 {{ Request::is('ganguro') ? 'active':'' }}">Ganguro</a></li>
        <li class="nav-item"><a href="/himegal" class="nav-link fs-3 {{ Request::is('himegal') ? 'active':'' }}">Himegal</a></li>
        <li class="nav-item"><a href="/tsuyome" class="nav-link fs-3 {{ Request::is('tsuyome') ? 'active':'' }}">Tsuyome</a></li>
    </ul>
</header>