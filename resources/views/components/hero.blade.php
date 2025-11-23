<div class="{{ $class ?? 'bg-gradient-to-r from-teal-500 to-teal-600 text-white' }}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                {{ $title }}
            </h1>
            @isset($subtitle)
                <p class="text-xl md:text-2xl mb-8 text-teal-100">
                    {{ $subtitle }}
                </p>
            @endisset
            @isset($cta)
                <div class="flex justify-center gap-4">
                    {{ $cta }}
                </div>
            @endisset
        </div>
    </div>
</div>

