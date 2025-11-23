<footer class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-xl font-bold text-teal-400 mb-4">Orsi Szabo</h3>
                <p class="text-gray-300">
                    {{ __('messages.footer.tagline') }}<br>
                    {{ __('messages.footer.subtitle') }}
                </p>
            </div>
            
            <div>
                <h3 class="text-lg font-semibold mb-4">{{ __('messages.footer.quick_links') }}</h3>
                <ul class="space-y-2">
                    <li><a href="{{ app()->getLocale() === 'en' ? route('page.show', 'team') : route('page.show', 'equipo') }}" class="text-gray-300 hover:text-teal-400 transition">{{ __('messages.nav.team') }}</a></li>
                    <li><a href="{{ app()->getLocale() === 'en' ? route('page.show', 'training') : route('page.show', 'formacion') }}" class="text-gray-300 hover:text-teal-400 transition">{{ __('messages.nav.training') }}</a></li>
                    <li><a href="{{ app()->getLocale() === 'en' ? route('page.show', 'certification') : route('page.show', 'certificacion') }}" class="text-gray-300 hover:text-teal-400 transition">{{ __('messages.nav.certification') }}</a></li>
                    <li><a href="{{ app()->getLocale() === 'en' ? route('page.show', 'team-coaching') : route('page.show', 'coaching-equipos') }}" class="text-gray-300 hover:text-teal-400 transition">{{ __('messages.nav.team_coaching') }}</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-teal-400 transition">{{ __('messages.nav.contact') }}</a></li>
                </ul>
            </div>
            
            <div>
                <h3 class="text-lg font-semibold mb-4">{{ __('messages.footer.contact_info') }}</h3>
                <ul class="space-y-2 text-gray-300">
                    <li>{{ __('messages.footer.email') }}: info@solutionfocus.es</li>
                    <li>{{ __('messages.footer.spain') }}</li>
                </ul>
            </div>
        </div>
        
        <div class="mt-8 pt-8 border-t border-gray-800 text-center text-gray-400">
            <p>&copy; {{ date('Y') }} Orsi Szabo. {{ __('messages.footer.rights') }}</p>
        </div>
    </div>
</footer>
