<header class="bg-white shadow-sm sticky top-0 z-50" x-data="{ mobileMenuOpen: false }">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-teal-600">
                        Orsi Szabo
                    </a>
                </div>
            </div>
            
            <div class="hidden sm:ml-6 sm:flex sm:items-center sm:space-x-8">
                <a href="{{ app()->getLocale() === 'en' ? route('page.show', 'team') : route('page.show', 'equipo') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->is('team') || request()->is('equipo') || request()->is('*/team') || request()->is('*/equipo') ? 'border-teal-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} text-sm font-medium">
                    {{ __('messages.nav.team') }}
                </a>
                <a href="{{ app()->getLocale() === 'en' ? route('page.show', 'training') : route('page.show', 'formacion') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->is('training') || request()->is('formacion') || request()->is('*/training') || request()->is('*/formacion') ? 'border-teal-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} text-sm font-medium">
                    {{ __('messages.nav.training') }}
                </a>
                <a href="{{ app()->getLocale() === 'en' ? route('page.show', 'certification') : route('page.show', 'certificacion') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->is('certification') || request()->is('certificacion') || request()->is('*/certification') || request()->is('*/certificacion') ? 'border-teal-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} text-sm font-medium">
                    {{ __('messages.nav.certification') }}
                </a>
                <a href="{{ app()->getLocale() === 'en' ? route('page.show', 'team-coaching') : route('page.show', 'coaching-equipos') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->is('team-coaching') || request()->is('coaching-equipos') || request()->is('*/team-coaching') || request()->is('*/coaching-equipos') ? 'border-teal-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} text-sm font-medium">
                    {{ __('messages.nav.team_coaching') }}
                </a>
                <a href="{{ route('contact') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('contact') || request()->routeIs('contact.locale') ? 'border-teal-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} text-sm font-medium">
                    {{ __('messages.nav.contact') }}
                </a>
                
                <!-- Language Switcher -->
                <div class="flex items-center space-x-2 ml-4 pl-4 border-l border-gray-300">
                    <a href="{{ route('language.switch', 'en') }}" class="px-2 py-1 rounded {{ app()->getLocale() === 'en' ? 'bg-teal-600 text-white' : 'text-gray-500 hover:text-gray-700' }} text-sm font-medium transition">
                        EN
                    </a>
                    <a href="{{ route('language.switch', 'es') }}" class="px-2 py-1 rounded {{ app()->getLocale() === 'es' ? 'bg-teal-600 text-white' : 'text-gray-500 hover:text-gray-700' }} text-sm font-medium transition">
                        ES
                    </a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center sm:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-teal-500">
                    <span class="sr-only">{{ __('messages.nav.open_menu') ?? 'Open menu' }}</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile menu -->
    <div x-show="mobileMenuOpen" class="sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ app()->getLocale() === 'en' ? route('page.show', 'team') : route('page.show', 'equipo') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->is('team') || request()->is('equipo') || request()->is('*/team') || request()->is('*/equipo') ? 'border-teal-500 text-teal-700 bg-teal-50' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700' }} text-base font-medium">
                {{ __('messages.nav.team') }}
            </a>
            <a href="{{ app()->getLocale() === 'en' ? route('page.show', 'training') : route('page.show', 'formacion') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->is('training') || request()->is('formacion') || request()->is('*/training') || request()->is('*/formacion') ? 'border-teal-500 text-teal-700 bg-teal-50' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700' }} text-base font-medium">
                {{ __('messages.nav.training') }}
            </a>
            <a href="{{ app()->getLocale() === 'en' ? route('page.show', 'certification') : route('page.show', 'certificacion') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->is('certification') || request()->is('certificacion') || request()->is('*/certification') || request()->is('*/certificacion') ? 'border-teal-500 text-teal-700 bg-teal-50' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700' }} text-base font-medium">
                {{ __('messages.nav.certification') }}
            </a>
            <a href="{{ app()->getLocale() === 'en' ? route('page.show', 'team-coaching') : route('page.show', 'coaching-equipos') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->is('team-coaching') || request()->is('coaching-equipos') || request()->is('*/team-coaching') || request()->is('*/coaching-equipos') ? 'border-teal-500 text-teal-700 bg-teal-50' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700' }} text-base font-medium">
                {{ __('messages.nav.team_coaching') }}
            </a>
            <a href="{{ route('contact') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('contact') || request()->routeIs('contact.locale') ? 'border-teal-500 text-teal-700 bg-teal-50' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700' }} text-base font-medium">
                {{ __('messages.nav.contact') }}
            </a>
            
            <!-- Language Switcher Mobile -->
            <div class="flex space-x-2 pl-3 pr-4 py-2">
                <a href="{{ route('language.switch', 'en') }}" class="px-3 py-1 rounded {{ app()->getLocale() === 'en' ? 'bg-teal-600 text-white' : 'bg-gray-200 text-gray-700' }} text-sm font-medium">
                    EN
                </a>
                <a href="{{ route('language.switch', 'es') }}" class="px-3 py-1 rounded {{ app()->getLocale() === 'es' ? 'bg-teal-600 text-white' : 'bg-gray-200 text-gray-700' }} text-sm font-medium">
                    ES
                </a>
            </div>
        </div>
    </div>
</header>
