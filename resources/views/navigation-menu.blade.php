<nav class="flex items-center justify-between py-3 px-6 border-b border-gray-200">
    <div id="nav-left" class="flex items-center">
       <a href="{{ route('home')}}">
        <x-application-mark/>
       </a>
        <div class="top-menu ml-10">
            <div class="flex space-x-4">
                
                @auth
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>
                
                <x-nav-link href="{{ route('browse') }}" :active="request()->routeIs('browse')">
                    {{ __('Browse') }}
                </x-nav-link>
                @endauth


            </div>
        </div>
    </div>
    <div id="nav-right" class="flex items-center md:space-x-6">
        @guest
        @include('layouts.partials.header-right-guest')
        @endguest

        @auth()
       @include('layouts.partials.header-right-auth')
        @endauth 
       
    </div>
</nav>