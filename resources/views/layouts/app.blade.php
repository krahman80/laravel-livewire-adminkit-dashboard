<x-layouts.base>

    @auth
    <div class="wrapper">
        @include('layouts.partials.sidebar')
        <div class="main">
            @include('layouts.partials.nav')
            {{ $slot }}
            @include('layouts.partials.footer')
        </div>
    </div>
    @endauth

    @guest
    @if (!auth()->check() && in_array(Route::currentRouteName(),['login','register','forgot-password'],))
    @include('layouts.partials.auth-top-wrapper')
    {{ $slot }}
    @include('layouts.partials.auth-bottom-wrapper')
    @endif
    @endguest

</x-layouts.base>