
                    <x-nav-link :href="route('berita.index')" :active="request()->routeIs('berita.index')">
                        {{ __('Berita') }}
                    </x-nav-link>
                    <x-nav-link :href="route('games.index')" :active="request()->routeIs('games.index')">
                        {{ __('Game') }}
                    </x-nav-link>