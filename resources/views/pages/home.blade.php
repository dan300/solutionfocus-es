@extends('layouts.app')

@section('title', 'Solution Focused Coaching - Orsi Szabo')
@section('description', app()->getLocale() === 'en' ? 'Solution-focused coaching and training in Spain. Let\'s build the future you desire together.' : 'Formación y coaching centrado en soluciones en España. Construyamos juntos el futuro que deseas.')

@section('content')
    <!-- Hero Section -->
    <x-hero :title="__('messages.home.hero_title')" :subtitle="__('messages.home.hero_subtitle')">
        <x-slot name="cta">
            <a href="{{ route('contact') }}" class="inline-block bg-white text-teal-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition shadow-lg">
                {{ __('messages.home.cta_contact') }}
            </a>
            <a href="{{ app()->getLocale() === 'en' ? route('page.show', 'training') : route('page.show', 'formacion') }}" class="inline-block bg-teal-700 text-white px-8 py-3 rounded-lg font-semibold hover:bg-teal-800 transition">
                {{ __('messages.home.cta_explore') }}
            </a>
        </x-slot>
    </x-hero>

    <!-- Introduction -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">
                {{ __('messages.home.welcome_title') }}
            </h2>
            <p class="text-xl text-gray-600 leading-relaxed mb-8">
                {!! __('messages.home.welcome_text') !!}
            </p>
            <p class="text-lg text-gray-600 leading-relaxed">
                {!! __('messages.home.welcome_text_2') !!}
            </p>
        </div>
    </section>

    <!-- What We Offer -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('messages.home.what_we_offer') }}</h2>
                <p class="text-xl text-gray-600">{{ __('messages.home.what_we_offer_subtitle') }}</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <a href="{{ app()->getLocale() === 'en' ? route('page.show', 'team') : route('page.show', 'equipo') }}" class="bg-white rounded-lg shadow-md p-8 hover:shadow-xl transition group">
                    <div class="text-teal-600 mb-4">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center group-hover:text-teal-600 transition">{{ __('messages.home.team_card_title') }}</h3>
                    <p class="text-gray-600 text-center">{{ __('messages.home.team_card_desc') }}</p>
                </a>

                <a href="{{ app()->getLocale() === 'en' ? route('page.show', 'training') : route('page.show', 'formacion') }}" class="bg-white rounded-lg shadow-md p-8 hover:shadow-xl transition group">
                    <div class="text-teal-600 mb-4">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center group-hover:text-teal-600 transition">{{ __('messages.home.training_card_title') }}</h3>
                    <p class="text-gray-600 text-center">{{ __('messages.home.training_card_desc') }}</p>
                </a>

                <a href="{{ app()->getLocale() === 'en' ? route('page.show', 'certification') : route('page.show', 'certificacion') }}" class="bg-white rounded-lg shadow-md p-8 hover:shadow-xl transition group">
                    <div class="text-teal-600 mb-4">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center group-hover:text-teal-600 transition">{{ __('messages.home.certification_card_title') }}</h3>
                    <p class="text-gray-600 text-center">{{ __('messages.home.certification_card_desc') }}</p>
                </a>

                <a href="{{ app()->getLocale() === 'en' ? route('page.show', 'team-coaching') : route('page.show', 'coaching-equipos') }}" class="bg-white rounded-lg shadow-md p-8 hover:shadow-xl transition group">
                    <div class="text-teal-600 mb-4">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center group-hover:text-teal-600 transition">{{ __('messages.home.team_coaching_card_title') }}</h3>
                    <p class="text-gray-600 text-center">{{ __('messages.home.team_coaching_card_desc') }}</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Solution Focused Approach -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">
                    {{ __('messages.home.approach_title') }}
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="bg-teal-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-teal-600">1</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ __('messages.home.approach_1_title') }}</h3>
                    <p class="text-gray-600">
                        {{ __('messages.home.approach_1_desc') }}
                    </p>
                </div>

                <div class="text-center">
                    <div class="bg-teal-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-teal-600">2</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ __('messages.home.approach_2_title') }}</h3>
                    <p class="text-gray-600">
                        {{ __('messages.home.approach_2_desc') }}
                    </p>
                </div>

                <div class="text-center">
                    <div class="bg-teal-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-teal-600">3</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ __('messages.home.approach_3_title') }}</h3>
                    <p class="text-gray-600">
                        {{ __('messages.home.approach_3_desc') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-teal-600 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                {{ __('messages.home.cta_final_title') }}
            </h2>
            <p class="text-xl mb-8 text-teal-100">
                {{ __('messages.home.cta_final_subtitle') }}
            </p>
            <a href="{{ route('contact') }}" class="inline-block bg-white text-teal-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition shadow-lg">
                {{ __('messages.home.cta_final_button') }}
            </a>
        </div>
    </section>
@endsection
