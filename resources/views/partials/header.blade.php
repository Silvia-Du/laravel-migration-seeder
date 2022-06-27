<header class="debug">

    <div class="container py-3">
        <nav>
            <ul class="d-flex mb-0">
                <li><a class="{{ Route::currentRouteName() === 'home'? 'active': '' }}" href="{{ route('home') }}">Home</a></li>
                <li><a class="{{ Route::currentRouteName() === 'about'? 'active': '' }}" href="{{ route('about') }}">About</a></li>
                <li><a class="{{ Route::currentRouteName() === 'trains'? 'active': '' }}" href="{{ route('trains') }}">Trains</a></li>
            </ul>
        </nav>
    </div>
</header>
